<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="con1">
        <table style="text-align:center; border-collapse:collapse;">
            <tr style="border:solid 1px black;">
                <th style="padding:30px 50px;">ID</th>
                <th  style="padding:30px 50px;">Name</th>
                <th style="padding:30px 50px;">Category</th>
                <th style="padding:30px 50px;">Price</th>
                <th style="padding:30px 50px;">Created At</th>
                <th style="padding:30px 50px;">Updated At</th>
            </tr>
            
              @foreach($products as $products)
              <tr style="border:solid 1px black;">
              <td>{{$products->product_id}}</td>
              <td>{{$products->product_name}}</td>
              <td>{{$products->product_category}}</td>
              <td>{{$products->product_price}}</td>
              <td>{{$products->created_at}}</td>
              <td>{{$products->updated_at}}</td>
              </tr>
              @endforeach
        </table>
    </div>
</body>
</html>