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
        @foreach ($table_products as $table_product )
        <div class="row m-0">
            <div class="col-lg-4 left-side-product-box pb-3">
                <img class="border-py3" src="data:image/jpeg;base64,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" alt="Card image cap">

            </div>
            <div class="col-lg-8">
                <div class="right-side-pro-detail border p-3 m-0">
                    <div class="row">
                        <div class="col-lg-12">
                             <p class="m-0 p-0">pr</p>
                        </div>
                        <div class="col-lg-12">
                            <p class="m-0 p-0 price-pro">$30</p>
                            <hr class="p-0 m-0">

                        </div>
                        <div class="col-lg-12 pt-2">
                            <h5>Product Detail</h5>
                            <span>Feel free to use these Camera images as a background for your PC, laptop, Android phone, iPhone or tablet.
                                There are 49 Camera wallpapers published on this page.

                                </span>
                            <hr class="m-0 pt-2 mt-2">
                        </div>

                        <div class="col-lg-12">
                            <h6>Quantity :</h6>
                            <input type="number" class="form-control text-center w-100" value="1">
                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="{{route('Booking')}}" class="btn btn-success w-100">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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



