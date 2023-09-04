@extends('layouts.app')
@section('content')
<center>
   @if (session('success'))
<h2> Edit Product</h2>
<div class="alert alert-success alert-dismissible">
   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
   <strong>Success!</strong> {{ session('success') }}
 </div>
 @endif
<form action="{{ url('/admin/products/update') }}" method="post">
    @method('put')
   @csrf

   <input type="hidden" name="id" value="{{ $product->id }}">
<p>
   Title <br> <input type="text" name="title" value="{{ $product->title }}" >
</p>
<p>
    Size<br> <input type="text" name="size" value="{{$product->size }}" >
 </p>
 <p>
    Price<br> <input type="text" name="price" value="{{ $product->price }}" >
 </p>
 <input type="submit" value="Update">
</form>
</center>
@endsection