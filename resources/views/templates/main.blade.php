<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>cix.</title>
  
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
  
    <link href="//www.google-analytics.com" rel="dns-prefetch" />
    <link href="//ajax.googleapis.com" rel="dns-prefetch" />
    <link href="css/style.min.css" rel="stylesheet" />
  
    <script src="components/modernizr/modernizr.js"></script>
  </head>
  
  <body style="background-color: #f3f3f3">
    <!---->
    <nav class="nav">
      <div class="content-wrapper">
        <div class="block logo">
          <a href="index.html">
            <img src="img/Logo_TV_2015.svg.png" alt="" />
          </a>
        </div>
        <div class="block menu">
          <div class="link"><a href="/">Home</a></div>
          <div class="link"><a href="/destination">Destination</a></div>
          <div class="link"><a href="/tour">Tour</a></div>
          <div class="link"><a href="/form">Form</a></div>
          <div class="link"><a href="#">Developers</a></div>
        </div>
        <a href="javascript:;" class="btn btn-burger"></a>
      </div>
    </nav>
    
    <!---->
    <!---->
    
    @yield('content')
    
    <!---->
    <!---->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="block">
            <div class="title">Language</div>
            <ul>
              <li>
                <a href="#"
                  ><img src="img/icons/icon-flag-france.png" alt="" />
                  Insight France</a
                >
              </li>
              <li>
                <a href="#"
                  ><img src="img/icons/icon-flag-germany.png" alt="" />
                  Insight Germany</a
                >
              </li>
              <li>
                <a href="#"
                  ><img src="img/icons/icon-flag-spain.png" alt="" /> Insight
                  Spain</a
                >
              </li>
              <li>
                <a href="#"
                  ><img src="img/icons/icon-flag-uk.png" alt="" />Insight
                  UK</a
                >
              </li>
              <li>
                <a href="#"
                  ><img src="img/icons/icon-flag-italy.png" alt="" />Insight
                  Italy</a
                >
              </li>
              <li>
                <a href="#"
                  ><img src="img/icons/icon-flag-sweden.png" alt="" />Insight
                  Sweden</a
                >
              </li>
              <li>
                <a href="#"
                  ><img
                    src="img/icons/icon-flag-netherlands.png"
                    alt=""
                  />Insight Netherlands</a
                >
              </li>
              <li>
                <a href="#"
                  ><img
                    src="img/icons/icon-flag-denmark.png"
                    alt=""
                  />Insight Denmark</a
                >
              </li>
              <li>
                <a href="#"
                  ><img
                    src="img/icons/icon-flag-switzerland.png"
                    alt=""
                  />Insight Switzerland</a
                >
              </li>
              <li>
                <a href="#"
                  ><img src="img/icons/icon-flag-us.png" alt="" />Insight
                  USA</a
                >
              </li>
              <li>
                <a href="#"
                  ><img src="img/icons/icon-flag-canada.png" alt="" />Insight
                  Canada</a
                >
              </li>
            </ul>
          </div>
          <div class="block">
            <div class="title">About Indsight</div>
            <ul>
              <li><a href="#">Our Team</a></li>
              <li><a href="#">Legal Notice</a></li>
              <li><a href="#">Use of cookies</a></li>
              <li><a href="#">Term & Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Site Map</a></li>
            </ul>
          </div>
          <div class="block">
            <div class="title">Communication</div>
            <ul>
              <li><a href="#">Press & Media</a></li>
              <li><a href="#">Partnerships</a></li>
            </ul>
          </div>
          <div class="block">
            <div class="title">Contact</div>
            <ul>
              <li><a href="#">Help Center</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Become a partner local agent</a></li>
            </ul>
            <div class="social-media">
              <a href="#" target="_blank">
                <img src="img/icons/icon-facebook.png" alt="" />
              </a>
              <a href="#" target="_blank">
                <img src="img/icons/icon-twitter.png" alt="" />
              </a>
              <a href="#" target="_blank">
                <img src="img/icons/icon-instagram.png" alt="" />
              </a>
              <a href="#" target="_blank">
                <img src="img/icons/icon-youtube.png" alt="" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <!---->
    <script src="components/jquery/jquery.min.js"></script>
    <script src="js/swiper/swiper.min.js"></script>
    <script src="js/scripts.min.js"></script>

    <script>
      var swiper = new Swiper('.swiper-container', {
        spaceBetween: 20,
        slidesPerView: 4
      });
    </script>
  </body>
</html>
