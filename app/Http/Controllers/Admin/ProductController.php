<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //  $products=   DB::table('products')->get();
    $products=   DB::table('products')->where('price', '>=', '23')->where('size', '<', '40')->get();
// $products=   DB::table('products')->where('price', '>=', '23')->where('size', '<', '40')->first();
// $products=   DB::table('products')->where('price', '>=', '23')->where('size', '<', '40')->value('size');
// $products=   DB::table('products')->where('price', '>=', '23')->where('size', '<', '40')->pluck('size');
return view('admin.products.index',compact(['products']));
    }
   public function post(){
     return view('admin.products.post');
   }
   function store(Request $request){
  DB::table('products')->insert([
        'title' => $request->title,
        'size' => $request->size,
        'pric$productse' => $request->price
  ]);

  return redirect('/admin/products/post')->with('success', 'Product details has been successfully posted');
   }

   function delete(Request $request){
    DB::table('products')->where('id', $request->idd)->delete();
    return redirect('/admin/products/')->with('success', 'Product details has been successfully deleted');
   }
   function edit($id){
    // $product = DB::table('products')->find($id);
    $product = DB::table('products')->find($id);
     return view('admin.products.edit', compact(['product']));
   }
   function update(Request $request){
     if(DB::table('products')->where('id', $request->id)->update([
        'title' => $request->title,
        'size' => $request->size,
        'price' => $request->price,
       ])){
       return redirect('/admin/products/')->with('success', 'Product details has been successfully updated');
   }
}
}