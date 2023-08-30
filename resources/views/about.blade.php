<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2> About Us Page </h2>
@foreach ($user as  $user)  
{{$user}} <br/>
@endforeach
{{-- <p>  {{$user['name']}}</p> --}}
</body>