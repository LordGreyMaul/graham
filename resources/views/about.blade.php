@extends('layouts.app')
@section('metadescription' , 'About Me - Hi there and thanks for viewing my website, Im a Web Developer from Portsmouth in the UK. please check out all my social channels and links to videos.')
@section('title', 'About Me')
@section('content')
<!-- section About -->
<section id="sectionAbout">
    <div class="container">
        <div class="sectionTitle">
            <h1>I'm Graham Morby-Raybould</h1>
            <span>About me</span>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 story">
                <h2>Welcome!</h2>
                <p>Hi there and thanks for viewing my website. I have been developing now for 10 years plus on various
                different platforms and working with IT starting way back on my compaq presario in 1998. </p>
                <p>For me developing is fun and creative, it allows me to enjoy my time sat in front of my computer and to express myself through the wonderful world of coding and design.</p>
                <p>I have just started to build a very attractive portfolio and as time moves on this will grow and get 
                better and bolder. This very site you see is my third using the Laravel framework and feel I can offer so much to you and your projects. So please enjoy your stay and get in touch.</p>
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
            <div class="col-md-2 col-sm-4 col-xs-6 about-iconbox">
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
@stop