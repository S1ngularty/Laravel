@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table{
        margin:50px;
    }
</style>
<body>
    @section('content')
        <table class="table table-striped">
           <tr>
            <th>Category</th>
            <th>Action</th>
           
           @foreach ($category as $category_name)
              <tr>
                <td>{{$category_name->category}}</td>
                <td><a href="{{route('category.edit',["id"=> $category_name->id])}}">Edit</a>&nbsp
                <a href="{{route('category.destroy',['id'=>$category_name->id])}}">Delete</a></td>
              </tr>
           @endforeach
        </table>
    @endsection
</body>
</html>