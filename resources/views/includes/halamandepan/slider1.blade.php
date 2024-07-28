
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