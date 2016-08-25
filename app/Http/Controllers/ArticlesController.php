<?php

namespace App\Http\Controllers;

use App\articles;
use App\artphoto;
use Request;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ArtPhotoRequest;
use Carbon\Carbon;

class ArticlesController extends Controller
{
	// Index for articles
    public function index() 
    {
		$articles = articles::latest()->published()->get();
        return view('Articles.index' , compact('articles'));
    }
    // Create an article view
    public function create()
    {
    	return view('Articles.create');
    }
    //Store an article
    public function store(ArticleRequest $request) 
    {
    	articles::create($request->all());
    	return redirect('/articles');
    }
    //Show full article
    public function show($id)
    {
        $articles = articles::findOrFail($id);
        return view('Articles.show' , compact('articles'));
    } 
    //Edit Articles
    public function edit($id) 
    {
        $articles = articles::findOrFail($id);
        return view('Articles.edit' , compact('articles'));
    }
    //update articles
    public function update($id, ArticleRequest $request)
    {
         $articles = articles::findOrFail($id);
         $articles->update($request->all());
         return redirect('articles');
    }
    // add photo to article
    public function addPhoto($id, ArtPhotoRequest $request) {
        $this->validate($request,[
            'photo'=>'required|mimes:jpg,jpeg,png'
            ]);
        
        $photo = artphoto::fromForm($request->file('photo'));
        
        articles::locatedAt($id)->addPhoto($photo);
       
    }
}
