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
                                <li><p>{{trans('main.character')}}</p></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 text-right">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="testimonials-section bg-img character" style="display: inline-block; width: 100%">
        <img class="top-right-test" src="{{asset('img/art_c.png')}}">
        <img class="bottom-left-test" src="{{asset('img/art_c.png')}}">
        <div class=" custome-row">
            <section class="pt-0">
            <div class="row">
                <div class="col-xs-12">
                    <div class="title animated wow fadeInLeft"  data-wow-delay="0.5s" data-wow-duration="1s"><span class="left line"></span>
                        <p>{{$characterSection->getTranslatedAttribute('sub_title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</p>
                        <h1>{!! nl2br($characterSection->getTranslatedAttribute('main_title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')) !!} </h1> <span class="right line">
                        <object id="pbuh01" type="image/svg+xml" data="{{asset('img/pbuh.svg')}}" __idm_frm__="1394"></object>
                        </span></div>
                    <p class="animated wow fadeInUp " data-wow-delay="0.9s" data-wow-duration="1s" >{!! nl2br($characterSection->getTranslatedAttribute('description', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')) !!}</p>
                </div>
            </div>
            </section>
            <div class="characters-section">
                <section class="bg_section ">
                <div class="row">
                    <div class="col-md-4 col-sm-6 pull-right">
                        <div class="characters-frame animate showFromLeft " data-animate="showFromLeft"
                             data-delay="0.1">
                            <img src="{{Voyager::image($firstChar->image)}}" alt="history">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <div class="characters-text-box">
                            <div class="heading-left animate showFromLeft" data-animate="showFromRight"
                                 data-delay="1.3">
                                <h2>{{$firstChar->getTranslatedAttribute('title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</h2>
                            </div>
                            <p class="animate showFromLeft" data-animate="showFromRight" data-delay="3.3">
                                {!! nl2br($firstChar->getTranslatedAttribute('content', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')) !!}
                            </p>
                        </div>
                    </div>
                </div>
                </section>


                <section>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 ">
                            <div class="characters-frame animate showFromLeft " data-animate="showFromLeft"
                                 data-delay="0.1">
                                <img src="{{Voyager::image($secondChar->image)}}" alt="history">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <div class="characters-text-box">
                                <div class="heading-left animate showFromLeft" data-animate="showFromRight"
                                     data-delay="1.3">
                                    <h2>{{$secondChar->getTranslatedAttribute('title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</h2>
                                </div>
                                <p class="animate showFromLeft" data-animate="showFromRight" data-delay="3.3">
                                    {!! nl2br($secondChar->getTranslatedAttribute('content', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')) !!}
                                </p>
                            </div>
                            <div class="characters-text-box">
                                <div class="heading-left animate showFromLeft" data-animate="showFromRight"
                                     data-delay="1.3">
                                    <h2>{{$thirdChar->getTranslatedAttribute('title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}} </h2>
                                </div>
                                <p class="animate showFromLeft" data-animate="showFromRight" data-delay="3.3">
                                    {!! nl2br($thirdChar->getTranslatedAttribute('content', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')) !!}

                                </p>
                                <span class="hadith ver-2 verse animate showFromLeft" data-animate="showFromRight"
                                      data-delay="3.3">
                           {{$thirdChar->getTranslatedAttribute('ayah', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}
                           <span class="refs">{{$thirdChar->getTranslatedAttribute('referance', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</span> </span>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="bg_section">
                <div class="row">
                    <div class="col-md-4 col-sm-6 pull-right">
                        <div class="characters-frame animate showFromLeft " data-animate="showFromLeft"
                             data-delay="0.1">
                            <img src="{{Voyager::image($fourthChar->image)}}" alt="history">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <div class="characters-text-box">
                            <div class="heading-left animate showFromLeft" data-animate="showFromRight"
                                 data-delay="1.3">
                                <h2>{{$fourthChar->getTranslatedAttribute('title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}} </h2>
                            </div>
                            <p class="animate showFromLeft" data-animate="showFromRight" data-delay="3.3">
                                {!! nl2br($fourthChar->getTranslatedAttribute('content', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')) !!}
                            </p>
                        </div>
                    </div>
                </div>
                </section>

                <section>
                <div class="row">
                    <div class="col-md-4 col-sm-6 ">
                        <div class="characters-frame animate showFromLeft " data-animate="showFromLeft"
                             data-delay="0.1">
                            <img src="{{Voyager::image($fifthChar->image)}}" alt="history">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <div class="characters-text-box">
                            <div class="heading-left animate showFromLeft" data-animate="showFromRight" data-delay="1.3">
                                <h2>{{$fifthChar->getTranslatedAttribute('title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</h2>
                            </div>
                            <p class="animate showFromLeft" data-animate="showFromRight" data-delay="3.3">
                                {!! nl2br($fifthChar->getTranslatedAttribute('content', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')) !!}

                            </p>
                        </div>
                    </div>
                </div>
                </section>
                <section class="bg_section">
                <div class="row">
                    <div class="col-md-4 col-sm-6 pull-right">
                        <div class="characters-frame animate showFromLeft " data-animate="showFromLeft"
                             data-delay="0.1">
                            <img src="{{Voyager::image($sixthChar->image)}}" alt="history">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <div class="characters-text-box">
                            <div class="heading-left animate showFromLeft" data-animate="showFromRight"
                                 data-delay="1.3">
                                <h2>{{$sixthChar->getTranslatedAttribute('title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}} </h2>
                            </div>
                            <p class="animate showFromLeft" data-animate="showFromRight" data-delay="3.3">
                                {!! nl2br($sixthChar->getTranslatedAttribute('content', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')) !!}
                            </p>
                            <span class="hadith ver-2 verse animate showFromLeft" data-animate="showFromRight"
                                  data-delay="3.3">
                                {{$sixthChar->getTranslatedAttribute('ayah', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}
                                <span class="refs">{{$sixthChar->getTranslatedAttribute('referance', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</span> </span>
                        </div>
                    </div>
                </div>
                </section>
                <div class="row">
                    <div class="col-xs-12 characters-home-img">
                        <img class="img-responsive animate showFromDown" data-animate="showFromLeft"
                             data-delay="0.1" src="{{Voyager::image($section_image->getTranslatedAttribute('image', LaravelLocalization::getCurrentLocale(), 'fallbackLocale'))}}"
                    </div>
                </div>

            </div>
    </div>
    </div>
    @include('includes.footer')
    <script type="text/javascript" src='js/functions.js'></script>


</body>

</html>