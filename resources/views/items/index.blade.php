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
            <th>Item Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
       @foreach ($item as $items)
           <tr>
            <td>{{$items->item_name}}</td>
            <td>{{$items->category}}</td>
            <td>{{$items->price}}</td>
            <td>{{$items->description}}</td>
            <td><a href="{{route('item.edit',['id'=>$items->id])}}">Edit</a> &nbsp;
                <a href="{{route('item.destroy',['id'=>$items->id])}}">Delete</a></td>
            <td></td>
           </tr>
       @endforeach
    </table>
</div>
   @endsection
</body>
</html>