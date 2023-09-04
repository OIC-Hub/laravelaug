@extends('layouts.app')
@section('content')
<center>
   @if (session('success'))
<h2>Add Product</h2>
<div class="alert alert-success alert-dismissible">
   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
   <strong>Success!</strong> {{ session('success') }}
 </div>
 @endif
<form action="{{ url('/admin/products/post') }}" method="post">
   @csrf
<p>
   Title <br> <input type="text" name="title" >
</p>
<p>
    Size<br> <input type="text" name="size" >
 </p>
 <p>
    Price<br> <input type="text" name="price" >
 </p>
 <input type="submit" value="Post">
</form>
</center>
@endsection