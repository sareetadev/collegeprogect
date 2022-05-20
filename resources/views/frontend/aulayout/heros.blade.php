<section id="hero" class="d-flex align-items-center justify-content-center">

    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>

          <h2>Easy to use different products with Online Renting service<span>.</span></h2>

        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
          {{-- {{ dd($categories)}} --}}
        @if (isset($categories))
        @forelse ( $categories as $category )
        <div class="col-xl-2 col-md-4">
            <div class="icon-box">
              <i class="ri-store-line"></i>
              <h3><a href="{{route('fashion_view')}}">{{ $category->name ?? '' }}</a></h3>
            </div>
          </div>
        @empty
        @endforelse

        @endif


      </div>

    </div>
  </section>
<style>
    .topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
    background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }

    </style>
