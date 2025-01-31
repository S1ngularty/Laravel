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
    justify-content:center;
    height: 100%;
    width: 80%;
}

#form img {
    height: 300px;
    width:300px ;
}

.div1, .div2 {
    display: flex;
    justify-content: center;
    flex-direction: column;
    margin:50px ;
}

</style>
<body>
    <div class="container" >
        <form action="{{route('item.store')}}" method="POST" enctype="multipart/form-data" id="form" class="form-control">
            @csrf
            <div class="div1">
                <label for="" class="form-label">Profile Image:</label>
                <img src="" alt="">
                <br>
                <input type="file" name="image_path" class="form-control">
            </div>
        <div class="div2">
            <label for="" class="form-label">Item name:</label>
        <input type="text" name="item_name" id="item_name" value="{{old('item_name')}}" class="form-control">
        @error('item_name')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <br>
        <label for="" class="form-label">Item Category:</label>
       <select name="item_category" id="item_category" class="form-select">
            @foreach($item as $category)
            <option value="{{$category->id}}">{{$category->category}}</option>
            @endforeach
       </select>
        <br>
        <label for="" class="form-label">Price:</label>
        <input type="number" name="item_price" id="item_price" value="{{old('item_price')}}" class="form-control">
        @error('item_price')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <br>
        <label for="" class="form-label">Item Description:</label>
        <input type="text" name="item_description" id="item_description" class="form-control">
        <br>
        <input type="submit" value="create" class="btn btn-primary" id="btn">
        </div>
    </form>
    </div>
</body>
</html>