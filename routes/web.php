<?php

use App\Http\Controllers\Admin\ProductController;
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
Route::get('/about', [PagesController::class, 'about']);

// Route::resources('/admin/products', [ProductController::class]);

Route::get('/admin/products', [ProductController::class, 'index']);
Route::get('/admin/products/post', [ProductController::class, 'post']);
Route::post('/admin/products/post', [ProductController::class, 'store']);
Route::delete('/admin/products/delete', [ProductController::class, 'delete'])->name('product.delete');
Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit']);
Route::put('/admin/products/update', [ProductController::class, 'update']);