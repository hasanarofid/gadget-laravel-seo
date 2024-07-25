<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('theme/style.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/style2.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div id="cont">
        <header>
            <div class="nav">
                <div class="icon">
                    <i class="fa-brands fa-apple"></i>
                </div>
                <div class="links">
                    <ul class="ln">
                        <li>Store</li>
                        <li class="has-submenu">Mac
                            <ul class="submenu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="submenu-title">Left Column</h4>
                                            <li>MacBook Air</li>
                                            <li>MacBook Pro</li>
                                            <li>iMac</li>
                                            <li>Mac Mini</li>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="submenu-title">Right Column</h4>
                                            <li>MacBook Air</li>
                                            <li>MacBook Pro</li>
                                            <li>iMac</li>
                                            <li>Mac Mini</li>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="has-submenu">Mac 2
                            <ul class="submenu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4 class="submenu-title">Left Column</h4>
                                            <li>MacBook Air</li>
                                            <li>MacBook Pro</li>
                                            <li>iMac</li>
                                            <li>Mac Mini</li>
                                        </div>
                                        <div class="col-md-6">
                                            <h4 class="submenu-title">Right Column</h4>
                                            <li>MacBook Air</li>
                                            <li>MacBook Pro</li>
                                            <li>iMac</li>
                                            <li>Mac Mini</li>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li>iPhone</li>
                        <li>Watch</li>
                        <li>AirPods</li>
                        <li>TV & Home</li>
                        <li>Entertainment</li>
                        <li>Accessories</li>
                        <li>Support</li>
                    </ul>
                </div>
                <div class="str">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <i class="fa-solid fa-bag-shopping"></i>
                </div>
            </div>
        </header>
       
      <div class="news">
        <p class="news_msg" style="text-align: center">
          Get up to ₹8000.00 instant savings on selected products with eligible
          HDFC Bank cards.*
          <a href="#" class="news_link">
            See offers <i class="fa-solid fa-chevron-right"></i>
          </a>
        </p>
      </div>

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
          <img src="./assets/first_back.jpg" alt="" />
        </div>
      </div>
    </div>

    <div class="iphone_14_pro_page">
      <h1 class="iphone_head">iPhone 14 Pro</h1>
      <h3 class="pro_beyond">Pro. Beyond.</h3>
      <div class="iphone_links">
        <a href="#">
          <button class="main_shop">
            Learn more <i class="fa-solid fa-chevron-right"></i>
          </button>
        </a>
        <a href="#">
          <button class="main_shop">
            Buy <i class="fa-solid fa-chevron-right"></i>
          </button>
        </a>
      </div>
    </div>

    <div class="iphone_14_wonderful">
      <h1 class="iphone_14_head">iPhone 14</h1>
      <h3 class="wonderful">Wonderfull.</h3>
      <div class="iphone_links">
        <a href="#">
          <button class="main_shop">
            Learn more <i class="fa-solid fa-chevron-right"></i>
          </button>
        </a>
        <a href="#">
          <button class="main_shop">
            Buy <i class="fa-solid fa-chevron-right"></i>
          </button>
        </a>
      </div>
    </div>

    <div class="features">
      <div class="easy">
        <p class="easy_to_switch">
          It's easy to switch from <br />
          Android to iPhone.
        </p>
        <br />
        <p class="chirag_enjoys">
          Chirag enjoys a glitch-free gaming on his iPhone.
        </p>
        <div class="feature_link iphone_links">
          <a href="#">
            <button class="watch_film main_shop">
              Watch his film <i class="fa-regular fa-circle-play"></i>
            </button>
          </a>
          <a href="#">
            <button class="discover_more main_shop">
              Discover more stories <i class="fa-solid fa-chevron-right"></i>
            </button>
          </a>
        </div>
        <div class="image"></div>
      </div>
      <div class="mac_air_15">
        <br /><br /><br />
        <p class="mac_name">MacBook Air 15"</p>
        <p class="impo">Impressively big. Impressibly thin.</p>
        <div class="iphone_links">
          <a href="#">
            <button class="main_shop" style="font-size: 16px">
              Learn more <i class="fa-solid fa-chevron-right"></i>
            </button>
          </a>
          <a href="#">
            <button class="main_shop" style="font-size: 16px">
              Buy <i class="fa-solid fa-chevron-right"></i>
            </button>
          </a>
        </div>
        <div class="image"></div>
      </div>
    </div>

    <div class="watch_ipad">
      <div class="watch">
        <p class="watch_name">
          <i class="fa-brands fa-apple"></i>WATCH
        </p>
        <p class="series_8">SERIES 8</p>
        <p class="watch_tagline">A healthy leap ahead.</p>
        <div class="iphone_links">
          <a href="#">
            <button class="main_shop" style="font-size: 16px">
              Learn more <i class="fa-solid fa-chevron-right"></i>
            </button>
          </a>
          <a href="#">
            <button class="main_shop" style="font-size: 16px">
              Buy <i class="fa-solid fa-chevron-right"></i>
            </button>
          </a>
        </div>
        
      </div>
      <div class="ipad">
        <p class="mac_name">iPad Pro</p>
        <div class="inline_mac">
        <p class="mac_tagline">Supercharged by</p>
        <img src="./assets/m2_chip.png" alt="m2 chip">
        </div>
        <div class="iphone_links">
          <a href="#">
            <button class="main_shop" style="font-size: 16px">
              Learn more <i class="fa-solid fa-chevron-right"></i>
            </button>
          </a>
          <a href="#">
            <button class="main_shop" style="font-size: 16px">
              Buy <i class="fa-solid fa-chevron-right"></i>
            </button>
          </a>
        </div>
      </div>
    </div>

    <div class="airpods_trade">
      <div class="airpods">
        <p class="pod_name">
          AirPods Pro
        </p>
        <p class="pod_tagline">
          Rebuilt from the sound up.
        </p>
        <br>
        <div class="iphone_links">
          <a href="#">
            <button class="main_shop" style="font-size: 16px">
              Learn more <i class="fa-solid fa-chevron-right"></i>
            </button>
          </a>
          <a href="#">
            <button class="main_shop" style="font-size: 16px">
              Buy <i class="fa-solid fa-chevron-right"></i>
            </button>
          </a>
        </div>
      </div>
      <div class="iphone_trade">
        <p class="pod_name">
        <i class="fa-brands fa-apple"></i>  Trade In
        </p>
        <p class="pod_tagline">
          Upgrade and save. It's that easy.
        </p>
        <br>
        <div class="iphone_links">
          <a href="#">
            <button class="main_shop" style="font-size: 16px">
              See what your device is worth <i class="fa-solid fa-chevron-right"></i>
            </button>
          </a>
        </div>
      </div>
    </div>

    <br /><br /><br />
    <script src="{{ asset('theme/script.js') }}" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const submenu = document.querySelector('.has-submenu');
    const content = document.getElementById('cont');

    submenu.addEventListener('mouseenter', function () {
        content.classList.add('blurred');
    });

    submenu.addEventListener('mouseleave', function () {
        content.classList.remove('blurred');
    });
});

    </script>
</body>
</html>
