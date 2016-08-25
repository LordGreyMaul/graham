@extends('layouts.app')
@section('title', 'Welcome')
@section('content')
<!-- section About
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<section id="sectionAbout">
    <div class="container">
        <div class="sectionTitle">
            <h1>I'm Graham Morby-Raybould</h1>
            <span>About me</span>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 story">
                <h2>Howdy!</h2>
                <p>Hi there and thanks for viewing my website. I have been developing now for 18 years plus on various
                different platforms, starting way back on my compaq presario in 1998. </p>
                <p>For my developing is fun and creative, it allows me to enjoy my time sat in front of my computer and to express
                myself through the wonderful world of coding.</p>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 skills">
                <h5>HTML & CSS<span>90%</span></h5>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" style="width:90%;" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <h5>PHP<span>70%</span></h5>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="83" style="width:70%;" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <h5>Photoshop<span>70%</span></h5>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="95" style="width:70%;" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                <h5>Javascript<span>80%</span></h5>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="86" style="width:80%;" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>
                
            </div>
        </div>
        <div class="row about-icons">
            <div class="col-md-2 col-sm-4 col-xs-6 hidden-sm hidden-xs about-iconbox">
                <div class="icon icon-basic-webpage-txt"></div>
                <h6>Webmaster</h6>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 about-iconbox">
                <div class="title-icon"><h1>10</h1></div>
                <h6>Happy clients</h6>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 about-iconbox">
                <div class="icon icon-basic-keyboard"></div>
                <h6>Developer</h6>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 about-iconbox">
                <div class="title-icon"><h1>26</h1></div>
                <h6>Projects Done</h6>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 about-iconbox">
                <div class="icon icon-basic-laptop"></div>
                <h6>Freelancer</h6>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 about-iconbox">
                <div class="title-icon"><h1>18</h1></div>
                <h6>Years Experience</h6>
            </div>
        </div>
    </div>
</section>
<!-- section Resume
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<section id="sectionResume">
    <div class="container">
        <div class="sectionTitle">
            <h1>My past experience</h1>
            <span>Resume</span>
        </div>
        <div class="resume-line row">
            <div class="col-md-3 col-sm-4 col-xs-12 resume-left">
                <h3>6 years</h3>
                <p>2010-Ongoing</p>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12 resume-right first-right">
                <h3>Freelancer</h3>
                <p>Front end developer for many companies around the south coast of England. Using skills including
                HTML, CSS, SASS and PHP. </p>
            </div>
        </div>
        <div class="resume-line row">
            <div class="col-md-3 col-sm-4 col-xs-12 resume-left">
                <h3>3 years</h3>
                <p>2011-2014</p>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12 resume-right">
                <h3>Ultimate Pet Insurance</h3>
                <p>Front end developer  working with HTML5 CSS3 , SASS, ASP.net and Design software.  To design and develop  from the ground  up. Working with back end developers  on the customer  journeys and giving the them the maximum  support when hitting  deadlines. To liaise with clients and customers  on brand  guidelines  and build times, with final results being user tested  using various responsive  devices.</p>
            </div>
        </div>
        <div class="resume-line row">
            <div class="col-md-3 col-sm-4 col-xs-12 resume-left">
                <h3>3 Months</h3>
                <p>2014-2014</p>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12 resume-right">
                <h3>Just Develop It</h3>
                <p>Takes include processing  Jira tasks on three  large web builder  site. Using HTML5 and CSS3 to implement changes to the front end view. Working with a senior developer  to learn SASS and other  such front end tools.</p>
            </div>
        </div>
        <div class="resume-line last-line row">
            <div class="col-md-3 col-sm-4 col-xs-12 resume-left">
                <h3>1 Year</h3>
                <p>2013-2014</p>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12 resume-right">
                <h3>Digital Incubator</h3>
                <p>Web coding front end sites for the motor industry,  Using current  standards to keep all sites up to date.  Coding in: MVC Codeigniter  Framework  Bootstrap  3 HTML5 CSS3 PHP 5.4. I also have set up and now run the companies  social media department. Using Facebook as lead generation and growing small companies  using twitter  and google plus</p>
            </div>
        </div>
    </div>
    
</section>
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
<!-- section Journal
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<section id="sectionJournal">
    <div class="container">
        <div class="sectionTitle">
            <h1>My thoughts</h1>
            <span>Journal</span>
        </div>
        @foreach($articles as $article)
        <div class="row journal-line">
            <div class="col-md-6 col-sm-12 col-xs-12 journal-text">
                <h1>{{$article->title}}</h1>
                <a href="show/{{$article->id}}">Read More</a>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 journal-image">
                <div class="category">
                    Web
                </div>
                <div class="wraparound">
                    @foreach($article->photo as $photos)
                    <img src="{{URL::asset($photos->path)}}" alt="{{$article->title}}">
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</section>

@endsection