@extends('layouts.userlayout')
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
                <th scope="col">Total Bill</th>
                <th scope="col">Discount Price</th>

            </tr>
            </thead>
            <tbody>
            @foreach($orders as $orders)
                @if( $orders->email == Auth::user()->email)
                <tr>
                    <th scope="row">{{ $orders->id }}</th>
                    <td>{{ $orders->name }}</td>
                    <td>{{ $orders->email }}</td>
                    <td> {{ $orders->contact }}</td>

                    <td>{{ $orders->address }}</td>
                    <td>{{ $orders->p_name }}</td>
                    <td>{{ $orders->quantity }}</td>
                    <td>{{ $orders->details }}</td>
                    <td>{{ $orders->quantity * $orders->price}}</td>
                    @if( $orders->discount!="")
{{--                        <td style="background-color: green;color: white">{{ $orders->quantity * $orders->discount}}</td>--}}
                        <td >{{ $orders->quantity * $orders->discount}}</td>
                        @else
                        <td >{{ $orders->quantity * $orders->price}}</td>
                        @endif
{{--                    <td>                    <a href="{{ URL::to('/editcattles/' . $orders->id) }}" class="btn-outline-success" >Update</a>--}}
{{--                        |--}}
{{--                        <a href="{{ URL::to('/deletecattles/' .  $orders->id) }}" class="btn-outline-danger">--}}
{{--                            Delete--}}
{{--                        </a></td>--}}

                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
