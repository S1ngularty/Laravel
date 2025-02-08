@extends('layouts.form')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .container{
        margin: 50px;
    }

    .btn{
        width: 100%;
    }
</style>
<body>
    <div class="container">
        <form action="{{route('category.update',['id'=>$category->id])}}" method="POST">
            @csrf
            @method('PUT')
            <label for="" class="form-label">Category Name:</label>
            <input type="text" class="form-control" placeholder="category name" value="{{$category->category}}" name="category_name">
            <br>
            <input type="submit" name="" class="btn btn-primary">
        </form>
    </div>
</body>
</html>