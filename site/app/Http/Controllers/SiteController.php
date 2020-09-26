<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function ShowHome(){
        
        return view('home');
    }

    function ShowAbout(){
        
        return view('about');
    }

    function ShowService(){

        return view('service');  
    }

    function ShowPortfolio(){
        
        return view('portfolio');
    }
}
