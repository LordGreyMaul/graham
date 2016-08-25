@extends('layouts.app')
@section('title', 'Blog')
@section('content')
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
@stop