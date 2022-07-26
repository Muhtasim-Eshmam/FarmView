@extends('layouts.adminlayout')
@section('body')
    <br>
    <br>
    <div class="container">
    <table class="table table-bordered">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Status</th>
            <th scope="col">Stock</th>
            <th scope="col">Price</th>
            <th scope="col">Discount</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $products)
        <tr>
            <th scope="row">{{ $products->id }}</th>
            <td>{{ $products->name }}</td>
            <td>{{ $products->type }}</td>
            <td>{{ $products->status }}</td>
            <td>{{ $products->stock }}</td>
            <td>{{ $products->price }}</td>
            <td>{{ $products->discount }}</td>
            <td> <img src="{{ $products->image }}" width="100px" height="auto" alt=""> </td>
            <td>                    <a href="{{ URL::to('/editproduct/' . $products->id) }}" class="btn-outline-success" >Update</a>
                |
                <a href="{{ URL::to('/deleteproducts/' .  $products->id) }}" class="btn-outline-danger">
                    Delete
                </a></td>

        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
