<script type="text/javascript" src="{{asset('js/scrollMonitor.js')}}"></script>

        <script type="text/javascript" src='{{asset('js/earth.js')}}'></script>

        <script type="text/javascript">
            (function() {
                document.body.classList.remove('loading');

                var scrollElemToWatch_1 = document.getElementById('rev-1'),
                    watcher_1 = scrollMonitor.create(scrollElemToWatch_1, -100),
                    rev1 = new RevealFx(scrollElemToWatch_1, {
                        revealSettings : {
                            bgcolor: '#f5f6f7',
                            onCover: function(contentEl, revealerEl) {
                                contentEl.style.opacity = 1;
                            }
                        }
                    });

                watcher_1.enterViewport(function() {
                    rev1.reveal();
                    watcher_1.destroy();
                });


                var scrollElemToWatch_2 = document.getElementById('rev-2'),
                    watcher_2 = scrollMonitor.create(scrollElemToWatch_2, -100),
                    rev2 = new RevealFx(scrollElemToWatch_2, {
                        revealSettings : {
                            bgcolor: '#eaecef',
                            direction: 'rl',
                            onCover: function(contentEl, revealerEl) {
                                contentEl.style.opacity = 1;
                                $('ul.animate').addClass('in').css('visibility', 'visible');
                            }
                        }
                    });

                watcher_2.enterViewport(function() {
                    rev2.reveal();
                    watcher_2.destroy();
                });


                var scrollElemToWatch_3 = document.getElementById('rev-3'),
                    watcher_3 = scrollMonitor.create(scrollElemToWatch_3, -100),
                    rev3 = new RevealFx(scrollElemToWatch_3, {
                        revealSettings : {
                            bgcolor: '#f5f6f7',
                            direction: 'rl',
                            onCover: function(contentEl, revealerEl) {
                                contentEl.style.opacity = 1;
                                $('#art03.animate').addClass('in').css('visibility', 'visible');
                                $('.content01.animate').addClass('in').css('visibility', 'visible');

                            }
                        }
                    });
                watcher_3.enterViewport(function() {
                    rev3.reveal();
                    watcher_3.destroy();
                });


                var scrollElemToWatch_4 = document.getElementById('rev-4'),
                    watcher_4 = scrollMonitor.create(scrollElemToWatch_4, -100),
                    rev4 = new RevealFx(scrollElemToWatch_4, {
                        revealSettings : {
                            bgcolor: '#f5f6f7',
//                          direction: 'rl',
                            onCover: function(contentEl, revealerEl) {
                                contentEl.style.opacity = 1;
                                $('#art04.animate').addClass('in').css('visibility', 'visible');
                                $('.content02.animate').addClass('in').css('visibility', 'visible');
                            }
                        }
                    });
                watcher_4.enterViewport(function() {
                    rev4.reveal();
                    watcher_4.destroy();
                });


                var scrollElemToWatch_5 = document.querySelector('.d__dontent01'),
                    watcher_5 = scrollMonitor.create(scrollElemToWatch_5, -100),
                    rev5 = new RevealFx(document.querySelector('#rev-5'), {
                        revealSettings : {
                            bgcolor: '#eaecef',
                            direction: 'rl',
                            duration: 800,
                            easing: 'easeInOutCirc',
                            coverArea: 55,
                            onCover: function(contentEl, revealerEl) {
                                contentEl.style.opacity = 1;
                                scrollElemToWatch_5.classList.add('dual__content--show');
                                //$('.content03.animate').addClass('in').css('visibility', 'visible');

                            }
                        }
                    });

                watcher_5.enterViewport(function() {
                    rev5.reveal();
                    //rev5.destroy();
                    watcher_5.destroy();
                });
            })();
        </script>

        <script type="text/javascript" src='{{asset('js/functions.js')}}'></script>

