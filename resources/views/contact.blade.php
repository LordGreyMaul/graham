@extends('layouts.app')
@section('metadescription' , 'Contact Me - Hi there and thanks for viewing my website, Im a Web Developer from Portsmouth in the UK. please check out all my social channels and links to videos.')
@section('title', 'Contact Me')
@section('content')
<!-- section Contact
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<section id="sectionContact">
    <div class="sectionTitle">
        <h1>Get in touch</h1>
        <span>Contact</span>
    </div>
    
    <div class="container">
        
        <div class="contactForm row">
            <div class="col-md-12 col-sm-12 col-xs-12 contactLeft">
                {{-- <!--MESSAGE SENT SUCCESFULLY-->
                <div id="message"></div>
                <!--MAIN FORM-->
                <form method="post" action="assets/contact.php" name="contactform" id="contactform">
                    <fieldset>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input name="name" type="text" id="name" placeholder="Name* :" size="30" value="" />
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input name="email" type="text" id="email" placeholder="E-mail* :" size="30" value="" />
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input name="subject" type="text" id="subject" placeholder="Subject* :" size="30" value="" />
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <textarea name="comments" cols="40" rows="3" placeholder="Message* :" id="comments"></textarea>
                        </div>
                        <input type="submit" class="submit" id="submit" value="Send message" />
                        
                    </fieldset>
                </form>
                <!--END Main form--> --}}
                <ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    @if(Session::has('message'))
    <div class="alert alert-success">
      {{Session::get('message')}}
    </div>
@endif
</ul>

{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('Your Name') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your E-mail Address') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your e-mail address')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your Message') !!}
    {!! Form::textarea('message', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your message')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Contact Us!', 
      array('class'=>'submit')) !!}
</div>
{!! Form::close() !!}
            </div>
            </div>
        <!-- END contact FORM-->
    </div>
    
    
</section>
@stop