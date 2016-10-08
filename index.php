<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- bootstrap v4-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" media="screen"/>

    <!-- fullpage -->
    <link rel="stylesheet" href="vendor/fullpage/jquery.fullpage.css" media="screen"/>

    <!-- custom scrollbar -->
    <link rel="stylesheet" href="vendor/custom-scrollbar/jquery.mCustomScrollbar.min.css" media="screen" />

    <!-- font awesome -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.css" media="screen"/>

    <!-- video background -->
    <link rel="stylesheet" href="vendor/background-video/style.css" media="screen" />

    <!-- font montserrat and droid serif-->
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700|Montserrat:400,700" rel="stylesheet">

    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- custom bootstrap -->
    <link rel="stylesheet" href="css/responsive.css" />

  </head>
  <body>
    <ul class="button-navigation">
      <li></li>
      <li></li>
      <li></li>
    </ul>

    <!-- main navigation -->
    <nav class="navigation">
      <ul>
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">ARTIKEL</a></li>
        <li><a href="#">DESTINASI</a></li>
        <li><a href="#">GALERI</a></li>
        <li class="socmed">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
        </li>
      </ul>
    </nav>
    <!-- end of main navigation -->

    <div class="fullpage">

      <!-- video intro -->
      <section class="section introduce">
        <div id="video-background"></div>
        <div class="meta-navigation">
          <i class="fa fa-long-arrow-down"></i>
        </div>
      </section>
      <!-- end of video intro -->

      <!-- latest article -->
      <section class="section latest-articles">
        <div class="dot-mask"></div>
        <div class="container">
          <article class="big-article">
            <div class="background" style="background-image: url(images/small-thumb/articles/img-article-1.jpg)"></div>
            <div class="meta">baru</div>
            <div class="title">
              <h4>Keindahan Arsitektur Rumah Radank Pontianak</h4>
            </div>
          </article>
          <article class="small-article">
            <div class="background" style="background-image: url(images/small-thumb/articles/img-article-2.jpg)"></div>
            <div class="meta">populer</div>
            <div class="title">
              <h4>Keindahan Candi Borobudur Beserta Patungnya</h4>
            </div>
          </article>
          <article class="small-article">
            <div class="background" style="background-image: url(images/small-thumb/articles/img-article-3.jpg)"></div>
            <div class="meta">populer</div>
            <div class="title">
              <h4>Gunung Bromo di Waktu Pagi</h4>
            </div>
          </article>
          <article class="small-article">
            <div class="background" style="background-image: url(images/small-thumb/articles/img-article-4.jpg)"></div>
            <div class="meta">populer</div>
            <div class="title">
              <h4>Wisata Air Terjun Terekstrim di Indonesia</h4>
            </div>
          </article>
          <article class="small-article">
            <div class="background" style="background-image: url(images/small-thumb/articles/img-article-5.jpg)"></div>
            <div class="meta">populer</div>
            <div class="title">
              <h4>Indonesia Dengan Segala Keindahannya</h4>
            </div>
          </article>
        </div>
        <div class="meta-navigation">
          <i class="fa fa-long-arrow-down"></i>
        </div>
      </section>
      <!-- end of latest article -->

      <!-- popular destination -->
      <section class="section popular-destination">
        <div class="row-destination">
          <article class="destination">
            <div class="background" style="background-image: url(images/popular-destination/popular-dest-1.jpg)"></div>
            <div class="caption">
              <h2>Air Terjun Kedung Kayang</h2>
              <div class="body-sinopsis">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore</p>
              </div>
            </div>
          </article>
          <article class="destination">
            <div class="background" style="background-image: url(images/popular-destination/popular-dest-2.jpg)"></div>
            <div class="caption">
              <h2>Gunung Bromo</h2>
              <div class="body-sinopsis">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore</p>
              </div>
            </div>
          </article>
          <article class="destination">
            <div class="background" style="background-image: url(images/popular-destination/popular-dest-3.jpg)"></div>
            <div class="caption">
              <h2>Rumah Radakng</h2>
              <div class="body-sinopsis">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore</p>
              </div>
            </div>
          </article>
          <article class="destination">
            <div class="background" style="background-image: url(images/popular-destination/popular-dest-1.jpg)"></div>
            <div class="caption">
              <h2>Air Terjun Kedung Kayang</h2>
              <div class="body-sinopsis">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore</p>
              </div>
            </div>
          </article>
        </div>
        <div class="meta-navigation">
          <i class="fa fa-long-arrow-down"></i>
        </div>
      </section>
      <!-- end of popular destination -->

      <!-- latest gallery -->
      <section class="section latest-gallery">
        <div class="dot-pattern"></div>
        <div class="slider-gallery">
          <div class="row-gallery">
            <a href="#" data-slide="1" class="data-slide-1">
              <figure class="image">
                <img src="images/small-thumb/gallery-slider/thumb-1.jpg" alt="" />
              </figure>
              <div class="caption active">
                <h3>Lorem ipsum dolor sit amet, ne duis detraxit</h3>
              </div>
            </a>
            <a href="#" data-slide="2" class="data-slide-2">
              <figure class="video">
                <img src="images/small-thumb/gallery-slider/thumb-2.jpg" alt="" />
              </figure>
              <div class="caption">
                <h3>Lorem ipsum dolor sit amet, ne duis detraxit</h3>
              </div>
            </a>
            <a href="#" data-slide="3" class="data-slide-3">
              <figure class="image">
                <img src="images/small-thumb/gallery-slider/thumb-3.jpg" alt="" />
              </figure>
              <div class="caption">
                <h3>Lorem ipsum dolor sit amet, ne duis detraxit</h3>
              </div>
            </a>
            <a href="#" data-slide="4" class="data-slide-4">
              <figure class="image">
                <img src="images/small-thumb/gallery-slider/thumb-4.jpg" alt="" />
              </figure>
              <div class="caption">
                <h3>Lorem ipsum dolor sit amet, ne duis detraxit</h3>
              </div>
            </a>
            <a href="#" data-slide="5" class="data-slide-5">
              <figure class="image">
                <img src="images/small-thumb/gallery-slider/thumb-5.jpg" alt="" />
              </figure>
              <div class="caption">
                <h3>Lorem ipsum dolor sit amet, ne duis detraxit</h3>
              </div>
            </a>
          </div>
          <div class="control">
            <i class="fa fa-angle-left left"></i>
            <i class="fa fa-angle-right right"></i>
          </div>
        </div>
      </section>
      <!-- end of latest gallery -->

    </div>

    <!-- popup -->
    <section class="detail-popup">
      <article class="body">
        <div class="property">
          <figure>
            <img src="images/small-thumb/articles/img-article-1.jpg" alt="" />
          </figure>
        </div>
        <div class="text">
          <h3>Lorem Ipsum Dolor Sit Amet Consec tetur Adipisicing Elit</h3>
          <p>
            Lorem ipsum dolor sit amet, eripuit disputando mei no, dico elit ex eos. Ad dicant indoctum usu, id ius soluta causae voluptatum. Tacimates invenire complectitur ad pri, tritani quaerendum cum ei. Tota delectus theophrastus pro ad. Ea elit exerci qui, consul rationibus repudiandae sea ex. Cu dicam laoreet sea, quo ne detracto imperdiet.
          </p>

          <p>
            Mea quas graecis ne. Te natum offendit singulis qui, usu molestiae liberavisse in. Cu natum philosophia disputationi mel. Est ex error dissentias. Nisl invidunt pericula ut eos, duo an wisi legere, at quot iusto voluptaria his. No detracto adipisci principes sea, eam cu prima copiosae convenire.
          </p>

          <figure>
            <img src="images/small-thumb/articles/img-article-2.jpg" alt="" />
          </figure>

          <p>
            Tollit principes voluptatum vel ne, sit eligendi vivendum facilisi ad, an pro graece option insolens. Id eam ipsum libris iudicabit, qui sale nemore at, ne duo mollis discere interesset. Has congue tacimates perpetua cu. Impetus volumus inimicus id est, ius ne mundi definiebas.
          </p>

          <p>
            Eu aliquip detraxit consulatu mel, dicat tritani cu ius. Facilisi complectitur ea usu, ut verterem hendrerit duo, aperiam laoreet adipisci ius id. Ex sit dicat inani tritani. Tale suscipit eu quo. Ei sea quando minimum, usu magna deserunt aliquando ei. Sumo velit fabulas his cu. Sea option debitis invenire in, commune salutatus efficiantur eos ut, regione sententiae eu pro. Corpora liberavisse at sea, saepe omittam delectus per ad. Libris delicatissimi in vix. In mel suavitate imperdiet, ne has erant dolore audire.
          </p>

          <figure>
            <img src="images/small-thumb/articles/img-article-3.jpg" alt="" />
          </figure>

          <p>
            Lorem ipsum dolor sit amet, eripuit disputando mei no, dico elit ex eos. Ad dicant indoctum usu, id ius soluta causae voluptatum. Tacimates invenire complectitur ad pri, tritani quaerendum cum ei. Tota delectus theophrastus pro ad. Ea elit exerci qui, consul rationibus repudiandae sea ex. Cu dicam laoreet sea, quo ne detracto imperdiet.
          </p>
        </div>
        <div class="meta-button">
          <ul>
            <li class="love-button"><i class="glyphicon glyphicon-heart"></i></li>
            <li class="dest-button"><i class="glyphicon glyphicon-map-marker"></i></li>
            <li class="gallery-button"><i class="glyphicon glyphicon-picture"></i></li>
            <li class="travel-button"><i class="fa fa-plane"></i></li>
          </ul>
        </div>
        <ul class="close-button">
          <li></li>
          <li></li>
        </ul>
      </article>
    </section>
    <!-- end of popup -->

  </body>

  <!-- jquery -->
  <script src="vendor/jquery/jquery-3.1.0.min.js"></script>

  <!-- bootstrap v4 js -->
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- fullpage js -->
  <script src="vendor/fullpage/jquery.fullpage.min.js"></script>

  <!-- custom scrollbar -->
  <script src="vendor/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

  <!-- video background -->
  <script src="vendor/background-video/jquery.youtubebackground.js"></script>

  <!-- main js -->
  <script src="js/script.js"></script>

  <script>
    $(document).ready(function() {
      $('.fullpage').fullpage();

      $('.detail-popup .text').mCustomScrollbar({
        theme: 'dark'
      });

      $('#video-background').YTPlayer({
        fitToBackground: true,
        videoId: 'x1DRnv4yYU0'
      });
    });
  </script>

</html>
