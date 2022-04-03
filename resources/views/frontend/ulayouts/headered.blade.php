<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <h1><a href="index.html">oRs</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a> -->
      </div>


      <nav id="navbar" class="navbar">
          @csrf
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">My Page</a></li>
          <li><a class="nav-link scrollto" href="#about">latestProduct</a></li>
          <li class="dropdown"><a href="#"><span>post Product</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>product</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">add product</a></li>
                  <li><a href="#">editproduct</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>

            </ul>
          </li>

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <a href="{{ route('logout') }}" class="get-started-btn scrollto">logout </a>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
    <div class="user-info-dropdown">
        <div class="dropdown">
            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                <span class="user-icon" >
                    <img src="vendors/images/photo1.jpg" alt="" border-re>
                </span>
                <span class="user-name">Ross C. Lopez</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
                <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                </div>
        </div>
    </div>
    <div class="github-link">
        <a href="https://github.com/dropways/deskapp" target="_blank"><img src="vendors/images/github.svg" alt=""></a>
    </div>
  </header><!-- End Header -->
