<!DOCTYPE html>
<html lang="">

@include('includes.style')

<style type="text/css">
    .col-md-8 p , .col-md-8 div , .col-md-8 span {
        background-color: transparent !important;
    }

    p > span {
        line-height: 20px !important;
    }
</style>
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
                                @if($active == 'revelation')
                                    <li><p>{{trans('main.prophecy_mohammed')}}</p></li>
                                @elseif($active == 'prophecy.message')
                                    <li><p>{{trans('main.prophecy_message')}}</p></li>
                                @elseif($active == 'prophecy.onegod')
                                    <li><p>{{trans('main.one_god')}}</p></li>
                                @elseif($active == 'prophecy.universality')
                                    <li><p>{{trans('main.universality')}}</p></li>
                                @endif
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
                    <div class="col-xs-12 ">

                        <div class="title"><span class="left line">

                        </span>

                            <p>{{trans('main.prophecy')}}</p>
                            @if($active == 'revelation')
                                <h1>{{trans('main.mohammed')}}<br>{{trans('main.and')}} {{trans('main.prophecy')}} </h1> 
                            @elseif($active == 'prophecy.message')
                                <h1>{{trans('main.prophecy_message')}}</h1>
                            @elseif($active == 'prophecy.onegod') 
                                <h1>{{trans('main.one_god')}}</h1>
                            @elseif($active == 'prophecy.universality') 
                                <h1>{{trans('main.universality_first')}} <br> {{trans('main.universality_second')}} </h1>

                            @endif    

                                <span class="right line">
                        <object id="pbuh01" type="image/svg+xml" data="{{asset('img/pbuh.svg')}}" __idm_frm__="1394"></object>
                        </span></div>
                    </div>
                </div>
            </section>

            <div class="">
                <div id="divines" class="block">

                @if($firstSection == 'null')

                @else
                    <section style="padding-top: 50px;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="characters-text-box ">

                                    {!! $firstSection->getTranslatedAttribute('content', LaravelLocalization::getCurrentLocale(), 'fallbackLocale') !!}
                                </div>
                            </div>
                        </div>
                    </section>
                @endif    


                @forelse($sections as $section)
                    <section class="
                        @if($section->id % 2 == 0)
                        bg_section
                        @endif
                        ">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 
                            @if($section->id % 2 == 0)
                            pull-right
                            @endif
                            ">
                                <div class="characters-text-box">
                                    
                                    {!! $section->getTranslatedAttribute('content', LaravelLocalization::getCurrentLocale(), 'fallbackLocale') !!}
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 ">
                                <div class="characters-frame animate showFromLeft " data-animate="showFromLeft"
                                     data-delay="0.1">
                                    <img src="{{Voyager::image($section->image)}}" alt="history">
                                </div>
                            </div>
                        </div>
                    </section>

                @empty
                @endforelse

                </div>

            </div>
        </div>



        @include('includes.footer')

        <script type="text/javascript" src="{{asset('js/scrollMonitor.js')}}"></script>
        <script type="text/javascript" src='{{asset('js/functions.js')}}'></script>

</body>

</html>