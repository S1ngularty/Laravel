@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    @section('title','index Customer')
</head>
<body>
   @section('content')
   <div class="container">
    <table class="table table-striped">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>City</th>
            <th>Action</th>
        </tr>
       @foreach ($fetch as $info)
           <tr>
            <td>{{$info->fname}}</td>
            <td>{{$info->lname}}</td>
            <td>{{$info->age}}</td>
            <td>{{$info->city}}</td>
            @if($info->deleted_at === null)
            <td><a href="{{route('customer.edit',['id'=>$info->id])}}">Edit</a> &nbsp;
                <a href="{{route('customer.destroy',['id'=>$info->id])}}">Delete</a></td>
                {{-- <a href="{{route('product.restore',['id'=>$fetch->id])}}">Restore</a></td> --}}
            @else
           <td><a href="{{route('customer.restore',['id'=>$info->id])}}">Restore</a></td>
            @endif
           </tr>
       @endforeach
    </table>
</div>

<div class="" style="display:flex; justify-content:center;">{{$fetch->links() }}</div>
@endsection

</body>
</html>