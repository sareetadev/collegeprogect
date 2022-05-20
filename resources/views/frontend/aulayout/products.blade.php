<!-- Latest compiled and minified CSS -->
<!-- https://xstore.8theme.com/demos/hosting/-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">



<!--Item slider text-->
<h1 class="text-center"> Our  Products</h1>

<div class="container">
  <div class="row" id="slider-text">
    <div class="col-md-6" >
      <h2>NEW COLLECTION</h2>
    </div>
  </div>
</div>

<!-- Item slider-->
<div class="container-fluid">

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="itemslider">
        <div class="carousel-inner">

          @forelse ($products  as $product )
          <div class="item {{ $loop->first ? "active" : ''}}">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="{{route('productDetails')}}"><img src="{{ $product ? $product->image :''}}" class="img-responsive center-block"></a>
              <h4 class="text-center">{{ $product ? $product->ProductName : ''}}</h4>
              <h5 class="text-center">{{ $product ? $product->rentingPrice :''}}</h5>
            </div>
          </div>
          @empty

          @endforelse



        </div>

        <div id="slider-control">
        <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://cdn0.iconfinder.com/data/icons/website-kit-2/512/icon_402-512.png" alt="Left" class="img-responsive"></a>
        <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="http://pixsector.com/cache/81183b13/avcc910c4ee5888b858fe.png" alt="Right" class="img-responsive"></a>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- Item slider end-->
<br/><br/>
<footer class="bg-info">
  <p class="text-center">
  &copy; <a href="https://www.facebook.com/maruf.al.bashir" target="_blank" >Maruf-Al Bashir 2020</a>
  </p>
</footer>

<style>
#slider-text{
    padding-top: 40px;
    display: block;
  }
  #slider-text .col-md-6{
    overflow: hidden;
  }

  #slider-text h2 {
    font-family: 'Josefin Sans', sans-serif;
    font-weight: 400;
    font-size: 30px;
    letter-spacing: 3px;
    margin: 30px auto;
    padding-left: 40px;
  }
  #slider-text h2::after{
    border-top: 2px solid #c7c7c7;
    content: "";
    position: absolute;
    bottom: 35px;
    width: 100%;
    }

  #itemslider h4{
    font-family: 'Josefin Sans', sans-serif;
    font-weight: 400;
    font-size: 12px;
    margin: 10px auto 3px;
  }
  #itemslider h5{
    font-family: 'Josefin Sans', sans-serif;
    font-weight: bold;
    font-size: 12px;
    margin: 3px auto 2px;
  }
  #itemslider h6{
    font-family: 'Josefin Sans', sans-serif;
    font-weight: 300;;
    font-size: 10px;
    margin: 2px auto 5px;
  }
  .badge {
    background: #b20c0c;
    position: absolute;
    height: 40px;
    width: 40px;
    border-radius: 50%;
    line-height: 31px;
    font-family: 'Josefin Sans', sans-serif;
    font-weight: 300;
    font-size: 14px;
    border: 2px solid #FFF;
    box-shadow: 0 0 0 1px #b20c0c;
    top: 5px;
    right: 25%;
  }
  #slider-control img{
    padding-top: 60%;
    margin: 0 auto;
  }
  @media screen and (max-width: 992px){
  #slider-control img {
    padding-top: 70px;
    margin: 0 auto;
  }
  }

  .carousel-showmanymoveone .carousel-control {
    width: 4%;
    background-image: none;
  }
  .carousel-showmanymoveone .carousel-control.left {
    margin-left: 5px;
  }
  .carousel-showmanymoveone .carousel-control.right {
    margin-right: 5px;
  }
  .carousel-showmanymoveone .cloneditem-1,
  .carousel-showmanymoveone .cloneditem-2,
  .carousel-showmanymoveone .cloneditem-3,
  .carousel-showmanymoveone .cloneditem-4,
  .carousel-showmanymoveone .cloneditem-5 {
    display: none;
  }
  @media all and (min-width: 768px) {
    .carousel-showmanymoveone .carousel-inner > .active.left,
    .carousel-showmanymoveone .carousel-inner > .prev {
      left: -50%;
    }
    .carousel-showmanymoveone .carousel-inner > .active.right,
    .carousel-showmanymoveone .carousel-inner > .next {
      left: 50%;
    }
    .carousel-showmanymoveone .carousel-inner > .left,
    .carousel-showmanymoveone .carousel-inner > .prev.right,
    .carousel-showmanymoveone .carousel-inner > .active {
      left: 0;
    }
    .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
      display: block;
    }
  }
  @media all and (min-width: 768px) and (transform-3d), all and (min-width: 768px) and (-webkit-transform-3d) {
    .carousel-showmanymoveone .carousel-inner > .item.active.right,
    .carousel-showmanymoveone .carousel-inner > .item.next {
      -webkit-transform: translate3d(50%, 0, 0);
      transform: translate3d(50%, 0, 0);
      left: 0;
    }
    .carousel-showmanymoveone .carousel-inner > .item.active.left,
    .carousel-showmanymoveone .carousel-inner > .item.prev {
      -webkit-transform: translate3d(-50%, 0, 0);
      transform: translate3d(-50%, 0, 0);
      left: 0;
    }
    .carousel-showmanymoveone .carousel-inner > .item.left,
    .carousel-showmanymoveone .carousel-inner > .item.prev.right,
    .carousel-showmanymoveone .carousel-inner > .item.active {
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
      left: 0;
    }
  }

  @media all and (min-width: 992px) {
    .carousel-showmanymoveone .carousel-inner > .active.left,
    .carousel-showmanymoveone .carousel-inner > .prev {
      left: -16.666%;
    }
    .carousel-showmanymoveone .carousel-inner > .active.right,
    .carousel-showmanymoveone .carousel-inner > .next {
      left: 16.666%;
    }
    .carousel-showmanymoveone .carousel-inner > .left,
    .carousel-showmanymoveone .carousel-inner > .prev.right,
    .carousel-showmanymoveone .carousel-inner > .active {
      left: 0;
    }
    .carousel-showmanymoveone .carousel-inner .cloneditem-2,
    .carousel-showmanymoveone .carousel-inner .cloneditem-3,
    .carousel-showmanymoveone .carousel-inner .cloneditem-4,
    .carousel-showmanymoveone .carousel-inner .cloneditem-5,
    .carousel-showmanymoveone .carousel-inner .cloneditem-6  {
      display: block;
    }
  }
  @media all and (min-width: 992px) and (transform-3d), all and (min-width: 992px) and (-webkit-transform-3d) {
    .carousel-showmanymoveone .carousel-inner > .item.active.right,
    .carousel-showmanymoveone .carousel-inner > .item.next {
      -webkit-transform: translate3d(16.666%, 0, 0);
      transform: translate3d(16.666%, 0, 0);
      left: 0;
    }
    .carousel-showmanymoveone .carousel-inner > .item.active.left,
    .carousel-showmanymoveone .carousel-inner > .item.prev {
      -webkit-transform: translate3d(-16.666%, 0, 0);
      transform: translate3d(-16.666%, 0, 0);
      left: 0;
    }
    .carousel-showmanymoveone .carousel-inner > .item.left,
    .carousel-showmanymoveone .carousel-inner > .item.prev.right,
    .carousel-showmanymoveone .carousel-inner > .item.active {
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
      left: 0;
    }
  }
  </style>
  <script>
