<!DOCTYPE html>
<html lang="">

@include('includes.style')

<style type="text/css">
    table {
            background-color: transparent !important;
    }
</style>
<style>
    *{
        font-family: "Pathway Gothic One", sans-serif;
        font-size:18px;
    }
</style>
<body class="loaded">
<div class="loader">
    <div class="preloader">
        <div class="bg mesh_loader"></div>
        <svg class="circles" viewbox="0 0 500 200">
            <g id="first">
                <path fill="none" stroke-linecap="round" stroke-width="0.5" stroke="#fff" stroke-dasharray="400,400" d="M100 60 A1 1 0 0 1 400 140
           A1 1 0 0 1 100 60"/>
                <text id="percentage" class="circ-text" text-anchor="middle" x="250" y="100" font-size="21px"
                      fill="#fff">{{trans('main.loading')}} ...
                </text>
                <!--                    <text id="verse" text-anchor="middle" font-size="12px" fill="#fff" x="250" y="290">"And We have not sent you but as a mercy to the worlds"</text>-->
            </g>
        </svg>
    </div>
</div>
<div id="wrapper" class="main-wrap">
    @include('includes.header')


    <div class="container-fluid " style="padding: 0; margin: 0 ">
        <div class="kode_sab_banner_wrap them_overlay header-style-1">
            <div class="banner">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">

                            <div class="col-sm-6">
                                <ul class="list-inline">
                                    <li><a href="{{route('index')}}">{{trans('main.home')}}</a></li>
                                    <li><i class="fa fa-angle-right"></i></li>
                                    <li><p>{{trans('main.biography')}}</p></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 text-right">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---->
    <div class="hosam">
        <div class="testimonials-section bg-img">
            <img class="top-right-test" src="{{asset('img/art_c.png')}}">
            <img class="bottom-left-test" src="{{asset('img/art_c.png')}}">
    
<div class="timeline-container" id="timeline-1">
  <div class="timeline-header">

  <div class="title animated wow fadeInUp" data-wow-delay="1" data-wow-duration="0.5s"
                         style="    display: inline-block; float: none; "><span class="left line">

                        </span>
                        
                        <h1>{{trans('main.mohammed')}}<br>{{trans('main.biography')}}</h1> <span class="right line">
                        <object id="pbuh01" type="image/svg+xml" data="{{asset('img/pbuh.svg')}}" __idm_frm__="1394"></object>
                        </span></div>

    <!--<h2 class="timeline-header__title">Muhammad</h2>
    <h3 class="timeline-header__subtitle">muhamad salaa allah ealayh wasalam</h3>-->
  </div>
  <div class="timeline">


    @forelse($firstBiographies as $bio)
    <div class="timeline-item" data-text="{{$bio->getTranslatedAttribute('title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}">
      <div class="timeline__content">
            <img class="timeline__img" src="{{Voyager::image($bio->image)}}"/>
            <h2 class="timeline__content-title">{{$bio->getTranslatedAttribute('title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</h2>
            <p class="timeline__content-desc">
            {!! $bio->getTranslatedAttribute('content', LaravelLocalization::getCurrentLocale(), 'fallbackLocale') !!}</p>
        </div>
    </div>

    @empty
    @endforelse


    <h2 class="timeline-header__title text-center"><img src="{{asset('img/makhtota.png')}}" style="width:150px;height:auto;"/></h2>
    <h3 class="timeline-header__subtitle text-center"></h3>

<!--style="z-index:100;color:#c69c6d;"-->
    
    @forelse($secondBiographies as $bio)
    <div class="timeline-item" data-text="{{$bio->getTranslatedAttribute('title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}">
      <div class="timeline__content">
            <img class="timeline__img" src="{{Voyager::image($bio->image)}}"/>
            <h2 class="timeline__content-title">{{$bio->getTranslatedAttribute('title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</h2>
            <p class="timeline__content-desc">
            {!! $bio->getTranslatedAttribute('content', LaravelLocalization::getCurrentLocale(), 'fallbackLocale') !!}</p>
        </div>
    </div>

    @empty
    @endforelse


  </div>
</div>



    </div>
        </div>
    </div>

    @include('includes.footer')
    <script type="text/javascript" src='{{asset('js/functions.js')}}'></script>
    <script src='{{asset('js/wow.js')}}'></script>
    <script src='{{asset('js/main.js')}}'></script>
    <script src='{{asset('js/customerBio.js')}}'></script>
    
</body>

</html>