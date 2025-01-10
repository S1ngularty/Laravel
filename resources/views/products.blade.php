<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="{{route('product.store')}}" method="get" enctype="multipart/form-data">
<div class="product_name">
    <label for="">Product Name:</label>
    <input type="text" name="product_name">
</div>
<br>
<div class="product_category">
    <label for="">Product Category:</label>
    <input type="text" name="product_category">
</div>
<br>
<div class="product_price">
<label for="">Product Price:</label>
<input type="number" name="product_price" >
</div>
<br>
<input type="submit" name="Create">
        </form>
    </div>
</body>
</html>