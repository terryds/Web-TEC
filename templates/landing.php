<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=BASE_URL?>/css/style.css">
  <link rel="stylesheet" href="<?=BASE_URL?>/css/landing.css">

  <title>TEC</title>

  <script type="text/javascript">
  const BASE_URL = "<?=BASE_URL?>";
  </script>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="<?=BASE_URL?>/js/jquery.bcSwipe.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
  <script src="<?=BASE_URL?>/js/user.js"></script>
</head>
<body>
  <!--  NAVBAR -->
  <nav class="navbar navbar-expand-md navbar-dark" id="navbar-landing">
    <div class="container">
      <a class="navbar-brand" href="<?=BASE_URL?>">
        <img src="<?=BASE_URL?>/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".mobile-open" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse w-100 mobile-open" id="navContent">

        <ul class="navbar-nav mr-auto">

        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item logged-in">
            <a class="nav-link" href="<?=BASE_URL?>/quiz">Quiz</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="loginMenuNav" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-circle"></i>
              <span id="loginMenuTxt">Login</span>
            </a>
            <div class="dropdown-menu mobile-open" id="loginMenuDrop">
              <form onsubmit="login(); return false;" class="px-4 py-3">
                <div class="form-group">
                  <label>Email</label>
                  <input id="emailLogin" type="email" class="form-control" placeholder="email@example.com">
                  <div class="invalid-feedback">
                    Tolong cek kembali
                  </div>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input id="passwordLogin" type="password" class="form-control" placeholder="Password">
                  <div class="invalid-feedback">
                    Tolong cek kembali
                  </div>
                </div>
                <button type="submit" id="signinButton" class="btn btn-primary">Sign in</button>
              </form>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?=BASE_URL?>/register">Belum punya akun? Daftar</a>
              <a class="dropdown-item" href="<?=BASE_URL?>/reset">Lupa password?</a>
            </div>

            <div class="dropdown-menu mobile-open" id="userMenuDrop">

              <div style="padding: 16px;">
                <div><b id="pname"></b></div>
                <div id="ptecregno"></div>
              </div>
              <a class="dropdown-item" href="<?=BASE_URL?>/profile">Profil</a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" id="logoutButton">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--END NAVBAR -->
  <div class="container-fluid">
    <div class="row">
      <div id="hero" class="w-100 hero carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" id="carousel-item-1">
            <div class="container">
              <div class="carousel-caption d-md-block text-left">
                <h1>Apa itu TEC?</h1>
                <p>TEC merupakan tempat untuk mengembangkan jati diri kewirausahaan kamu. Bergabunglah bersama kami dan kobarkan semangat kewirausahaan kamu!</p>
              </div>
            </div>
          </div>
          <div class="carousel-item" id="carousel-item-2">
            <div class="container">
              <div class="carousel-caption d-md-block text-left">
                <h1>Tempat kamu bisa jadi seperti ini</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item" id="carousel-item-3">
            <div class="container">
              <div class="carousel-caption d-md-block text-right">
                <h1>Bersama orang-orang keren ini</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#hero" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#hero" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>

  <div id="landing-segment-1">
    <div class="row">
      <div class="col-md-6 order-md-1 text-center d-flex align-items-center justify-content-center" id="landing-segment-1-right">
        <div>
          <div class="section-heading">
            <h1>Motto Kami</h1>
          </div>

          <h3>
            Kaya, keren, kece
          </h3>
        </div>
      </div>
      <div class="col-md-6 order-md-0 d-flex" id="landing-segment-1-left">
        &nbsp;
      </div>
    </div>
  </div>
  <div id="landing-segment-2">
    <div class="container">
      <!-- START TESTI -->

      <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 text-center">
          <div class="mb-5"></div>
          <div class="mb-5"></div>

          <div align="center" class="section-heading">
            <h1>Testimonial Kece</h1>
          </div>

          <div id="testi" class="testi ml-md-5 mr-md-5 carousel slide" data-ride="carousel">

            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="testi-atas">
                  <p>Jadi kaya keren kece bersama saya</p>
                </div>
                <div class="testi-bawah">
                  <img src="http://via.placeholder.com/100x100">
                  <p>Hermawansyah Hidayat</p>
                </div>
              </div>

              <div class="carousel-item">
                <div class="testi-atas">
                  <p>Jadi wibu disini</p>
                </div>
                <div class="testi-bawah">
                  <img src="http://via.placeholder.com/100x100">
                  <p>Reyhan Kim</p>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-5"></div>
          <div class="mb-5"></div>
          <a class="testi carousel-control-prev" href="#testi" role="button" data-slide="prev">
            <span class="d-none d-md-block carousel-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="testi carousel-control-next" href="#testi" role="button" data-slide="next">
            <span class="d-none d-md-block carousel-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <!-- END TESTI -->
    </div>
  </div>
  <!-- START REGISTRATION JUMBOTRON -->
  <div class="row">

    <div class="col-12">
      <div class="jumbotron" id="promo-daftar">
        <div class="container">
          <h1 class="display-4">Sudah tertarik?</h1>
          <p class="lead">Dijamin gak nyesel jadi intern di TEC</p>
          <hr class="my-4">
          <p>Jalan menuju manusia kaya, keren, dan kece</p>
          <a class="btn btn-primary btn-lg" href="<?=BASE_URL?>/register" role="button">Daftar TEC</a>
        </div>
      </div>
    </div>
  </div>
  <!-- END REGISTRATION JUMBOTRON -->

  <div class="container">
    <hr />
    <footer>
      <p>&copy; TEC 2018</p>
    </footer>
  </div>

  <script>
  $('#testi').bcSwipe({ threshold: 50 });
  $('#hero .carousel-item').each(function( index ) {
    var properti = "url('"+$(this).attr('hero-bg')+"') no-repeat center center";
    $( this ).css("background",properti);
    $( this ).css("background-size","cover");
  });
  $('#hero').bcSwipe({ threshold: 50 });
</script>
</body>
</html>
