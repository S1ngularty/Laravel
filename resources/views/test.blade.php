<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   @include('header')
    <h3>your personal information</h3><hr>
    <p>First Name: {{$fname}} <br> Last Name: {{$lname}}</p>
   @include('footer')
</body>
</html>