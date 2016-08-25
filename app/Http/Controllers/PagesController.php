<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articles;
use App\Http\Requests;

class PagesController extends Controller
{
	// Show welcome page and grab last three articles
    public function index() 
    {
    	$articles = articles::latest()->published()->get()->take(3);
		return view('welcome' , compact('articles'));
    }

    //Show articles
    public function show($id)
    {
    	$articles = articles::findOrFail($id);
    	return view('show' , compact('articles'));
    }
    // show and manage blog page
    public function blog()
    {
        $articles = articles::latest()->published()->get();
        return view('blog' , compact('articles'));
    }
    //Show Resume
    public function resume() 
    {
        return view('resume');
    }
    //Show Portfolio
    public function portfolio()
    {
        return view('portfolio');
    }
    //show about
    public function about()
    {
        return view('about');
    }

}
