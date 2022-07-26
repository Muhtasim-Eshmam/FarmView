<html>
<head>
    <title>Add Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>


    <style>
        body {
            font-family: 'Lato', sans-serif
        }

        h1 {
            margin-bottom: 40px
        }

        label {
            color: #333
        }

        .btn-send {
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            width: 80%;
            margin-left: 3px
        }

        .help-block.with-errors {
            color: #ff5050;
            margin-top: 5px
        }

        .card {
            margin-left: 10px;
            margin-right: 10px;
        }
    </style>

</head>
<br><br>

<div class="row ">
    <br>
    <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">

                <div class="container">
{{--                    {{route('store.order')}}--}}
                    <form action="" method="post" id="contact-form">
                        @csrf
                        <div class="controls">
                            <div class="row">


                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_name">Product Name</label> <input id="pname" type="text" name="pname" class="form-control" placeholder="" required="required" value="{{$admin->pname}}"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_lastname">Quantity</label> <input id="quantity" type="text" name="quantity" class="form-control" placeholder="" required="required" data-error="Lastname is required."> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_lastname">Price</label> <input id="price" type="text" name="price" class="form-control" placeholder="{{$admin->price}}"  data-error="Lastname is required." readonly> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"> <label for="form_lastname">Details</label> <input id="details" type="text" name="details" class="form-control" placeholder=""  data-error="Lastname is required."> </div>
                                </div>



                            </div>
                            <br>
                            <div class="row">

                                <div class="col-md-12"> <input type="submit" class="btn btn-outline-success btn-send pt-2 btn-block "> </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div> <!-- /.8 -->
</div> <!-- /.row-->
</div>
