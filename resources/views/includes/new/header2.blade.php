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
              @foreach ($menus as $menu)
                  @if ($menu->subMenus->isEmpty())
                      <li class="nav-item">
                          <a class="nav-link" href="#">{{ $menu->nama }}</a>
                      </li>
                  @else
                      <li class="nav-item has-submenu">
                          <a class="nav-link" href="#" id="{{ strtolower($menu->nama) }}Dropdown" role="button">
                              {{ $menu->nama }}
                          </a>
                          <div class="submenu" aria-labelledby="{{ strtolower($menu->nama) }}Dropdown">
                              <div class="container">
                                  <div class="row">
                                      @foreach ($menu->subMenus as $subMenu)
                                          <div class="col-md-6">
                                            <h6 >{{ $subMenu->kategori_title }}</h6>
                                            <a class="dropdown-item" style="font-weight: bold;font-size: 28px" href="{{ url('artikel/'.$subMenu->artikel->slug) }}">{{ $subMenu->sub }}</a>
                                           </div>
                                      @endforeach
                                  </div>
                              </div>
                          </div>
                      </li>
                  @endif
              @endforeach
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
  <img src="{{ asset('theme/assets/Apple-TV-MLS-Season-Pass-Leagues-Cup-team-players_big.jpg.large_2x.jpg') }}" alt="" />
  </div>

</div>