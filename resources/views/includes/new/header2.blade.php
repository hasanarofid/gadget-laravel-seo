<header>
  <nav class="navbar navbar-expand-lg navbar-custom">
    <!-- Logo visible only on large screens -->
    <a class="navbar-brand d-none d-lg-none" href="#">
      <img src="{{ asset('theme/img/logoophone2.png') }}" alt="Logo">
    </a>

    <!-- Hamburger menu icon visible only on mobile screens -->
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <svg width="18" height="18" viewBox="0 0 18 18">
        <polyline id="globalnav-menutrigger-bread-bottom" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" points="2 12, 16 12" class="globalnav-menutrigger-bread globalnav-menutrigger-bread-bottom">
          <animate id="globalnav-anim-menutrigger-bread-bottom-open" attributeName="points" keyTimes="0;0.5;1" dur="0.24s" begin="indefinite" fill="freeze" calcMode="spline" keySplines="0.42, 0, 1, 1;0, 0, 0.58, 1" values=" 2 12, 16 12; 2 9, 16 9; 3.5 15, 15 3.5"></animate>
          <animate id="globalnav-anim-menutrigger-bread-bottom-close" attributeName="points" keyTimes="0;0.5;1" dur="0.24s" begin="indefinite" fill="freeze" calcMode="spline" keySplines="0.42, 0, 1, 1;0, 0, 0.58, 1" values=" 3.5 15, 15 3.5; 2 9, 16 9; 2 12, 16 12"></animate>
        </polyline>
        <polyline id="globalnav-menutrigger-bread-top" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" points="2 5, 16 5" class="globalnav-menutrigger-bread globalnav-menutrigger-bread-top">
          <animate id="globalnav-anim-menutrigger-bread-top-open" attributeName="points" keyTimes="0;0.5;1" dur="0.24s" begin="indefinite" fill="freeze" calcMode="spline" keySplines="0.42, 0, 1, 1;0, 0, 0.58, 1" values=" 2 5, 16 5; 2 9, 16 9; 3.5 3.5, 15 15"></animate>
          <animate id="globalnav-anim-menutrigger-bread-top-close" attributeName="points" keyTimes="0;0.5;1" dur="0.24s" begin="indefinite" fill="freeze" calcMode="spline" keySplines="0.42, 0, 1, 1;0, 0, 0.58, 1" values=" 3.5 3.5, 15 15; 2 9, 16 9; 2 5, 16 5"></animate>
        </polyline>
      </svg>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <!-- Logo visible only on mobile screens -->
        <li class="nav-item d-lg-block">
          <a class="navbar-brand nav-link" href="#">
            <img src="{{ asset('theme/img/logoophone2.png') }}" alt="Logo">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Store</a>
        </li>
        <!-- Add more nav items here -->
        <li class="nav-item has-submenu">
          <a class="nav-link" href="#" id="macDropdown" role="button">
            Mac
          </a>
          <div class="submenu" aria-labelledby="macDropdown">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <h4 class="submenu-title">Left Column</h4>
                  <a class="dropdown-item" href="#">MacBook Air</a>
                  <a class="dropdown-item" href="#">MacBook Pro</a>
                  <a class="dropdown-item" href="#">iMac</a>
                  <a class="dropdown-item" href="#">Mac Mini</a>
                </div>
                <div class="col-md-6">
                  <h4 class="submenu-title">Right Column</h4>
                  <a class="dropdown-item" href="#">MacBook Air</a>
                  <a class="dropdown-item" href="#">MacBook Pro</a>
                  <a class="dropdown-item" href="#">iMac</a>
                  <a class="dropdown-item" href="#">Mac Mini</a>
                </div>
              </div>
            </div>
          </div>
        </li>

        <li class="nav-item has-submenu">
          <a class="nav-link" href="#" id="iPhoneDropdown" role="button">
            iPhone
          </a>
          <div class="submenu" aria-labelledby="iPhoneDropdown">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <h4 class="submenu-title">Left Column iPhone</h4>
                  <a class="dropdown-item" href="#">MacBook Air</a>
                  <a class="dropdown-item" href="#">MacBook Pro</a>
                  <a class="dropdown-item" href="#">iMac</a>
                  <a class="dropdown-item" href="#">Mac Mini</a>
                </div>
                <div class="col-md-6">
                  <h4 class="submenu-title">Right Column iPhone</h4>
                  <a class="dropdown-item" href="#">MacBook Air</a>
                  <a class="dropdown-item" href="#">MacBook Pro</a>
                  <a class="dropdown-item" href="#">iMac</a>
                  <a class="dropdown-item" href="#">Mac Mini</a>
                </div>
              </div>
            </div>
          </div>
        </li>
        <!-- Add more nav items here -->
        
        <li class="nav-item">
          <a class="nav-link" href="#">Watch</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">AirPods</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">TV & Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Entertainment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Accessories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Support</a>
        </li>
        <li class="nav-item d-lg-block">
          <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
        </li>
        <li class="nav-item d-lg-block">
          <a class="nav-link" href="#"><i class="fa-solid fa-bag-shopping"></i></a>
        </li>
      </ul>
    </div>

    <!-- Icons visible only on large screens -->
    <div class="navbar-nav d-none d-lg-none">
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa-solid fa-bag-shopping"></i></a>
      </li>
    </div>
  </nav>
</header>


  <br /><br />

<div class="main_page">
  <div class="main_page_head">
    <h1 class="main_head">
      Save on Mac or iPad <br />
      for university.
    </h1>
    <p class="plus_offer">
      Plus get AirPods with Mac and Apple Pencil with iPad. <sup>1</sup>
    </p>
    <br />
    <a href="#">
      <button class="main_shop">
        Shop now <i class="fa-solid fa-chevron-right"></i>
      </button>
    </a>
  </div>
  <br />
  <div class="vid">
    <img src="{{ asset('theme/assets/first_back.jpg') }}" alt="" />
  </div>
</div>