<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="@yield('metadescription')">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript,laravel,developer,web dev,php,designer,bootstrap,streamer">
        <meta name="author" content="Graham Morby-Raybould">
        <title>GMR Portfolio - @yield('title')</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
        <!-- Styles -->
        <link rel="stylesheet" href="{{URL::asset('/css/app.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/css/style.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/css/animate.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/css/magnific-popup.css')}}">
        <!-- Icons -->
        <link rel="stylesheet" href="{{URL::asset('/icons/Linea/styles.css')}}" />
        <link rel="stylesheet" href="{{URL::asset('/icons/Elegant/style.css')}}" />
        {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
        <!-- CK Editor Script for creating -->
        
        <script src="//cdn.ckeditor.com/4.5.10/full/ckeditor.js"></script>
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83224231-1', 'auto');
  ga('send', 'pageview');

</script>
        
    </head>
    <body id="app-layout">
        <!-- Header Bar
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <header id="headerBar" class="headerTop">
            <div class="container-fluid">
                <!--Header logo on the left side-->
                <div class="col-md-4 col-sm-1 col-xs-4 headerLeft">
                    <a href="{{URL::asset('/')}}">
                        <img src="{{URL::asset('/images/site-logo2.png')}}" alt="">
                    </a>
                </div>
                <!--Header right side with left-aligned menu-->
                <div class="col-md-8 col-sm-11 col-xs-8 headerRight">
                    <div class="header-right">
                        <!--Navigation-->
                        <nav class="navigation">
                            <div class="navbar-header">
                                <span class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <i class="fa fa-bars"></i>
                                </span>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="navbar navbar-right">
                                    <li><a href="{{ URL::asset('/') }}">Home</a></li>
                                    <li><a href="{{ URL::asset('/about') }}">About</a></li>
                                    <li><a href="{{ URL::asset('/resume') }}">Resume</a></li>
                                    <li><a href="{{ URL::asset('/portfolio') }}">Work</a></li>
                                    <li><a href="{{ URL::asset('/blog') }}">Blog</a></li>
                                    <li><a href="{{ URL::asset('/contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!--END Navigation-->
                    </div>
                </div>
                <!--END Header right side-->
            </div>
            <!--END container-->
        </header>
        <!--END Header bar-->
        <!-- section Intro
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        
        <section id="sectionIntro" class="parallax">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="container-fluid">
                    <div class="textIntro">
                        <div class="hi">
                            <h1>Graham Morby-Raybould</h1>
                            <span>Designer. Developer. Freelancer.</span><br>
                            <a href="#sectionAbout" class="easing">
                                <img src="{{URL::asset('/images/arrow.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content -->
        @yield('content')
        <!-- Footer -->
        <footer class="pFooter">
            <div class="container-fluid">
                <div class="col-md-6 col-sm-12 col-xs-12 fCopy">
                    Copyright © <span>Graham Morby-Raybould</span> 2016. All rights reserved.
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 fIcons">
                    <a href="https://www.facebook.com/tremonster82" target="_blank">
                        <span aria-hidden="true" class="social_facebook_circle"></span>
                    </a>
                    <a href="https://twitter.com/GrahamMorbyDev" target="_blank">
                        <span aria-hidden="true" class="social_twitter_circle"></span>
                    </a>
                    <a href="https://www.youtube.com/channel/UClfxVWE8AQvinfyODeCbutw" target="_blank">
                        <span aria-hidden="true" class="social_youtube_circle"></span>
                    </a>
                    <a href="https://www.instagram.com/phoenixmorby/" target="_blank">
                        <span aria-hidden="true" class="social_instagram_circle"></span>
                    </a>
                    <a href="https://www.twitch.tv/grahammorbydev/profile" target="_blank">
                        <span aria-hidden="true" class="social_rss_circle"></span>
                    </a>
                </div>
            </div>
        </footer>
        <!--  Javascripts
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <script src="{{URL::asset('/js/jquery-2.1.3.js')}}"></script>
        <script src="{{URL::asset('/js/bootstrap.js')}}"></script>
        <script src="{{URL::asset('/js/modernizr.custom.js')}}"></script>
        <script src="{{URL::asset('/js/contactform.js')}}"></script>
        <script src="{{URL::asset('/js/treehouse.js')}}"></script>
        <!-- Navigation menu-->
        <script src="{{URL::asset('/js/classie.js')}}"></script>
        <script src="{{URL::asset('/js/menu-top.js')}}"></script>
        <script src="{{URL::asset('/js/nav-active.js')}}"></script>
        <script src="{{URL::asset('/js/jquery.easing.js')}}"></script>
        <!--JS for MAGNIFIC POPUP & ALL SCRIPTS& CALLS-->
        <script src="{{URL::asset('/js/scripts.js')}}"></script>
        <script src="{{URL::asset('/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- WOW ANIMATIONS -->
        <script src="{{URL::asset('/js/wow.min.js')}}"></script>
        <script src="{{URL::asset('/js/jquery-parallax.js')}}"></script>
        <!-- Masonry Package -->
        <script src="{{URL::asset('/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{URL::asset('/js/isotope-jquery.js')}}"></script>
        <script src="{{ URL::asset('js/dropzone.js') }}" ></script>
        <script>
        new WOW().init();
        </script>
        <script>
        $(window).load(function(){
        "use strict";
        var $container = $('#masonry-grid');
        $container.isotope({
        itemSelector: '.grid-item'
        });
        });
        </script>
        <script type="text/javascript">
        $(document).ready(function(){
        "use strict";
        
        //.parallax(xPosition, speedFactor, outerHeight) options:
        //xPosition - Horizontal position of the element
        //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
        //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
        $('#sectionIntro').parallax({ "coeff":+0.5 });
        $('.imageIntro').parallax({ "coeff":+0.4 });
        })
        </script>
        <!-- GOGGLE MAP
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#ffffff"},{"visibility":"on"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                    title: 'Snazzy!'
                });
            }
    </script>
    <script>
            Dropzone.options.addPhotosForm = {
            paramName: 'photo',
            maxFilesize: 3,
            acceptedFiles: '.jpg, .jpeg, .png'
            };
        </script>
        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    </body>
</html>