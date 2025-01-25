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
        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" id="form" class="form-control">
            @csrf
        <label for="" class="form-label">first name:</label>
        <input type="text" name="fname" id="fname" class="form-control">
        <br>
        <label for="" class="form-label">last name:</label>
        <input type="text" name="lname" id="lname" class="form-control">
        <br>
        <label for="" class="form-label">Age:</label>
        <input type="number" name="age" id="age" class="form-control">
        <br>
        <label for="" class="form-label">City:</label>
        <input type="text" name="city" id="city" class="form-control">
        <br>
        <label for="" class="form-label">Profile:</label>
        <input type="file" name="img_path" id="img_path" class="form-control">
        <br>
        <input type="submit" value="create" class="btn btn-primary" id="btn">
    </form>
    </div>
</body>
</html>