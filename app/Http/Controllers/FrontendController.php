<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function about(){
    	return view('frontendpage.About');
    }
    public function Chef(){
    	return view('frontendpage.Chef');
    }
    public function Menu(){
    	return view('frontendpage.Menu');
    }
    public function Blog(){
    	return view('frontendpage.Blog');
    }
    public function Contact(){
    	return view('frontendpage.Contact');
    }
}
