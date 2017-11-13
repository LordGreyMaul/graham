@extends('layouts.app')
@section('metadescription' , 'Resume - Hi there and thanks for viewing my website, Im a Web Developer from Portsmouth in the UK. please check out all my social channels and links to videos.')
@section('title', 'My Resume')
@section('content')
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
                <h3>Ongoing</h3>
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
                <h3>Ongoing</h3>
                <p>2017-Ongoing</p>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12 resume-right">
                <h3>The Tech Dojo</h3>
                <p>Senior PHP developer working on a new CRM system built around Vue.js and Laravel on the backend. Also managing a team of developers and planning day to day
                IT tasks for 2 seperate companies.</p>
            </div>
        </div>
        <div class="resume-line row">
            <div class="col-md-3 col-sm-4 col-xs-12 resume-left">
                <h3>1 years</h3>
                <p>2016-2017</p>
            </div>
            <div class="col-md-9 col-sm-8 col-xs-12 resume-right">
                <h3>Lendy The Property Platform</h3>
                <p>Working for a market leader in the Property Finance market. Putting my PHP skills to use and learning Javascript to help code a Javascript One Page App.</p>
            </div>
        </div>
        <div class="resume-line row">
            <div class="col-md-3 col-sm-4 col-xs-12 resume-left">
                <h3>2 years</h3>
                <p>2014-2016</p>
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
        <hr>
        <div class="text-center">
            <div class="sectionTitle">
                <h1>Hire Me!</h1>
            </div>
            <p>If you wish to get in touch or want any help with you development or build please get in touch!</p>
            <a href="{{URL::asset('contact')}}" class="btn btn-success">Contact Me</a>
        </div>
    </div>
    
</section>
@stop