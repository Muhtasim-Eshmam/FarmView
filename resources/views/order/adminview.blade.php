@extends('layouts.adminlayout')
@section('body')
    <br>
    <br>
    <div class="container">
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Customer Email</th>
                <th scope="col">Customer Contact</th>
                <th scope="col">Customer Address</th>

                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Details</th>
                <th scope="col">Price/unit</th>
                <th scope="col">Total Bill</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $orders)
                <tr>
                    <th scope="row">{{ $orders->id }}</th>
                    <td>{{ $orders->name }}</td>
                    <td>{{ $orders->email }}</td>
                    <td> {{ $orders->contact }}</td>

                    <td>{{ $orders->address }}</td>
                    <td>{{ $orders->p_name }}</td>
                    <td>{{ $orders->quantity }}</td>
                    <td>{{ $orders->details }}</td>
                    <td>{{ $orders->price }}</td>
                    @if( $orders->discount!="")
                        {{--                        <td style="background-color: green;color: white">{{ $orders->quantity * $orders->discount}}</td>--}}
                        <td >{{ $orders->quantity * $orders->discount}}</td>
                    @else
                        <td >{{ $orders->quantity * $orders->price}}</td>
                    @endif
                    <td>
                        <a href="{{ URL::to('/deleteorder/' .  $orders->id) }}" class="btn-outline-danger">
                            Cancel
                        </a></td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
