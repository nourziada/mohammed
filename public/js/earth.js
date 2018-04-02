// Created by Bjorn Sandvik - thematicmapping.org

function earthinit() {

	var webglEl = document.getElementById('earth');
	var container, aspectRatio, fieldOfView,
		nearPlane, farPlane,
		mouseX, mouseY, windowHalfX,
		windowHalfY, stats, geometry,
		starStuff, materialOptions, stars, blurScene;
    
		HEIGHT = window.innerHeight;
		WIDTH = window.innerWidth;
		aspectRatio = WIDTH / HEIGHT;
		fieldOfView = 35;
		nearPlane = 1;
		farPlane = 700;
		mouseX = 0;
		mouseY = 0;

		windowHalfX = WIDTH / 2;
		windowHalfY = HEIGHT / 2;

		starsCamera = new THREE.PerspectiveCamera(fieldOfView, aspectRatio, nearPlane, farPlane);

		starsCamera.position.z = farPlane / 0;
		
		scene2 = new THREE.Scene({antialias:true});
		scene2.fog = new THREE.FogExp2( 0xffffff, 0.00003 );
    
		starForge();
		
		if (webGLSupport()) {
			renderer = new THREE.WebGLRenderer({alpha: true});

		} else {
			renderer = new THREE.CanvasRenderer();
		}

		renderer.setClearColor(0x000001, 0);
		renderer.setPixelRatio(window.devicePixelRatio);
		document.addEventListener( 'mousemove', onMouseMove, true );
	
    
    
	if (!Detector.webgl) {
		Detector.addGetWebGLMessage(webglEl);
		return;
	}

	var width  = window.innerWidth,
		height = window.innerHeight;

	// Earth params
	var radius   = 0.46,
		segments = 32,
		rotation = 6;  

	var scene = new THREE.Scene();
    var scene2, starsCamera;
    var pers = width / height;
	var camera = new THREE.PerspectiveCamera(45, pers, 0.01, 1500);
	camera.position.z = 1.5;

	//var renderer = new THREE.WebGLRenderer();
    var renderer = new THREE.WebGLRenderer( { alpha: true } );
	renderer.setSize(width, height);

	scene.add(new THREE.AmbientLight(0x333333));

	var light = new THREE.DirectionalLight(0xffffff, 0.5);
	light.position.set(5,3,5);
	scene.add(light);

    var sphere = createSphere(radius, segments);
	sphere.rotation.y = rotation; 
	scene.add(sphere)
 

    var clouds = createClouds(radius, segments);
	clouds.rotation.y = rotation;
	scene.add(clouds)
        
	var lightin = new THREE.PointLight(0x222222);
	lightin.position.set(10000,0,0);
	scene.add(lightin);     
    
    var ball = createGlow(radius, segments);
	scene.add(ball)      
    
	var controls = new THREE.TrackballControls(camera);

	function createGlow(radius, segments) {
		return new THREE.Mesh(
			new THREE.SphereGeometry(radius + 0.12, segments, segments),			
			new THREE.ShaderMaterial({
                    uniforms: {
                        'c': {
                          type: 'f',
                          value: 0.6
                        },
                        'p': {
                          type: 'f',
                          value: 3.1
                        },
                        glowColor: {
                          type: 'c',
                          value: new THREE.Color(0x29aae1)
                        },
                        viewVector: {
                          type: 'v3',
                          value: camera.position
                        }
                      },                
                    vertexShader:   document.getElementById( 'vertexShader'   ).textContent,
                    fragmentShader: document.getElementById( 'fragmentShader' ).textContent,
                    side: THREE.BackSide,
                    blending: THREE.AdditiveBlending,
                    transparent: true
            })   
		);		
	}     
    
        
    
    
	webglEl.appendChild(renderer.domElement);
        var cou = 0;
        var on = true;
    
    camera.scale.z = 1.05;
   
    
    camera.updateMatrix();
    camera.updateProjectionMatrix();
    
            
            
    if ( $(window).width() > 1025 ) {
        starsCamera.scale.z = 0.001;    
        starsCamera.updateProjectionMatrix();  
        sphere.material.opacity = 0;
        clouds.material.opacity = 0;
        ball.material.uniforms.c.value = 0;


        function zoomin(){
                if ( on){

                    sphere.material.opacity += 0.07;
                    clouds.material.opacity += 0.03;
                    ball.material.uniforms.c.value += 0.018;
                    sphere.rotation.y += 0.09;
                    sphere.rotation.x += 0.01;
                    sphere.rotation.z += 0.01;
                    camera.scale.z -= 0.004;
                 countIt();
              }
}


        function szoomin(){
          if ( on){
                    starsCamera.position.z = farPlane / 4;
                    starsCamera.scale.z += 0.02;
            scountIt();
          }
}
    }

    function countIt(){
      cou+=.1;

      if(cou>7){
        on = false;
      }
    }
    
    function scountIt(){
      cou+=.1;

      if(cou>30){
        on = false;
      }
    }    

    function rotateIt(){
      camera.rotation.x +=.01;
      camera.rotation.y += .04;
    }
    
    
    
	animate();

    function animate() {
        if ( $(window).width() > 1025 ) {
            zoomin();
            szoomin(); 
        }
		requestAnimationFrame(animate);
		render();
	}
    
	function render() {
        renderer.autoClear = false;

		controls.update();
		sphere.rotation.y += 0.0007;
		clouds.rotation.y += 0.0007;	

        renderer.clear();
        var mx = 1000;
        var my = 1000;
        starsCamera.position.x += ( mx - starsCamera.position.x ) * 0.001;
        starsCamera.position.y += ( - my - starsCamera.position.y ) * 0.001;
        starsCamera.lookAt( scene2.position );
        renderer.render(scene2, starsCamera);        

            
        renderer.clearDepth();
		renderer.render(scene, camera);
                
	}


    
    
    
     
    
	function createSphere(radius, segments) {
		return new THREE.Mesh(
			new THREE.SphereGeometry(radius, segments, segments),
			new THREE.MeshPhongMaterial({
				map:         THREE.ImageUtils.loadTexture('img/texture/2_no_clouds_4k.jpg'),
				bumpMap:     THREE.ImageUtils.loadTexture('img/texture/elev_bump_4k.jpg'),
				bumpScale:   0.01,
				specularMap: THREE.ImageUtils.loadTexture('img/texture/water_4k.png'),
				specular:    new THREE.Color('grey')
			})
		);       
	}   
    
	function createClouds(radius, segments) {
		return new THREE.Mesh(
			new THREE.SphereGeometry(radius + 0.003, segments, segments),			
			new THREE.MeshPhongMaterial({
				map:         THREE.ImageUtils.loadTexture('img/texture/fair_clouds_4k.png'),
				transparent: true
			})     
		);		
	}      

	function webGLSupport() {
		try {
			var canvas = document.createElement('canvas');
			return !!(window.WebGLRenderingContext && (
				canvas.getContext('webgl') || canvas.getContext('experimental-webgl'))
			);
		} catch(e) {
			return false;
		}
	}
    
    window.addEventListener('resize', function () {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });    

    
    
	function starForge() {
		var starQty = 20000;
			geometry = new THREE.SphereGeometry(1000, 10, 50);

	    	materialOptions = {
	    		size: 1.0,
	    		transparency: true, 
	    		opacity: 0.1,
                fog: true,
                light: false

            }

	    	starStuff = new THREE.PointCloudMaterial(materialOptions);

		for (var i = 0; i < starQty; i++) {		

			var starVertex = new THREE.Vector3();
			starVertex.x = Math.random() * 2000 - 1000;
			starVertex.y = Math.random() * 2000 - 1000;
			starVertex.z = Math.random() * 2000 - 1000;

			geometry.vertices.push(starVertex);

		}


		stars = new THREE.PointCloud(geometry, starStuff);
		scene2.add(stars);
	}

	function onMouseMove(e) {
		mouseX = e.clientX - windowHalfX / 2;
		mouseY = e.clientY - windowHalfY / 2;
        starsCamera.position.z += ( mouseX - starsCamera.position.x ) * 0.001;
//        starsCamera.position.z += ( - mouseY - starsCamera.position.y ) * 0.001;        
        
	}	
};
earthinit();
