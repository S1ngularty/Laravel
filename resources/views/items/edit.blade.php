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
        {{-- {{dd($category)}} --}}
        <form action="{{route('item.update',['id'=>$item->id])}}" method="POST" enctype="multipart/form-data" id="form" class="form-control">
            @csrf
            @method('PUT')
            <div class="div1">
                <label for="" class="form-label">Item Picture</label>
                
            </div>
       <div class="div2">
        <label for="" class="form-label">Item name:</label>
        <input type="text" name="item_name" id="item_name" class="form-control" value="{{$item->item_name}}">
        @error('item_name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <br>
        <label for="" class="form-label">Item Category:</label>
       <select name="item_category" id="item_category" class="form-select" value="{{$item->category}}">
          @foreach ($category as $category)
              @if ($category->category==$item->category)
                  <option value="{{$category->id}}" selected>{{$category->category}}</option>
                  @else
                <option value="{{$category->id}}">{{$category->category}}</option>
              @endif
          @endforeach
       </select>
        <br>
        <label for="" class="form-label">Price:</label>
        <input type="number" name="item_price" id="item_price" class="form-control" value="{{$item->price}}">
        @error('item_price')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
        <br>
        <label for="" class="form-label">Item Description:</label>
        <input type="text" name="item_description" id="item_description" class="form-control" value="{{$item->description}}">
        <br>
        <input type="submit" value="create" class="btn btn-primary" id="btn">
       </div>
    </form>
    </div>
</body>
</html>