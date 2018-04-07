<header><span class="nav"><button><i class="fas fa-bars"></i></button></span>
    <span class="logo">
        <img src="{{asset('img/logo.png')}}"
             alt="Muhammad PBUH"
             align="middle"/></span>
    <span class="search-btn"><button id="btn-search" class="btn--search"><i class="fas fa-search"></i></button></span>
</header>


<div class="search"> <img class="left" src="{{asset('img/art_c.png')}}" />
    <button id="btn-search-close" class="btn--search-close" aria-label="Close search form"><i class="fas fa-times"></i></button>
    <form class="search__form" action="">
        <input class="search__input" name="search" type="search" placeholder="{{trans('main.search')}}" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" /> <span class="search__info">{{trans('main.search_hint')}}</span> </form> <img class="right" src="{{asset('img/art_c.png')}}" /> </div>

<div class="navigation"> <img class="left" src="{{asset('img/art_c.png')}}" />
    <button id="btn-nav-close" class="btn--nav-close" aria-label="Close nav"><i class="fas fa-times"></i></button>
    <div class="scroll_cont">
        <div class="scroll">
            <div class="nav-inner">
                <ul>
                    <li class="_nav-item animate showFromLeft" id="main_page">
                        <a href="{{route('index')}}"> <span class="menu__item-name">{{trans('main.main_page')}}</span></a>
                        <div class="inner-menu main_page">
                            <div class="s__content">
                                <h3>{{trans('main.prophet_islam')}}</h3>
                                <h1>{{trans('main.mohammed')}}
                                    <span class="pbuh en">{{trans('main.sala')}}</span></h1>
                                <p>{{$header->getTranslatedAttribute('aya_quran', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}} <span>{{$header->getTranslatedAttribute('referance', LaravelLocalization::getCurrentLocale(), 'fallbackLocale')}}</span></p>
                            </div>
                            <div class="languages">
                                <h3>{{trans('main.select_lang')}}</h3>
                                <ul>
                                    <li class="selected"><a href=""><span>EN</span></a></li>
                                    <li><a href=""><span>FR</span></a></li>
                                    <li><a href=""><span>DE</span></a></li>
                                    <li><a href=""><span>PE</span></a></li>
                                    <li><a href=""><span>UD</span></a></li>
                                    <li><a href=""><span>GM</span></a></li>
                                    <li><a href=""><span>CH</span></a></li>
                                    <li><a href=""><span>JP</span></a></li>
                                    <li><a href=""><span>PH</span></a></li>
                                    <li><a href=""><span>AR</span></a></li>
                                    <li><a href=""><span>RS</span></a></li>
                                    <li><a href=""><span>GP</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="_nav-item animate showFromLeft delay01" id="testimonials">
                        <a href="{{route('testimonials')}}"> <span class="menu__item-name">{{trans('main.testimonials')}}</span></a>

                        <div class="inner-menu testimonials">
                            <h2>{{trans('main.testimonials')}}</h2>
                            <p>{{ str_limit ($testimonialHome->getTranslatedAttribute('description', LaravelLocalization::getCurrentLocale(), 'fallbackLocale'),255) }}</p> <a href="{{route('testimonials')}}">{{trans('main.read_more')}} +</a> </div>
                    </li>
                    <li class="_nav-item animate showFromLeft delay02" id="HisCharacter">
                        <a href="{{route('character')}}"> <span class="menu__item-name">{{trans('main.character')}}</span></a>
                        <div class="inner-menu HisCharacter">
                            <h2>{{trans('main.character')}}</h2>
                            <p>{{ $characterSection->getTranslatedAttribute('description', LaravelLocalization::getCurrentLocale(), 'fallbackLocale') }}</p> <a href="{{route('character')}}">{{trans('main.read_more')}} +</a> </div>
                    </li>
                    
                    <li class="_nav-item animate showFromLeft delay03" id="biography"> <a href="{{route('biography')}}"><span class="menu__item-name">{{trans('main.biography')}}</span></a>
                        <div class="inner-menu biography">
                            <h2>{{trans('main.biography')}}</h2>
                            <p>{{ $biographySection->getTranslatedAttribute('description', LaravelLocalization::getCurrentLocale(), 'fallbackLocale') }}</p> <a href="{{route('biography')}}">{{trans('main.read_more')}} +</a> </div>
                    </li>
                    <li class="_nav-item animate showFromLeft delay04 
                        @if($active == 'prophecy.onegod' || $active == 'prophecy.message' || $active == 'revelation' || $active == 'prophecy.universality')
                            active
                        @endif
                    
                    " id="prophecy"> <a href="{{route('revelation')}}"><span class="menu__item-name">{{trans('main.prophecy')}}</span></a>
                        <div class="inner-menu prophecy">
                            <h2>{{trans('main.prophecy')}}</h2>
                            <ul class="nav">
                                <li><a href="{{route('revelation')}}"><span>{{trans('main.revelation')}}</span></a></li>
                                
                                <li><a href="{{route('prophecy.message')}}"><span>{{trans('main.prophecy_message')}}</span></a></li>
                                
                                <li class="
                                @if($active == 'prophecy.onegod')
                                    active
                                @endif
                                "    
                                ><a href="{{route('prophecy.onegod')}}"><span>{{trans('main.one_god')}}</span></a></li>

                                <!-- <li><a href=""><span>How is Muhammad related to Abraham, Moses, Jesus and other prophets?</span></a></li>-->

                                <li><a href="{{route('prophecy.universality')}}"><span>{{trans('main.universality')}}</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="_nav-item animate showFromLeft delay05" id="civilization"> <a href="civilization.php"><span class="menu__item-name">The Islamic civilization</span></a>
                        <div class="inner-menu civilization">
                            <h2>The Islamic civilization</h2>
                            <p>Adding value to peoples' lives through love, harmony, knowledge, sport, personal care &amp; development, elimination of corruption, moderation, rational thinking, respecting neighbors and people of other faiths.</p> <a href="civilization.php">Read More +</a> </div>
                    </li>
                    <li class="_nav-item animate showFromLeft delay06" id="women"> <a href="woman.php"><span class="menu__item-name">Women in islam</span></a>
                        <div class="inner-menu women">
                            <h2>Women in islam</h2>
                            <ul class="nav">
                                <li><a href=""><span>Women rights, empowerment and treatment.</span></a></li>
                                <li><a href=""><span></span>God’s commandments to control polygamy.</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="_nav-item animate showFromLeft delay07" id="HumanRights"> <a href="javascript:void(0)"><span class="menu__item-name">Human rights</span></a>
                        <div class="inner-menu HumanRights">
                            <h2>Human rights</h2>
                            <ul class="nav">
                                <li><a href=""><span>Freedom and equality of mankind.</span></a></li>
                                <li><a href=""><span></span>Rules of justice and protection of human rights.</a></li>
                                <li><a href=""><span></span>Sanctity &amp; inviolability of human lives and property.</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="_nav-item animate showFromLeft delay08" id="environment"> <a href="javascript:void(0)"><span class="menu__item-name">Environment</span></a>
                        <div class="inner-menu environment">
                            <h2>Environment</h2>
                            <ul class="nav">
                                <li><a href=""><span>The call for a green world. Adding value to the Environment.</span></a></li>
                                <li><a href=""><span></span>The preservation of natural resources.</a></li>
                                <li><a href=""><span></span>Ethical treatment of animals and Halal food.</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="_nav-item animate showFromLeft delay09" id="miracles"> <a href="javascript:void(0)"><span class="menu__item-name">The Miracles</span></a>
                        <div class="inner-menu miracles">
                            <h2>The Miracles</h2>
                            <ul class="nav">
                                <li><a href=""><span></span>The Quran is an eternal miracle.</a></li>
                                <li><a href=""><span></span>Scientific facts in the Quran.</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="_nav-item animate showFromLeft delay010" id="HisSayings"> <a href="javascript:void(0)"><span class="menu__item-name">His sayings</span></a>
                        <div class="inner-menu HisSayings">
                            <h2>His sayings</h2>
                            <p>Muhammad's sayings in relation to various issues.</p> <a href="javascript:void(0)">Read More +</a> </div>
                    </li>
                    <li class="_nav-item animate showFromLeft delay011" id="epilogue"> <a href="javascript:void(0)"><span class="menu__item-name">Epilogue</span></a>
                        <div class="inner-menu epilogue">
                            <h2>Epilogue</h2>
                            <p>History has recorded fine details of Muhammad’s life as well as his sublime and humane dealing with people.</p> <a href="#">Read More +</a> </div>
                    </li>
                    <li class="_nav-item animate showFromLeft delay012" id="arts"> <a href="javascript:void(0)"><span class="menu__item-name">Islamic Arts</span></a>
                        <div class="inner-menu arts">
                            <h2>Islamic Arts</h2>
                            <ul class="nav">
                                <li><a href=""><span>Islamic art and Calligraphy.</span></a></li>
                                <li><a href=""><span>Islamic architecture and tourist attractions from all over the world.</span></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="submenu">
                <div class="inside"> </div>
            </div>
        </div>
    </div>

    <img class="right" src="{{asset('img/art_c.png')}}" /> </div>

