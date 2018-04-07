<!DOCTYPE html>
<html lang="">

@include('includes.style')

<body class="loaded color-option">
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

    <div class="kode_sab_banner_wrap them_overlay header-style-1">
        <div class="banner">
            <div class="banner-content">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-6">
                            <ul class="list-inline">
                                <li><a href="{{route('index')}}">{{trans('main.home')}}</a></li>
                                <li><i class="fa fa-angle-right"></i></li>
                                <li><p>{{trans('main.testimonials')}}</p></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 text-right">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="testimonials-section flix-lg">
        <img class="top-right-test" src="{{asset('img/art_c.png')}}">
        <img class="bottom-left-test" src="{{asset('img/art_c.png')}}">
        <div class="container ">
            <div class="row">
                <div class="col-xs-12 ">
                    <div class="title animated wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1s"><span
                                class="left line"></span>
                        <p>{{$testimonialHome->getTranslatedAttribute('sub_title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</p>
                        <h1>{!! nl2br($testimonialHome->getTranslatedAttribute('main_title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')) !!}</h1> <span class="right line">
                        <object id="pbuh01" type="image/svg+xml" data="{{asset('img/pbuh.svg')}}" __idm_frm__="1394"></object>
                        </span></div>
                    <p class="animated wow fadeInLeft " data-wow-delay="0.5s" data-wow-duration="1s">{!! nl2br($testimonialHome->getTranslatedAttribute('description', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')) !!}</p>
                </div>
            </div>

        @forelse($testimonials as $test)
            <section class="testmonial-say qou-right  bg__section no__margin ">
                <div class="row flix">
                    <div class="col-md-6 ">

                        <div class="test-content">
                            <div class="row flix">
                                <div class="col-sm-4">
                                    <img data-animate="showFromLeft " data-delay="2.5" class="img-responsive animate"
                                         src="{{Voyager::image($test->image)}}">
                                </div>
                                <div class="col-sm-8">
                                    <span class="animate " data-animate="showFromLeft" data-delay="3.5">
                                                                            
                                    <h3 class="animate " data-animate="showFromLeft" data-delay="0.1">{{$test->getTranslatedAttribute('name', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</h3>
                                        {{$test->getTranslatedAttribute('description', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</span>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 border-left">
                        <p class="animate showFromLeft" data-animate="showFromLeft" data-delay="10">{!! nl2br($test->getTranslatedAttribute('content', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')) !!}
                            <i class="fa fa-quote-right"
                                                                                         aria-hidden="true"></i>
                        @if($test->note != null)
                            <br>
                            <b>{{trans('main.note')}}</b>:
                            <small>{{$test->getTranslatedAttribute('note', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}
                            </small>
                        @endif    
                        </p>
                    </div>
                </div>
            </section>
        @empty
        @endforelse    


        </div>
    </section>

    @include('includes.footer')
    <script type="text/javascript" src='{{asset('js/functions.js')}}'></script>


</body>

</html>