<?php

use Illuminate\Support\Facades\Route;


Route::get('/','SiteController@ShowHome');

Route::get('/about','SiteController@ShowAbout');

Route::get('/service','SiteController@ShowService');

Route::get('/portfolio','SiteController@ShowPortfolio');
