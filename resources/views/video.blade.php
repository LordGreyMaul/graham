@extends('layouts.app')
@section('metadescription' , 'Videos - This is a view to all my streaming videos from pasted streams over on my Twitch channel and YouTube Page.')
@section('title', 'Videos')
@section('content')
    <!-- section Videos -->
    <section id="sectionAbout">
        <div class="container">
            <div class="sectionTitle">
                <h1>I'm Graham Morby-Raybould</h1>
                <span>Videos</span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>These videos are various streams I have recorded to show off my coding and also help to drive a very
                    cool and up and coming community of live streaming developments. So hopefully this will give you a understanding of
                    how I work, my passion for development and my love for teaching.</p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 story">
                    <iframe src="https://www.youtube.com/embed/-9j8jYgVl20" style="overflow:hidden;height:400px;width:100%" height="100%" width="100%" frameborder="0" allowfullscreen></iframe>
                    <hr>
                </div>
            </div>
            <div class="row" style="padding: 20px;">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <iframe  src="https://www.youtube.com/embed/xSB4gB7gkik" style="overflow:hidden;height:300px;width:100%" height="100%" width="100%" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6">
                        <iframe  src="https://www.youtube.com/embed/3Is3wPFRFvM" style="overflow:hidden;height:300px;width:100%" height="100%" width="100%" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 story">
                    <iframe src="https://www.youtube.com/embed/4nPZxydWLEE" style="overflow:hidden;height:400px;width:100%" height="100%" width="100%" frameborder="0" allowfullscreen></iframe>
                    <hr>
                </div>
            </div>
        </div>
    </section>
@stop