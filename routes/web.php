<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\PagesController;

//  Route::get('/about/{name}/{date}', function($name, $date){
//     // echo $name;
//     // echo $date;
//     // $name = "Sunday Opeyemi";
//     $user = array('name'=>'Sunday', 'age'=>23, 'addr'=>'Osogbo');
//     return view('about', ['user' => $user]);
//  } );
//  Route::get('/services', function(){
//     return "Services";
//  } );
// Route::get('/', [Controller::class, 'welcome']);

// // Route::redirect('/blog', '/about');
// Route::permanentRedirect('/blog', '/about');

//Pages Routes

Route::get('/', [PagesController::class, 'home']);