<footer>
    <div class="inside">
        <div class="footer_logo"><img src="img/footer_logo.png" /></div>
        <h5>Published by</h5>
        <p>{!! nl2br($siteSettings->getTranslatedAttribute('footer_desc', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')) !!}</p>
    </div>
</footer>
<!-- star button UP -->
<div> <a id="back-to-top" href="#" class="fa fa-angle-up btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"></a> </div>
<!-- End star button UP -->
</div>

<script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src='{{asset('js/loading.js')}}'></script>
<script type="text/javascript" src="{{asset('js/anime.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revealer.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vivus.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/masonry.pkgd.min.js')}}"></script>
<script type="text/javascript" src='{{asset('js/three.min.js')}}'></script>
<script type="text/javascript" src='{{asset('js/Detector.js')}}'></script>
<script type="text/javascript" src='{{asset('js/TrackballControls.js')}}'></script>



<script id="vertexShader" type="x-shader/x-vertex"> uniform vec3 viewVector; uniform float c; uniform float p; varying float intensity; void main() { vec3 vNormal = normalize( normalMatrix * normal ); vec3 vNormel = normalize( normalMatrix * viewVector ); intensity = pow( c - dot(vNormal, vNormel), p ); gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 ); } </script>
<!-- fragment shader a.k.a. pixel shader-->
<script id="fragmentShader" type="x-shader/x-vertex"> uniform vec3 glowColor; varying float intensity; void main() { vec3 glow = glowColor * intensity; gl_FragColor = vec4( glow, 1.0 ) * intensity; } </script>
<script type="text/javascript" src='{{asset('js/owl.carousel.js')}}'></script>
<script src='{{asset('js/wow.js')}}'></script>
<script>
    wow = new WOW(
        {
            animateClass: 'animated',
            mobile: false,
            offset: 50
        }
    );
    wow.init();

</script>