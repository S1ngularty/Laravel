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
    padding-top: 50px;  
}
#form{
    display: flex;
    flex-direction: column;
    justify-content:center;

}

</style>
<body>
    <div class="container" >
        <form action="{{route('item.store')}}" method="POST" enctype="multipart/form-data" id="form" class="form-control">
            @csrf
        <label for="" class="form-label">Item name:</label>
        <input type="text" name="item_name" id="item_name" class="form-control">
        <br>
        <label for="" class="form-label">Item Category:</label>
       <select name="item_category" id="item_category" class="form-select">
            @foreach($item as $category)
            <option value="{{$category->id}}">{{$category->category}}</option>
            @endforeach
       </select>
        <br>
        <label for="" class="form-label">Price:</label>
        <input type="number" name="item_price" id="item_price" class="form-control">
        <br>
        <label for="" class="form-label">Item Description:</label>
        <input type="text" name="item_description" id="item_description" class="form-control">
        <br>
        <input type="submit" value="create" class="btn btn-primary" id="btn">
    </form>
    </div>
</body>
</html>