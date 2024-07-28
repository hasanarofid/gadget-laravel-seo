@extends('layouts.frontend_new')

@section('title','Ophone')
@section('content')

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
  <!-- <h1 class="iphone_14_head">iPhone 14</h1>
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
  </div> -->
</div>

<!-- <div class="features">
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
</div> -->

<div class="watch_ipad">
  <div class="watch">
    <div class="bg_watch"></div>
    <!-- <p class="watch_name">
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
    </div> -->
    
  </div>
  <div class="ipad">
    <p class="mac_name">iPad Pro</p>
    <div class="inline_mac">
    <p class="mac_tagline">Supercharged by</p>
    <img src="{{ asset('theme/assets/m2_chip.png') }}" alt="m2 chip">
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

<link rel="stylesheet" type="text/css" href="{{ asset('slidermovie/engine1/style.css') }}" />
<script type="text/javascript" src="{{ asset('slidermovie/engine1/jquery.js') }}"></script>

<style>
    body, html {
        margin: 0;
        padding: 0;
        width: 100%;
        overflow-x: hidden;
    }
 

</style>
	
	<!-- Start WOWSlider.com div section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="{{ asset('slidermovie/data1/images/movie1.jpg') }}" alt="movie1" title="movie1" id="wows1_0"/></li>
		<li><img src="{{ asset('slidermovie/data1/images/movie2.jpg') }}" alt="movie2" title="movie2" id="wows1_1"/></li>
		<li><a href="http://wowslider.net"><img src="{{ asset('slidermovie/data1/images/movie3.jpg') }}" alt="javascript carousel" title="movie3" id="wows1_2"/></a></li>
		<li><img src="{{ asset('slidermovie/data1/images/movie4.jpg') }}" alt="movie4" title="movie4" id="wows1_3"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="movie1"><span>1</span></a>
		<a href="#" title="movie2"><span>2</span></a>
		<a href="#" title="movie3"><span>3</span></a>
		<a href="#" title="movie4"><span>4</span></a>
	</div></div>
    </div>


<script type="text/javascript" src="{{ asset('slidermovie/engine1/wowslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('slidermovie/engine1/script.js') }}"></script>
<!-- End WOWSlider.com BODY section -->
@endsection