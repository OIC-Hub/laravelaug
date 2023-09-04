<!DOCTYPE html>
<html>
<head>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<h2> About Us Page </h2>
<h2> Users Details </h2>
<table width="400px">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
    @isset($users)
    @foreach ($users as  $user)
         <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->password }}</td>
    </tr>
    @endforeach
    @endisset
   
</table>
<img src="{{ asset('images/com1.jpg') }}" width="200px" alt="">
</body>