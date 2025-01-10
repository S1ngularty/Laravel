<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Create New Book</h2><hr>
<form action="{{route('book.store')}}" method="get">
    <div id="container1">
        <label for="">Book Name</label>
        <div><input type="text" name="book_name" id=""></div>
        <br>
        <label for="">Book genre</label>
        <div><input type="text" name="book_genre" id=""></div>
        <br>
        <label for="">Book Price</label>
        <div><input type="number" name="book_price" id=""></div>
        <br>
        <input type="submit" name="Create">
    </div>
</form>
</body> 
</html>