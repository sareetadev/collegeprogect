<div class="topPicks">
    <div class="container" id="topPicksContainer">
        <div class="headings">
             <h2 id="categoryheading">latest Products</h2>
             <hr>


               @forelse ($products as $product)
                <div class="card" style="width: 18rem;  ">
                   <img src="{{ $product ? $product->image :'' }}"  style="width:100%">

                        <h4 class="card-title">{{ $product->productName ?? '' }}</h4>
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
        width: 33.33%;
        display: none; /* Hide all elements by default */
    }
     /*The "show" class is added to the filtered elements */

    .card {
        display: inline-block;
    }
    .card{
        background-color: rgb(253, 253, 169);

        /*height: 300%;*/
        padding: 40px 250px 0 100px;
        margin-top: 20px;
        width: 150%;
        box-shadow: 0 5px 8px 0 rgba(3, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        text-align:below;
        min-height: 300px;
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


