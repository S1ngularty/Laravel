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
body{
    justify-content: center;
    display: flex;
    align-items: center;
}
#form{
    margin-top:50px ;
    padding:20px;
    width: 700px;
}
#form .maindiv{
    display: flex;
    justify-content:space-between;

}
img{
    height: 300px;
    width:300px ;
    margin-bottom: 20px;
    border-radius: 5px;  
}

.div2{
    display: flex;
    flex-direction: column;
}

 #form .btn {
    width: 100%;
    margin-top: 15px;
}

</style>
<body>
        <form action="{{route('customer.update',['id'=>$edit->id])}}" method="POST" enctype="multipart/form-data" id="form" class="form-control">
            @csrf
            @method('PUT')
       <div class="maindiv" class="container">
        <div class="div1" class="container">
            <label for="" class="form-label">first name:</label>
            <input type="text" name="fname" id="fname" class="form-control" value="{{$edit->fname}}">
            <br>
            <label for="" class="form-label">last name:</label>
            <input type="text" name="lname" id="lname" class="form-control" value="{{$edit->lname}}">
            <br>
            <label for="" class="form-label">Age:</label>
            <input type="number" name="age" id="age" class="form-control" value="{{$edit->age}}">
            <br>
            <label for="" class="form-label">City:</label>
            <input type="text" name="city" id="city" class="form-control" value="{{$edit->city}}">
           </div>
          <div class="div2" class="container">
            <label for="" class="form-label">Profile:</label>
            <img src="{{asset('storage/images/'.$edit->image_path)}}" alt="">
            
            <input type="file" name="img_path" id="img_path" class="form-control" value="">
          </div>
       </div>
       
        <input type="submit" value="Updaate" class="btn btn-primary" id="btn">
    </form>
</body>
</html>