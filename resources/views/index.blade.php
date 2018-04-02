<!DOCTYPE html>
<html lang="" style="height: 100%; overflow: visible">

@include('includes.style')

<body class="loaded color-option" style="height: 100%; overflow: auto; overflow-x: hidden!important;">
    <div class="loader">
        <div class="preloader">
            <div class="bg mesh_loader"></div>
            <svg class="circles" viewbox="0 0 500 200">
                <g id="first">
                    <path fill="none" stroke-linecap="round" stroke-width="0.5" stroke="#fff" stroke-dasharray="400,400" d="M100 60 A1 1 0 0 1 400 140
                    A1 1 0 0 1 100 60" />
                    <text id="percentage" class="circ-text" text-anchor="middle" x="250" y="100" font-size="21px" fill="#fff">{{trans('main.loading')}} ...</text>
                    <!--                    <text id="verse" text-anchor="middle" font-size="12px" fill="#fff" x="250" y="290">"And We have not sent you but as a mercy to the worlds"</text>-->
                </g>
            </svg>
        </div>
    </div>
    <div id="wrapper" class="main-wrap"  style="height: 100%;">
    @include('includes.header')
        <section id="home" class="mesh">
            <div class="wrapper">
                <div id="earth"></div>
                <div class="content">
                    <h3 class="animate delay01" data-animate="showFromLeft">{{trans('main.prophet_islam')}}</h3>
                    <h1 class="animate delay02" data-animate="showFromLeft">{{trans('main.mohammed')}}
                    <span class="pbuh ar animate delay03" data-animate="showFromRight">صلى الله عليه وسلم</span>
                    <span class="pbuh en animate delay04" data-animate="showFromRight">{{trans('main.sala')}}</span></h1> <span class="line animate delay05" data-animate="showFromLeft"></span>
                    <p class="animate delay06" data-animate="showFromLeft">{{$header->getTranslatedAttribute('aya_quran', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}} <span>{{$header->getTranslatedAttribute('referance', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</span></p> <a href="{{$bookFile}}" class="btn button--aylen animate delay07" data-animate="showFromRight"><span>{{trans('main.download_book')}}  <em></em></span></a> </div>
                <div class="h__nav">
                    <nav>
                        <ul>
                            <li>
                                <a href="testimonials.php"> <span class="menu__item-name">Testimonials</span></a>
                            </li>
                            <li>
                                <a href=""> <span class="menu__item-name">His character</span></a>
                            </li>
                            <li><a href=""><span class="menu__item-name">Biography</span></a></li>
                            <li><a href=""><span class="menu__item-name">Prophecy</span></a></li>
                            <li><a href=""><span class="menu__item-name">Islamic civilization</span></a></li>
                            <li><a href=""><span class="menu__item-name">Women</span></a></li>
                            <li><a href=""><span class="menu__item-name">Human rights</span></a></li>
                            <li><a href=""><span class="menu__item-name">Environment</span></a></li>
                            <li><a href=""><span class="menu__item-name">Miracles</span></a></li>
                            <li><a href=""><span class="menu__item-name">His sayings</span></a></li>
                            <li><a href=""><span class="menu__item-name">Epilogue</span></a></li>
                            <li><a href=""><span class="menu__item-name">Islamic arts</span></a></li>
                        </ul>
                    </nav>
                </div> <span class="mouse"><i class="icon-mouse"></i></span> </div>
            <div class="intro">
                <div class="inside">
<!--                    <object id="art01" class="art bottom animate" data-animate="showIn" data-delay="1" type="image/svg+xml" data="img/art.svg"></object>-->
                                <img id="art01" class="art bottom animate" data-animate="showIn" data-delay="1" src="{{asset('img/art.png')}}" />

                    <div class="main-hadith">
                        <h2 class="animate" data-animate="showFromDown" data-delay="0.1">{{$belowHeader->getTranslatedAttribute('title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</h2> <span class="animate" data-animate="showFromDown" data-delay="0.2">{{$belowHeader->getTranslatedAttribute('sub_title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</span>
                        <p class="animate" data-animate="showFromDown" data-delay="0.3">{{$belowHeader->getTranslatedAttribute('content', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</p> <span class="ref animate" data-animate="showFromDown" data-delay="0.4">{{$belowHeader->getTranslatedAttribute('referance', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</span> </div>
<!--                    <object id="art02" class="art top animate" data-animate="showIn" data-delay="1" type="image/svg+xml" data="img/art.svg"></object>-->
                                <img id="art02" class="art top animate" data-animate="showIn" data-delay="1" src="{{asset('img/art.png')}}" />

                </div>
            </div>
        </section>
        <section>
            <div class="row">
                <div class="s__box" id="rev-1"> <img src="{{Voyager::image($biographyHome->image)}}" alt="MPBUH" /> </div>
                <div class="l__box float_right">
                    <div class="title animate" data-animate="showFromRight" data-delay="0.2"> <span class="left line"></span>
                        <p>{{$biographyHome->getTranslatedAttribute('sub_title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</p>
                        <h1>{!! nl2br($biographyHome->getTranslatedAttribute('main_title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')) !!}</h1> <span class="right line"><img src="{{asset('img/pbuh.svg')}}" alt="MPBUH" /></span> </div>
                    <p class="animate" data-animate="showFromRight" data-delay="0.3">{!! nl2br($biographyHome->getTranslatedAttribute('content', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')) !!}</p>
                    <div class="revBtn animate" data-animate="showFromRight" data-delay="0.4"><a href="#" class="btn">{{trans('main.read_more')}}</a></div>
                </div>
            </div>
        </section>
        <section class="bg__section">
            <div class="row">
                <div class="l__box float_left">
                    <div class="m__row">
                        <div class="owl-carousel owl-theme" data-items="1" data-auto-play="false" data-navigation="true" data-single-item="true" data-slideSpeed="600" data-paginationSpeed="600" data-pagination="false">
                            <div class="item">
                                <div class="title animate" data-animate="showFromLeft" data-delay="0.1"> <span class="left line"></span>
                                    <p>His Charcter</p>
                                    <h1>WHAT DID<br />HE LOOKS LIKE</h1> <span class="right line"><img src="img/pbuh.svg" alt="MPBUH" /></span> </div>
                                <p class=" animate" data-animate="showFromLeft" data-delay="0.4">Muhammad was an Arab of noble lineage with a white complexion and a rosy tinge. He was a little taller than average and well built with broad shoulders. His belly never protruded out from his chest. He walked briskly and firmly.
                                    <br />
                                    <br /> Muhammad’s companions described him as a handsome person with prominent forehead, high tipped nose, long eyelashes, large black eyes with well set teeth and a pleasant smile. He had slightly curly hair and a thick beard. His hair was black but included few white hairs.</p>
                            </div>
                            <div class="item">
                                <div class="title animate" data-animate="showFromLeft" data-delay="0.1"> <span class="left line"></span>
                                    <p>His Charcter</p>
                                    <h1>His<br />nature</h1> <span class="right line"><img src="img/pbuh.svg" alt="MPBUH" /></span> </div>
                                <p class=" animate" data-animate="showFromLeft" data-delay="0.4">Muhammad was unfailingly cheerful, easy going by nature, and mild mannered. He never resorted to offensive speech or obscenities. He did not find fault with others nor did he overly praise the others.</p>
                            </div>
                            <div class="item">
                                <div class="title animate" data-animate="showFromLeft" data-delay="0.1"> <span class="left line"></span>
                                    <p>His Charcter</p>
                                    <h1>Emotions<br />and Passions</h1> <span class="right line"><img src="img/pbuh.svg" alt="MPBUH" /></span> </div>
                                <p class=" animate" data-animate="showFromLeft" data-delay="0.4">Muhammad kept his feelings under firm control. When annoyed, he would turn aside or keep silent. When someone committed an act that violates God’s law, he used to show serious anger and a firm stand.</p>
                            </div>
                            <div class="item">
                                <div class="title animate" data-animate="showFromLeft" data-delay="0.1"> <span class="left line"></span>
                                    <p>His Charcter</p>
                                    <h1>Way<br />he spoke</h1> <span class="right line"><img src="img/pbuh.svg" alt="MPBUH" /></span> </div>
                                <p class=" animate" data-animate="showFromLeft" data-delay="0.4">Muhammad did not speak unnecessarily and what he said was always to the point and without any padding. His sayings were precise and concise having complete meaning in few words. He spoke with excellence, and there was no excess in it and no abnormal brevity. </p>
                            </div>
                            <div class="item">
                                <div class="title animate" data-animate="showFromLeft" data-delay="0.1"> <span class="left line"></span>
                                    <p>His Charcter</p>
                                    <h1>Interactions<br />with people</h1> <span class="right line"><img src="img/pbuh.svg" alt="MPBUH" /></span> </div>
                                <p class=" animate" data-animate="showFromLeft" data-delay="0.4">Muhammad was always the first to greet others and would not withdraw his hand from a hand shake until the other man withdrew his.
                                    <br />
                                    <br /> Whoever saw him unexpectedly would admire and revere him. And whoever socialized or associated with him familiarly, loved him. He was gentle by nature. He was neither coarse nor disdainful of anyone.</p>
                            </div>
                            <div class="item">
                                <div class="title animate" data-animate="showFromLeft" data-delay="0.1"> <span class="left line"></span>
                                    <p>His Charcter</p>
                                    <h1>Style<br />of living</h1> <span class="right line"><img src="img/pbuh.svg" alt="MPBUH" /></span> </div>
                                <p class=" animate" data-animate="showFromLeft" data-delay="0.4">Everything he did was in moderation, without excess or contrariness. He never criticized the food or drink that was prepared for him, nor did he overly praise it.
                                    <br />
                                    <br /> When at home, he would divide his time into three parts: One for God, one for his family, and one for himself. He always joined in household work and would at times mend his clothes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="revBtn animate" data-animate="showFromLeft" data-delay="0.6"> <a href="#" class="btn">Read More</a></div>
                </div>
                <div id="rev-2">
                    <div class="s__box nav">
                        <ul class="animate delay02" data-animate="showFromDown">
                            <li><a href="" class="active"><span>What did he look like?</span></a></li>
                            <li><a href=""><span>His nature</span></a></li>
                            <li><a href=""><span>Emotions and Passions</span></a></li>
                            <li><a href=""><span>Way he spoke</span></a></li>
                            <li><a href=""><span>Interactions with people</span></a></li>
                            <li><a href=""><span>Style of living</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section>
<!--            <object id="art03" class="art right animate" data-animate="showIn" data-delay="1" type="image/svg+xml" data="img/art.svg"></object>-->
            <div class="b__content">
                <div class="b__row">
                    <div class="v__align">
                        <div id="rev-3" class="revBlock">
                            <div class="bg__section left">
                                <div class="content">
                                    <div class="animate content01 delay02" data-animate="showFromDown"> <img src="{{Voyager::image($islamicHome->image)}}" /> <span class="hadith verse">
                                            {{$islamicHome->getTranslatedAttribute('aya_quran', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}
                                            <span class="refs">{{$islamicHome->getTranslatedAttribute('referance', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</span> </span>
                                    </div>
                                </div>
<!--                                <object id="art03" class="art bottom animate" data-animate="showIn" data-delay="2" type="image/svg+xml" data="img/art.svg"></object>-->
                                <img id="art03" class="art bottom animate" data-animate="showIn" data-delay="2" src="{{asset('img/art.png')}}" />

                            </div>
                        </div>
                        <div class="l__box">
                            <div class="title animate" data-animate="showFromRight" data-delay="0.1"> <span class="left line"></span>
                                <p>{{$islamicHome->getTranslatedAttribute('sub_title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</p>
                                <h1>{!! nl2br($islamicHome->getTranslatedAttribute('main_title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')) !!}</h1> <span class="right line">
                                <object id="pbuh01" type="image/svg+xml" data="{{asset('img/pbuh.svg')}}"></object>
                                
                                
                                
                                </span> </div>
                            <p class="animate" data-animate="showFromRight" data-delay="0.2">{!! nl2br($islamicHome->getTranslatedAttribute('content', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')) !!}</p>
                            <div class="revBtn animate" data-animate="showFromRight" data-delay="0.3"><a href="#" class="btn">{{trans('main.read_more')}}</a></div>
                        </div>
                    </div>
                </div>
                <div class="b__row">
                    <div class="v__align">
                        <div class="l__box order">
                            <div class="title animate" data-animate="showFromLeft" data-delay="0.1"> <span class="left line"></span>
                                <p>His Saying</p>
                                <h1>PROPHET<br />SAYINGS</h1> <span class="right line"><img src="img/pbuh.svg" alt="MPBUH" /></span> </div>
                            <p class="animate" data-animate="showFromLeft" data-delay="0.2">Muhammad’s sayings and teachings are highly influential as they cover most aspects of life: spirituality, morals, social matters, commerce, and more. His sayings emanate from a base of wisdom and divine revelation.</p>
                            <div class="revBtn animate" data-animate="showFromLeft" data-delay="0.3"><a href="#" class="btn">Read More</a></div>
                        </div>
                        <div id="rev-4" class="revBlock">
                            <div class="bg__section right">

                                <img id="art04" class="art top animate" data-animate="showIn" data-delay="3" src="img/art.png" />

                                <div class="content">
                                    <div class="animate content02 delay02" data-animate="showFromDown">
                                        <div class="m__row">
                                            <div class="owl-carousel owl-theme" data-items="1" data-auto-play="false" data-navigation="true" data-single-item="true" data-slideSpeed="600" data-paginationSpeed="600" data-pagination="false">
                                                <div class="item active">
                                                    <p>"A strong person is not the one who throws his adversaries to the ground. A strong person is he who contains himself when he is angry."</p> <span class="ref">(Narrated by Bukhari, Muslim &amp; Ahmad)</span></div>
                                                <div class="item">
                                                    <p>"Make things easy to people (concerning religious matters), and do not make it hard for them; give them good tidings and do not make them run away."</p> <span class="ref">(Bukhari, 69/11)</span></div>
                                                <div class="item">
                                                    <p>"Those who do honest trading and business based on clear terms, God blesses them and their business (trade). On the contrary, God does not bless those who lie and hide facts." </p> <span class="ref">(Bukhari, 2082/22)</span></div>
                                                <div class="item">
                                                    <p>"Fear Allah wherever you are, follow a bad deed with a good deed as it erases it, and deal with people with high ethics.</p> <span class="ref"> (Tirmithi - 1987 &amp; Ahmad 5/153)</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="dual">
                <div class="dual__inner" id="rev-5">
                    <div class="dual__half" data-overlay="6"> <span class="hadith verse">
                            {{$miracleHome->getTranslatedAttribute('aya_quran_image', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}
                           <span class="refs">{{$miracleHome->getTranslatedAttribute('referance_image', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</span> </span>
                    </div>
                </div>
                <div class="dual__content bg__section no__margin d__dontent01">
                    <div class="dual__content__text">
                        <div class="title animate content03" data-animate="showFromUp" data-delay="0.2"> <span class="left line"></span>
                            <p>{{$miracleHome->getTranslatedAttribute('sub_title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</p>
                            <h1>{!! nl2br($miracleHome->getTranslatedAttribute('main_title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')) !!}</h1> <span class="right line"><img src="{{asset('img/pbuh.svg')}}" alt="MPBUH" /></span> </div>
                        <p class="animate content03" data-animate="showFromDown" data-delay="0.3">{!! nl2br($miracleHome->getTranslatedAttribute('content', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')) !!}</p> <span class="hadith verse">
                           {{$miracleHome->getTranslatedAttribute('aya_quran', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}
                           <span class="refs">{{$miracleHome->getTranslatedAttribute('referance', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</span> </span>
                        <div class="revBtn animate content03" data-animate="showFromDown" data-delay="0.4"><a href="#" class="btn">{{trans('main.read_more')}}</a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg__section no__margin">
<!--            <object id="art03" class="art right animate" data-animate="showIn" data-delay="1" type="image/svg+xml" data="img/art.svg"></object>-->
            <img id="art03" class="art right animate" data-animate="showIn" data-delay="1" src="{{asset('img/art.png')}}" />

            <div class="title animate" data-animate="showFromRight" data-delay="0.1"> <span class="left line"></span>
                <p>{{$testimonialHome->getTranslatedAttribute('sub_title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</p>
                <h1>{!! nl2br($testimonialHome->getTranslatedAttribute('main_title', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')) !!}</h1> <span class="right line">
                        <object id="pbuh01" type="image/svg+xml" data="{{asset('img/pbuh.svg')}}"></object>
                        </span> </div>
            <p class="animate" data-animate="showFromRight" data-delay="0.2">{!! nl2br($testimonialHome->getTranslatedAttribute('description', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')) !!}</p>
            <div class="owl-carousel owl-theme testimonials" data-items="4" data-auto-play="false" data-navigation="true" data-single-item="false" data-slideSpeed="600" data-paginationSpeed="600" data-pagination="false">
                <div class="item">
                    <div class="they">
                        <div class="name">
                            <h3>John Adair</h3> <span>Author of “The Leadership of Muhammad”. Chair of Leadership Studies United Nations System Staff College in Turin</span> </div>
                        <div class="img_cont"> <img src="img/testimonials/01.jpg" /> </div>
                    </div>
                    <p>“Leadership glimpsed more than once in the life of the Prophet Muhammad accords well with what we know to be the universal truth about the nature and practice of leadership. You will judge for yourself how close Muhammad comes to this ideal.”</p>
                </div>
                <div class="item">
                    <div class="they">
                        <div class="name">
                            <h3>William Montgomery Watt</h3> <span>The Scottish historian and Emeritus Professor in Arabic and Islamic Studies at the University of Edinburgh</span></div>
                        <div class="img_cont"> <img src="img/testimonials/02.jpg" /> </div>
                    </div>
                    <p>“His readiness to undergo persecutions for his beliefs, the high moral character of the men who believed in him and looked up to him as leader, and the greatness of his ultimate achievement - all argue his fundamental integrity. None of the great figures of history is so poorly appreciated in the West as Muhammad.”</p>
                </div>
                <div class="item">
                    <div class="they">
                        <div class="name">
                            <h3>Mahatma Gandhi</h3> <span> The political and spiritual leader of the Indian independence movement</span></div>
                        <div class="img_cont"> <img src="img/testimonials/03.jpg" /> </div>
                    </div>
                    <p>“I wanted to know the best one who holds today undisputed sway (controlling influence) over the hearts of millions of mankind. I became more than convinced that it was not the sword that won a place for Islam in those days in the scheme of life.”</p>
                </div>
                <div class="item">
                    <div class="they">
                        <div class="name">
                            <h3>William Durant</h3> <span> The American historian, philosopher and author of “The Story of Civilization</span></div>
                        <div class="img_cont"> <img src="img/testimonials/04.jpg" /> </div>
                    </div>
                    <p>““His name, meaning, “highly praised,” lent itself well to certain Biblical passages as predicting his advent. Muhammad was never known to write anything himself; he used an amanuensis.”</p>
                </div>
                <div class="item">
                    <div class="they">
                        <div class="name">
                            <h3>William Durant</h3> <span> The American historian, philosopher and author of “The Story of Civilization</span></div>
                        <div class="img_cont"> <img src="img/testimonials/05.jpg" /> </div>
                    </div>
                    <p>““His name, meaning, “highly praised,” lent itself well to certain Biblical passages as predicting his advent. Muhammad was never known to write anything himself; he used an amanuensis.”</p>
                </div>
                <div class="item">
                    <div class="they">
                        <div class="name">
                            <h3>William Durant</h3> <span> The American historian, philosopher and author of “The Story of Civilization</span></div>
                        <div class="img_cont"> <img src="img/testimonials/06.jpg" /> </div>
                    </div>
                    <p>““His name, meaning, “highly praised,” lent itself well to certain Biblical passages as predicting his advent. Muhammad was never known to write anything himself; he used an amanuensis.”</p>
                </div>
            </div>
        </section>

        @include('includes.footer')

        @include('includes.script')

</body>

</html>