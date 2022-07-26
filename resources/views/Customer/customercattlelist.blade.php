@extends('layouts.userlayout')


<head>
    @section('body')
        <style>
            body{
                margin-top:20px;
                background-color: #fafafa !important;
            }
            @media (min-width: 0) {
                .g-mb-30 {
                    margin-bottom: 2.14286rem !important;
                }
            }

            @media (min-width: 0) {
                .g-py-40 {
                    padding-top: 2.85714rem !important;
                    padding-bottom: 2.85714rem !important;
                }
            }

            @media (min-width: 0) {
                .g-px-20 {
                    padding-left: 1.42857rem !important;
                    padding-right: 1.42857rem !important;
                }
            }
            @media (min-width: 0){
                .g-mb-5 {
                    margin-bottom: 0.35714rem !important;
                }
            }

            .g-bg-white {
                background-color: #fff !important;
            }

            .u-shadow-v18 {
                box-shadow: 0 5px 10px -6px rgba(0, 0, 0, 0.15);
            }

            .g-color-primary {
                color: #72c02c !important;
            }

            .g-font-size-16 {
                font-size: 1.14286rem !important;
            }

            .g-mb-10 {
                margin-bottom: 0.71429rem !important;
            }

            .g-mb-10 {
                margin-bottom: 0.71429rem !important;
            }

            .g-color-black {
                color: #000 !important;
            }

            .g-font-weight-600 {
                font-weight: 600 !important;
            }

            .image{
                height: 200px;
            }

            .image:hover{
                height: 220px;
            }

        </style>
</head>
<body>
<div class="container">
    <hr>
    <div class="row">

        @foreach($products as $products)
            @if($products->type=="Cattle")
                <div class="col-md-6 col-lg-4 g-mb-10">
                    <article class="u-shadow-v18 g-bg-white text-center rounded g-px-20 g-py-40 g-mb-5">
                        <img class="image" src="{{$products->image}}" alt="Image Description">
                        <h4 class="h5 g-color-black g-font-weight-400 g-mb-10">{{$products->name}}</h4>
                        {{--                <p>{{$products->stock}}</p>--}}

                        @if($products->discount!="")
                            <del><span class="d-block g-color-danger g-font-size-16">tk.{{$products->price}}</span></del>
                            <span class="d-block g-color-primary g-font-size-16">tk.{{$products->discount}}</span>
                        @else
                            <span class="d-block g-color-primary g-font-size-16">tk.{{$products->price}}</span>
                        @endif
                        <br>
                        <a href="{{ URL::to('/createorder/' .  $products->id) }}" class="btn btn-outline-success">
                            Order Now
                        </a>
                    </article>
                </div>

            @endif
        @endforeach



    </div>
</div>
</body>
@endsection