$(document).ready(function(){

    $('#itemslider').carousel({ interval: 3000 });

    $('.carousel-showmanymoveone .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<6;i++) {
    itemToClone = itemToClone.next();

    if (!itemToClone.length) {
    itemToClone = $(this).siblings(':first');
    }

    itemToClone.children(':first-child').clone()
    .addClass("cloneditem-"+(i))
    .appendTo($(this));
    }
    });
    });
</script>
{{--
<div class="topPicks">
    <div class="container" id="topPicksContainer">
        <div class="headings">
             <h2 id="categoryheading">latest Products</h2>
             <hr>


               @forelse ($products as $product )
                <div class="card" style="width: 18rem;  ">
                   <img src="{{ $product ? $product->image :'' }}"  style="width:100% " class="card-img-top" alt="...">

                        <h4 class="card-title">{{ $tabel_product->ProductName ?? '' }}</h4>
                        <p class="card-text">{{ $product->descriptions ? $product->descriptions->descriptions :'' }}</p>
                        <a href="{{route('productDetails')}}" class="btn btn-primary product" data-id="{{ $product->id }}">View Details</a>

               </div>
             @empty


             @endforelse

     </div>




    </div>



</div>
<style>
    * {
        box-sizing: border-box;
    }
    /* Create three equal columns that floats next to each other */
    .column {

float: left;
        width: 36.33%;
        display: none; /* Hide all elements by default */
    }
     /*The "show" class is added to the filtered elements */

    .card {
        display:inline-table;
    }
    .card{
        background-color: rgb(240, 237, 230);
im
        /*height: 300%;*/
        padding: 40px 250px 0 100px;
        margin-top: 10px;
        width: 200%;
        box-shadow: 0 5px 8px 0 rgb(255, 255, 0) , 0 6px 20px 0 rgba(0, 51, 0);
        text-align:below;
        min-height: 300px;
    }
    .btn{

    }
</style>
<script>
filterSelection("all")
function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("column");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}
function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
}
function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}
// Add active class to the current button (highlight it)

</script>

 --}}
