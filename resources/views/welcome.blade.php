@extends('layouts.app')
@section('style')
    <style>
        body{
            background-color: green;
        }
        </style>
@endsection

@section('content')

@if ($name=='Damilola')
  <p>Hello Damilola
   
@endif

@if ()
    
@else
    
@endif

@foreach ($name as $na)
    ncncncnncncncnnc
@endforeach
@for ($i = 0; $i < $count; $i++)
    
@endfor
@auth
    
@endauth
@guest
    
@endguest
<div @class(['p-4', 'container', 'font-bold' => true])>
<p> Hello World {{ $name }} and your age is {{ $age }}
 @php
    echo "How are you doing?";
    $isavailable= true; 
 @endphp
    <p @style(["color:blue", "font-size:60px" => $isavailable])>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, ratione.</p>
 @endsection

 @section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"> </script>
     <script>
        console.log('Javascript is perfect with Laravel');
        </script>
 @endsection