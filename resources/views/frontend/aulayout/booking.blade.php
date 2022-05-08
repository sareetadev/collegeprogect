<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customerDetails</title>
    <link href="paymentform.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body background="color:black">
    <div class="wrapper">
        <h2>
customer Details</h2>
<form method="POST" action="{{route('Booking_store',$id)}}">
    @csrf
<h4>Account</h4>
<div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="User Name" required class="name" name="user_name" value="{{ \Illuminate\Support\Facades\Auth::check() ?  \Illuminate\Support\Facades\Auth::user()->name : '' }}">
                    <i class="fa fa-user icon"></i>
                </div>
<div class="input-box">
                    <input type="text" placeholder="Mobile No." required class="name" name="mobile" value="986639575" >
                    <i class="fa fa-mobile icon"></i>
                </div>
</div>

<div class="input-group">
                <div class="input-box">
                    <input type="email" placeholder="Email Adress" required class="name" name="email" value="">
                    <i class="fa fa-envelope icon"></i>
                </div>
</div>


<h4>Rented Date  &nbsp;&nbsp;   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;   ReturAt </h4>
<div class="input-group">
                <div class="input-box">
                    <input type="date"  required class="name" name="rented_date">

                </div>

<div class="input-box">
                    <input type="date"  required class="name" name="rented_date" value="">

                </div>
</div>

<div class="input-group">
                <div class="input-box" class="name" name="return_date" value="">
                    <h4>

</div>
</div>
<h4>Product </h4>
<div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Product Name" required  class="name" name="product_name" value="" >

                </div>
<div class="input-box">
                    <input type="text" placeholder=" Price" required class="name"   name="price" value="">


                </div>
</div>
<h4>Booking NO. </h4>
<div class="input-group">
                <div class="input-box">
                    <input type="number" placeholder="booking " required  class="name"name="booking_no"  value="">

                </div>
<div class="input-group">
                <div class="input-box">
                    <a  href="{{route('pay')}}"> <button type="submit">PAY NOW </button></a>
                </div>
</div>
</form>
</div>
</body>
<style> *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background-color: #f5f5f5;
    font-family: Arial, Helvetica, sans-serif;
}
.wrapper{
    background-color: #fff;
    width: 500px;
    padding: 25px;
    margin: 25px auto 0;
    box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
}
.wrapper h2{
    background-color: #fcfcfc;
    color: #FFAA33;
    font-size: 24px;
    padding: 10px;
    margin-bottom: 20px;
    text-align: center;
    border: 1px dotted #333;
}
h4{
    padding-bottom: 5px;
    color: #FFAA33;
}
.input-group{
    margin-bottom: 8px;
    width: 100%;
    position: relative;
    display: flex;
    flex-direction: row;
    padding: 5px 0;
}
.input-box{
    width: 100%;
    margin-right: 12px;
    position: relative;
}
.input-box:last-child{
    margin-right: 0;
}
.name{
    padding: 14px 10px 14px 50px;
    width: 100%;
    background-color: #fcfcfc;
    border: 1px solid #00000033;
    outline: none;
    letter-spacing: 1px;
    transition: 0.3s;
    border-radius: 3px;
    color: #333;
}
.name:focus, .dob:focus{
    -webkit-box-shadow:0 0 2px 1px #7ed32180;
    -moz-box-shadow:0 0 2px 1px #7ed32180;
    box-shadow: 0 0 2px 1px #7ed32180;
    border: 1px solid #FFAA33;
}
.input-box .icon{
    width: 48px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: 0px;
    left: 0px;
    bottom: 0px;
    color: #333;
    background-color: #f1f1f1;
    border-radius: 2px 0 0 2px;
    transition: 0.3s;
    font-size: 20px;
    pointer-events: none;
    border: 1px solid #00000033;
    border-right: none;
}
.name:focus + .icon{
    background-color: #FFAA33;
    color: #fff;
    border-right: 1px solid #FFAA33;
    border: none;
    transition: 1s;
}
.dob{
    width: 30%;
    padding: 14px;
    text-align: center;
    background-color: #fcfcfc;
    transition: 0.3s;
    outline: none;
    border: 1px solid #c0bfbf;
    border-radius: 3px;
}
.radio{
    display: none;
}
.input-box label{
    width: 50%;
    padding: 13px;
    background-color: #fcfcfc;
    display: inline-block;
    float: left;
    text-align: center;
    border: 1px solid #c0bfbf;
}
.input-box label:first-of-type{
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
    border-right: none;
}
.input-box label:last-of-type{
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
}
.radio:checked + label{
    background-color: #FFAA33;
    color: #fff;
    transition: 0.5s;
}
.input-box select{
    display: inline-block;
    width: 50%;
    padding: 12px;
    background-color: #fcfcfc;
    float: left;
    text-align: center;
    font-size: 16px;
    outline: none;
    border: 1px solid #c0bfbf;
    cursor: pointer;
    transition: all 0.2s ease;
}
.input-box select:focus{
    background-color: #FFAA33;
    color: #fff;
    text-align: center;
}
button{
    width: 100%;
    background: transparent;
    border: none;
    background: #FFAA33;
    color: #fff;
    padding: 15px;
    border-radius: 4px;
    font-size: 16px;
    transition: all 0.35s ease;
}
button:hover{
    cursor: pointer;
    background: #FFAA33;
}</style>
</html>

