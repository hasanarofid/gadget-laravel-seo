<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Images</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div id="image-container" class="row">
            <!-- Images will be displayed here -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            const imageContainer = $("#image-container");
            const items = window.tvPlusHpData.data.shelf.items;

            // Loop through the items and get the first three images from each item
            items.forEach(item => {
                const images = item.extendedMetadata.images;
                const imageUrls = Object.keys(images).slice(0, 3).map(key => images[key].url.replace('{w}x{h}', '300x300'));

                imageUrls.forEach((imageUrl, index) => {
                    const imgElement = `<div class="col-md-4">
                                            <img src="${imageUrl}" class="img-fluid" alt="Image ${index + 1}">
                                        </div>`;
                    imageContainer.append(imgElement);
                });
            });
        });
    </script>

<section class="homepage-section standalone-module" data-module-template="tv-plus-gallery" data-analytics-region="tv-plus-gallery">
  <div class="module-content">
    <script type="text/javascript">
      window.tvPlusHpData = {
        "data": {
          "shelf": {
            "cachingPolicy": {
              "cache": true,
              "maxAge": 0,
              "type": "RefreshWithCanvas"
            },
            "displayType": "river",
            "id": "edt.col.626ae340-a5f3-4474-8cc5-8b716ded72e5",
            "items": [
              {
                "extendedMetadata": {
                  "images": {
                    "channelSplashWide": {
                      "width": 4320,
                      "height": 1800,
                      "url": "https://is1-ssl.mzstatic.com/image/thumb/Features/v4/e4/5b/70/e45b7075-92f2-feb7-39da-81a359533853/2b9847c6-1def-422c-9fff-5538a7fcf2bc.png/{w}x{h}sr.{f}",
                      "joeColor": "b:rgb(9,9,9) p:rgb(218,219,233) s:rgb(220,183,163) t:rgb(176,177,188) q:rgb(178,148,132)"
                    },
                    "posterArt": {
                      "width": 3840,
                      "height": 2160,
                      "url": "https://is1-ssl.mzstatic.com/image/thumb/p-dFQhrrenz0eg8_smgu9w/{w}x{h}.{f}",
                      "supportsLayeredImage": true,
                      "joeColor": "b:rgb(9,9,9) p:rgb(236,218,208) s:rgb(221,193,180) t:rgb(190,176,168) q:rgb(179,156,145)"
                    },
                    "channelSplashTall": {
                      "width": 1680,
                      "height": 3636,
                      "url": "https://is1-ssl.mzstatic.com/image/thumb/Features/v4/86/4a/f2/864af2c0-8668-eb2b-62f8-42c649aad697/7cbd8806-e701-4183-84e7-f7c2c61f9b08.png/{w}x{h}tc.{f}",
                      "joeColor": "b:rgb(5,4,4) p:rgb(221,220,232) s:rgb(201,173,157) t:rgb(178,177,186) q:rgb(162,139,126)"
                    },
                    "singleColorContentLogo": {
                      "width": 3502,
                      "height": 1258,
                      "url": "https://is1-ssl.mzstatic.com/image/thumb/c5xAg8ALgLjQtvpsVgTg7g/{w}x{h}.{f}",
                      "joeColor": "b:rgb(255,255,255) p:rgb(12,12,12) s:rgb(25,25,25) t:rgb(61,61,61) q:rgb(71,71,71)"
                    }
                  },
                  "longNote": "Presume nothing.",
                  "shortNote": "Jake Gyllenhaal is an attorney whose life unravels when his colleague is murdered."
                },
                "genres": [
                  {
                    "id": "umc.gnr.tv.crime",
                    "name": "Crime",
                    "type": "Genre",
                    "url": "https://tv.apple.com/us/genre/crime/umc.gnr.tv.crime"
                  }
                ],
                "id": "umc.cmc.5hnqrhwtzt3esr7rb1wq2ppvn",
                "images": {
                  "shelfImage": {
                    "height": 2160,
                    "isP3": false,
                    "joeColor": "b:rgb(9,9,9) p:rgb(236,218,208) s:rgb(221,193,180) t:rgb(190,176,168) q:rgb(179,156,145)",
                    "supportsLayeredImage": true,
                    "url": "https://is1-ssl.mzstatic.com/image/thumb/p-dFQhrrenz0eg8_smgu9w/{w}x{h}.{f}",
                    "width": 3840
                  },
                  "shelfImageBackground": {
                    "height": 2160,
                    "isP3": false,
                    "joeColor": "b:rgb(9,9,9) p:rgb(224,195,182) s:rgb(214,169,143) t:rgb(181,158,147) q:rgb(173,137,116)",
                    "supportsLayeredImage": false,
                    "url": "https://is1-ssl.mzstatic.com/image/thumb/Bmd-_E0WDnmV_fKE3kIUwQ/{w}x{h}.{f}",
                    "width": 3840
                  },
                  "transitionImage": {
                    "height": 3240,
                    "isP3": false,
                    "isUber": true,
                    "joeColor": "b:rgb(0,0,6) p:rgb(216,152,127) s:rgb(236,86,53) t:rgb(173,121,103) q:rgb(189,68,43)",
                    "supportsLayeredImage": false,
                    "url": "https://is1-ssl.mzstatic.com/image/thumb/bYeZOr1ocJJzVk9CdQbH0Q/{w}x{h}sr.{f}",
                    "width": 4320
                  }
                },
                "isAppleOriginal": true,
                "releaseDate": 1718150400000,
                "secondaryActions": ["AddToUpNext"],
                "title": "Presumed Innocent",
                "type": "Show",
                "url": "https://tv.apple.com/us/show/presumed-innocent/umc.cmc.5hnqrhwtzt3esr7rb1wq2ppvn"
              },
              {
                "extendedMetadata": {
                  "caption": "NEW EPISODES FRIDAYS",
                  "images": {
                    "channelSplashWide": {
                      "width": 4320,
                      "height": 1800,
                      "url": "https://is1-ssl.mzstatic.com/image/thumb/Features/v4/6e/cd/5b/6ecd5b17-cd76-c312-79ee-e26a71b6c6d7/d8074670-fb1d-4107-8e76-8ce35e6e81d8.png/{w}x{h}sr.{f}",
                      "joeColor": "b:rgb(25,40,46) p:rgb(216,220,178) s:rgb(190,195,171) t:rgb(178,184,151) q:rgb(156,162,143)"
                    },
                    "posterArt": {
                      "width": 3840,
                      "height": 2160,
                      "url": "https://is1-ssl.mzstatic.com/image/thumb/vNMBHybO3_0LlydIAt-JYQ/{w}x{h}.{f}",
                      "supportsLayeredImage": true,
                      "joeColor": "b:rgb(25,40,46) p:rgb(216,220,178) s:rgb(190,195,171) t:rgb(178,184,151) q:rgb(156,162,143)"
                    },
                    "channelSplashTall": {
                      "width": 1680,
                      "height": 3636,
                      "url": "https://is1-ssl.mzstatic.com/image/thumb/Features/v4/32/f6/3f/32f63f82-600b-1ca5-924d-b2d33bc87cb8/8b9b41a8-c7d5-4822-8e84-0a7b2c4d5e99.png/{w}x{h}tc.{f}",
                      "joeColor": "b:rgb(25,40,46) p:rgb(216,220,178) s:rgb(190,195,171) t:rgb(178,184,151) q:rgb(156,162,143)"
                    },
                    "singleColorContentLogo": {
                      "width": 3502,
                      "height": 1258,
                      "url": "https://is1-ssl.mzstatic.com/image/thumb/cgIFVna5WkxRP_tY2Q-cWg/{w}x{h}.{f}",
                      "joeColor": "b:rgb(255,255,255) p:rgb(12,12,12) s:rgb(25,25,25) t:rgb(61,61,61) q:rgb(71,71,71)"
                    }
                  },
                  "longNote": "Revisit the world of science fiction.",
                  "shortNote": "A journey into futuristic adventures."
                },
                "genres": [
                  {
                    "id": "umc.gnr.tv.scifi",
                    "name": "Sci-Fi",
                    "type": "Genre",
                    "url": "https://tv.apple.com/us/genre/scifi/umc.gnr.tv.scifi"
                  }
                ],
                "id": "umc.cmc.6tyjrwblvl56r5f7r2e6t78wr",
                "images": {
                  "shelfImage": {
                    "height": 2160,
                    "isP3": false,
                    "joeColor": "b:rgb(25,40,46) p:rgb(216,220,178) s:rgb(190,195,171) t:rgb(178,184,151) q:rgb(156,162,143)",
                    "supportsLayeredImage": true,
                    "url": "https://is1-ssl.mzstatic.com/image/thumb/vNMBHybO3_0LlydIAt-JYQ/{w}x{h}.{f}",
                    "width": 3840
                  },
                  "shelfImageBackground": {
                    "height": 2160,
                    "isP3": false,
                    "joeColor": "b:rgb(25,40,46) p:rgb(216,220,178) s:rgb(190,195,171) t:rgb(178,184,151) q:rgb(156,162,143)",
                    "supportsLayeredImage": false,
                    "url": "https://is1-ssl.mzstatic.com/image/thumb/uxr9gkPbr4iKJbh3hFpq5A/{w}x{h}.{f}",
                    "width": 3840
                  },
                  "transitionImage": {
                    "height": 3240,
                    "isP3": false,
                    "isUber": true,
                    "joeColor": "b:rgb(0,0,6) p:rgb(216,152,127) s:rgb(236,86,53) t:rgb(173,121,103) q:rgb(189,68,43)",
                    "supportsLayeredImage": false,
                    "url": "https://is1-ssl.mzstatic.com/image/thumb/RbK2ODr2Vv_2P9M4V26MDg/{w}x{h}sr.{f}",
                    "width": 4320
                  }
                },
                "isAppleOriginal": true,
                "releaseDate": 1718150400000,
                "secondaryActions": ["AddToUpNext"],
                "title": "Sci-Fi Adventure",
                "type": "Show",
                "url": "https://tv.apple.com/us/show/sci-fi-adventure/umc.cmc.6tyjrwblvl56r5f7r2e6t78wr"
              }
            ]
          }
        }
      }
    </script>
  </div>
</section>
</body>
</html>
@extends('layouts.frontend_new')

@section('title','Ophone')
@section('content')
@include('includes.halamandepan.slider1')
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

<br /><br /><br />

@endsection