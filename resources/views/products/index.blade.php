<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="con1">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            <tr>
              @foreach($products as $products)
              <td>{{$products->product_id}}</td>
              <td>{{$products->product_name}}</td>
              <td>{{$products->product_category}}</td>
              <td>{{$products->product_price}}</td>
              <td>{{$products->created_at}}</td>
              <td>{{$products->updated_at}}</td>
              @endforeach
            </tr>
        </table>
    </div>
</body>
</html>