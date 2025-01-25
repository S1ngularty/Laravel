@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    @section('title','index Customer')
</head>
<body>
   @section('content')
   <div class="container">
    <table class="table table-striped">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>City</th>
            <th>Action</th>
        </tr>
       @foreach ($fetch as $fetch)
           <tr>
            <td>{{$fetch->fname}}</td>
            <td>{{$fetch->lname}}</td>
            <td>{{$fetch->age}}</td>
            <td>{{$fetch->city}}</td>
            <td><a href="{{route('product.edit',['id'=>$fetch->id])}}">Edit</a> &nbsp;
                <a href="{{route('product.destroy',['id'=>$fetch->id])}}">Delete</a></td>
            <td></td>
           </tr>
       @endforeach
    </table>
</div>
   @endsection
</body>
</html>