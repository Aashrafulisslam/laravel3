<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }
    public function blogDetails(){
        return view('frontEnd.blog.single-post');
    }
    public function categories(){
        return view('frontEnd.category.categories');
    }
    public function contact(){
        return view('frontEnd.home.contact');
    }
    public function about(){
        return view('frontEnd.home.about');
    }
}
