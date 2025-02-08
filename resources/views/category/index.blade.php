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
    .container{
        margin:50px;
    }
</style>
<body>
    @section('content')
       <div class="container">
        <table class="table table-striped">
             <tr>
             <th>Category</th>
             <th>Action</th>
             </tr>
            @foreach ($category as $category_name)
               <tr>
                 <td>{{$category_name->category}}</td>
                @if ($category_name->deleted_at === null)
                <td><a href="{{route('category.edit',["id"=> $category_name->id])}}">Edit</a>&nbsp
                    <a href="{{route('category.destroy',['id'=>$category_name->id])}}">Delete</a></td>
                @else
                    <td><a href="{{route('category.restore',['id'=>$category_name->id])}}">Restore</a></td>
                @endif
               </tr>
            @endforeach
         </table>
       </div>
    @endsection
</body>
</html>