@extends('layouts.adminlayout')
@section('body')
    <br>

    {{--</head>--}}
    <div class="container">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">Edit Cattles</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                                <form action="{{ route('update.cattle',$cattle) }}" method="post" id="login_form" class="p-5 bg-white" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Product Name" name="name" id="name" value="{{$cattle->name}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Type" name="type" id="type"  value="{{$cattle->type}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">

                                                @if ($cattle->image)
                                                    <br>
                                                    <img src="{{ $cattle->image }}" width="75px" height="auto"
                                                         alt="">
                                                    <br>
                                                @endif
                                                <input type="file" id="image" name="image"
                                                       class="form-control">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Price" name="price" id="price"  value="{{$cattle->price}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Details" name="details" id="details"  value="{{$cattle->details}}" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class=" form-group">
                                            <div class="col-sm-12">
                                                <input type="submit" value="Update Cattles" class="btn btn-outline-dark  ">
                                            </div>
                                        </div>
                                    </div>
                                </form>
@endsection
