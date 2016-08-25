@extends('layouts.app')
@section('metadescription' , 'Portfolio - Hi there and thanks for viewing my website, Im a Web Developer from Portsmouth in the UK. please check out all my social channels and links to videos.')
@section('content')
<!-- section Portfolio
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<section id="sectionPortfolio">
    
    <div class="sectionTitle">
        <h1>Latest projects</h1>
    </div>
    <!--GRID ITEMS-->
    <!--GRID START-->
    <div class="container">
        <div id="isotopeGrid" class="mGrid row">
            <div class="gutter-sizer"></div>
            
            <div class="grid-item no-pad-grid item-five brand fs">
                <a class="image-modal" href="#image-modal1">
                    <img src="{{URL::asset('/images/1.jpg')}}" alt="">
                    <div class="itemHover">
                    </div>
                    <h4>MCBC</h4>
                    <h6>Design and Build</h6>
                </a>
                <div id="image-modal1" class="mfp-hide modal-box">
                    <img src="{{URL::asset('/images/1.jpg')}}" alt="">
                    <div class="modal-box-content">
                        <h4>MCBC</h4>
                        <p>My Comic Book collection is a Laravel Driven collection tracker for comic book fans. It uses multiple technologies to deliver a
                        full functioning experience.</p>
                        <a href="http://www.mycomicbookcollection.co.uk" target="_blank" class="btn btn-primary">View the site</a>
                    </div>
                </div>
            </div>
            <div class="grid-item item-five ill">
                <a class="image-modal" href="#image-modal2">
                    <img src="{{URL::asset('/images/4.jpg')}}" alt="">
                    <div class="itemHover">
                    </div>
                    <h4>Up 4 access</h4>
                    <h6>Design and Build</h6>
                </a>
                <div id="image-modal2" class="mfp-hide modal-box">
                    <img src="{{URL::asset('/images/4.jpg')}}" alt="">
                    <div class="modal-box-content">
                        <h4>Up 4 access</h4>
                        <p>Up 4 Access is a local building firm who just required a simple site to have a online presense. The site is using HTML, SASS and Boostrap.
                        The contact form is using PhPMailer to send contact requests to the site owner</p>
                        <a href="http://up4access.co.uk/" target="_blank" class="btn btn-primary">View the site</a>
                    </div>
                </div>
            </div>
            <div class="grid-item item-five brand fs">
                <a class="image-modal" href="#image-modal3">
                    <img src="{{URL::asset('/images/3.jpg')}}" alt="">
                    <div class="itemHover">
                    </div>
                    <h4>Lucky 13 Tattoo</h4>
                    <h6>Design and Build</h6>
                </a>
                <div id="image-modal3" class="mfp-hide modal-box">
                    <img src="{{URL::asset('/images/3.jpg')}}" alt="">
                    <div class="modal-box-content">
                        <h4>Lucky 13 Tattoo</h4>
                        <p>Lucky 13 is a Tattoo shop is portsmouth that required a site to detail and show off the work they create. I used wordpress for simple
                        end user after use and gave the admin panel different options so the galleries can be added much easier.</p>
                        <a href="http://lucky13-tattoo.co.uk/" target="_blank" class="btn btn-primary">View the site</a>
                    </div>
                </div>
            </div>
            <div class="grid-item no-pad-grid item-five brand ill">
                <a class="image-modal" href="#image-modal4">
                    <img src="{{URL::asset('/images/5.jpg')}}" alt="">
                    <div class="itemHover">
                    </div>
                    <h4>Krypton</h4>
                    <h6>Design and Build</h6>
                </a>
                <div id="image-modal4" class="mfp-hide modal-box">
                    <img src="{{URL::asset('/images/5.jpg')}}" alt="">
                    <div class="modal-box-content">
                        <h4>Krypton</h4>
                        <p>Krypton is a user task management system I built when I first starting using Laravel. The front end is Bootstrap driven and the back end is
                        pure Laravel 5.2 </p>
                        <a href="http://138.68.138.8/" target="_blank" class="btn btn-primary">View the site</a>
                    </div>
                </div>
            </div>
            <div class="grid-item item-five ill fs">
                <a class="image-modal" href="#image-modal5">
                    <img src="{{URL::asset('/images/2.jpg')}}" alt="">
                    <div class="itemHover">
                    </div>
                    <h4>Shore Travel</h4>
                    <h6>Design and Build</h6>
                </a>
                <div id="image-modal5" class="mfp-hide modal-box">
                    <img src="{{URL::asset('/images/2.jpg')}}" alt="">
                    <div class="modal-box-content">
                        <h4>Shore Travel</h4>
                        <p>Design and building a web site for a travel company is no easy task. The site has to show so much as customers need to see where to travel within the
                        world. This wordpress site really does show off the slick design and colorful artowrk the client was looking for.</p>
                        <a href="http://www.shore-travel.co.uk/" target="_blank" class="btn btn-primary">View the site</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
@stop