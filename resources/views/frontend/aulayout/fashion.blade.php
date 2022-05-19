<!doctype html>

                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>productDetails</title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
                                <style>
                                    .body {
                                        font-family: 'Roboto Condensed', sans-serif;
                                        background-color: #f5f5f5
                                    }

                                    .hedding {
                                        font-size: 20px;
                                        color: #ab8181`;
                                    }

                                    .main-section {
                                        position: absolute;
                                        left: 50%;
                                        right: 50%;
                                        transform: translate(-50%, 5%);
                                    }

                                    .left-side-product-box img {
                                        width: 100%;
                                    }

                                    .left-side-product-box .sub-img img {
                                        margin-top: 5px;
                                        width: 83px;
                                        height: 100px;
                                    }

                                    .right-side-pro-detail span {
                                        font-size: 15px;
                                    }

                                    .right-side-pro-detail p {
                                        font-size: 25px;
                                        color: #a1a1a1;
                                    }

                                    .right-side-pro-detail .price-pro {
                                        color: #E45641;
                                    }

                                    .right-side-pro-detail .tag-section {
                                        font-size: 18px;
                                        color: #5D4C46;
                                    }

                                    .pro-box-section .pro-box img {
                                        width: 100%;
                                        height: 200px;
                                    }

                                    @media (min-width:360px) and (max-width:640px) {
                                        .pro-box-section .pro-box img {
                                            height: auto;
                                        }

                                    }
                                    </style>
                            </head>
 <body oncontextmenu='return false' class='snippet-body'>
    <div class="container">

        <div class="col-lg-8 border p-3 main-section bg-white">
        <div class="row hedding m-0 pl-3 pt-0 pb-3">
            Product Detail
        </div>
        {{-- @foreach ($table_products as $table_product ) --}}

        <div class="row m-0">
            <div class="col-lg-4 left-side-product-box pb-3">
                <img class="border-py3" src="{{  $table_product->image}}">
               </div>
            <div class="col-lg-8">
                <div class="right-side-pro-detail border p-3 m-0">
                    <div class="row">
                        <div class="col-lg-12">
                             <p class="m-0 p-0">{{ $table_product->ProductName}}</p>
                        </div>
                        <div class="col-lg-12">
                            <p class="m-0 p-0 price-pro">{{ $table_product->rentingPrice}}</p>
                            <hr class="p-0 m-0">

                        </div>
                        <div class="col-lg-12 pt-2">
                            <h5>Product Detail</h5>
                            <p class="m-0 p-0 price-pro">{{ $table_product->descriptions}}</p>

                            <hr class="m-0 pt-2 mt-2">
                        </div>



                        <div class="col-lg-12 mt-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="" class="btn btn-success w-100">Book Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        {{-- @endforeach --}}
        <div class="row">
            <div class="col-lg-12 text-center pt-3">
                <h4>More Product</h4>
            </div>
        </div>
        <div class="row mt-3 p-0 text-center pro-box-section">
            <div class="col-lg-3 pb-2">
                <div class="pro-box border p-0 m-0">
                    <img src="data:image/jpeg;base64,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">
                </div>
            </div>
            <div class="col-lg-3 pb-2">
                <div class="pro-box border p-0 m-0">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIHaJA26j3N_0LotwmLVLC4RJgreDQYa3S9g&usqp=CAU">
                </div>
            </div>
            <div class="col-lg-3 pb-2">
                <div class="pro-box border p-0 m-0">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkn7Xu8VLs6CBnyaOQUsujUCxExlz7UheLGw&usqp=CAU">
                </div>
            </div>
        </div>
    </div>



 </body>
</html>



