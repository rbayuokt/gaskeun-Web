<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>GASKEUN - Cari Film</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-submenu.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="css/slick.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="css/skins/default.css">
    <link rel="stylesheet" type="text/css" href="css/bayu.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/gas.png" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Dosis%7CMontserrat:200,300,400,500,600,700,800,900%7CNunito+Sans:200,300,400,600,700,800,900">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->

    <style>
    .mic{
        color:#f0151f;
    }

    .mic:hover{
        color:#111111;
    }
    </style>
</head>
<body>
<div class="page_loader"></div>

<!-- Main header start -->
<header class="main-header header-transparent sticky-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo" href="index.html">
                <h3 class="bH1Putih">GASKEUN</h3>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav header-ml">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="cara_menggunakan.php">
                            Cara Menggunakan
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="cari_film.php">
                            Cari Film
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="tentang.php">
                            Tentang Kami
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" style="margin-bottom:10px;">
                        <a href="donasi.php" class="nav-link link-color"><i class="fa fa-heart"></i> DONASI</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

<!-- Banner start -->
<div class="banner clearfix" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height active">
                <img class="d-block w-100 h-100" src="img/banner/bioskop2.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex text-center"></div>
            </div>
        </div>
    </div>
    <div class="banner-inner-2">
        <div class="container">
            <div class="text-center">
                <h1 class="b-text bTopMin90">CARI FILM</h1>
                <p>Sebelum nonton alangkah lebih baik <b>cari tau filmnya dulu disini</b></p>
                <div class="inline-search-area ml-auto none-768">
                    <div class="search-boxs">
                        <div class="search-col col-md-12 bCustomHeaderInput">
                        <label for="v_lokasi_bioskop" class="bTextPutih">Masukan Judul Film</label>
                            <input type="text" id="judul_film" class="form-control has-icon b-radius" placeholder="Masukan Judul Film . . .">
                        </div>
                        <div class="find">
                            <button class="btn button-theme btn-search btn-block b-radius" id="btnLihatFilm">
                                <i class="fa fa-search"></i><strong>CARI</strong>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner end -->

<!-- Search area 3 start -->
<div class="search-area-3 clearfix d-md-none d-lg-none d-xl-none">
    <div class="container">
        <div class="inline-search-area-2 row">
            <div class="search-col col-12">
                <input type="text" name="location" class="form-control has-icon b-radius" placeholder="Masukan Judul Film . . .">
            </div>
            <div class="search-col col-12">
                <button class="btn button-theme btn-search btn-block b-radius">
                    <i class="fa fa-search"></i><strong>CARI</strong>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Search area 3 end -->

<!-- hasil prediksi strat -->
<div class="categories content-area-7">
    <div class="container">

        <!-- hasil -->
        <div id="result_cari">
            <div class="main-title text-center">
                <h1 style="font-weight:400"><b>SILAHKAN MEMASUKAN</b> JUDUL FILM DAHULU. . .</h1>
            </div>
        </div>

    </div><!-- end container -->
</div>
<!-- hasil prediksi end -->

<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="footer-item clearfix">
                    <h4 class="bH1Putih">GASKEUN</h4>
                    <div class="text">
                        <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="footer-item">
                    <h4 style="font-weight:400"><b>Tak Kenal</b> Maka Tak Sayang</h4>
                    <ul class="contact-info">
                        <li>
                            <i class="flaticon-mail-1"></i><a href="mailto:sales@hotelempire.com">rizkybayuoktavian@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="footer-item clearfix">
                    <h4 style="font-weight:400"><b>Donasi</b> Kami</h4>
                    <div class="Subscribe-box">
                        <p style="text-align:justify">Bantu kami agar aplikasi ini tetap terus hidup dengan cara mendonasikan seikhlasnya , untuk biaya sewa server , dan kami do'a kan hubungan kalian akan langgeng sampai janur kuning melengkung.</p>
                        <a href="donasi.php" class="btn btn-danger nav-link link-color"><i class="fa fa-heart"></i>&nbsp;&nbsp;DONASI</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Sub footer start -->
<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <p class="copy bTextPutih">© 2019 Rizky Bayu Oktavian. Dibuat dengan <i class="fa fa-heart" style="color:red"></i> di sudut kamar.</p>
            </div>
            <div class="col-lg-4 col-md-4">
                <ul class="social-list clearfix">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub footer end -->

<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script  src="js/bootstrap-submenu.js"></script>
<script  src="js/rangeslider.js"></script>
<script  src="js/jquery.mb.YTPlayer.js"></script>
<script  src="js/bootstrap-select.min.js"></script>
<script  src="js/jquery.easing.1.3.js"></script>
<script  src="js/jquery.scrollUp.js"></script>
<script  src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script  src="js/leaflet.js"></script>
<script  src="js/leaflet-providers.js"></script>
<script  src="js/leaflet.markercluster.js"></script>
<script  src="js/moment.min.js"></script>
<script  src="js/daterangepicker.min.js"></script>
<script  src="js/dropzone.js"></script>
<script  src="js/slick.min.js"></script>
<script  src="js/jquery.filterizr.js"></script>
<script  src="js/jquery.magnific-popup.min.js"></script>
<script  src="js/jquery.countdown.js"></script>
<script  src="js/maps.js"></script>
<script  src="js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>

<!-- script -->

<!-- text to speech -->
<script src="js/responsivevoice.js"></script>

<!-- api film -->
<script>
    function getDataFilm(judul_film){
        $.ajax({
                url: "controller/c_api_info_film.php",
                method: "POST",
                dataType: "json",
                data: {
                    "judul_film": judul_film,
                },   
                success: function (result) {
                    if(result.status == 400){
                        $('#hasilPencarian').hide();
                        $('#hasilRating').hide();
                        $('#statusCode').css({
                            'color' : 'red',
                            'font-weight' : 'bold',
                            'font-size' : '20px'
                        });
                        $('#statusCode').html("Judul Film Salah, Periksa Kembali...");
                    }else{
                        $('#v_judul_film').html(result.Title);
                        $("#v_poster_film").attr("src",result.Poster);
                        $('#v_kategori_film').html(result.Genre);
                        $('#v_aktor_film').html(result.Actors);
                        $('#v_plot_film').html(result.Plot);
                        $('#v_sutradara_film').html(result.Director);
                        $('#v_rilis_film').html(result.Released);
                        $('#v_durasi_film').html(result.Runtime);
                        $('#v_penulis_film').html(result.Writer);

                        $.each(result.Ratings, function(index, item) {
                            
                            var rating = "<div class='col'>\
                            <div class='bRating'>\
                            <h3>"+item.Source+"</h3>\
                                <h1 class='mt-2 bBold'>"+item.Value+"</h1>\
                                </div>\
                            </div>";

                            $('#showRatingnya').append(rating);
                        });
                    }
                }
        });
    }
</script>

<script>
    $(document).ready(function(){
        $('#btnLihatFilm').click(function(){
            var judul_film2 = $('#judul_film').val();

            if(judul_film2 == ""){
                alert("Silahkah Isi Terlebih Dahulu");
            }else{
                $('html,body').animate({
                    scrollTop: $("#result_cari").offset().top
                }, 'slow');

                getDataFilm(judul_film2);

                $.ajax({
                    url: 'result_film.php',
                    type : 'POST',
                    dataType: "html",
                    success : function(result){
                        $('#result_cari').html(result);

                        $('#listening').click(function(){
                            var text = $('#v_plot_film').text();
                            responsiveVoice.speak(text, "UK English Male",{pitch: 0});
                        });
                    }
                });

            }
        
        });
    });
</script>
<!-- script batas -->
</body>
</html>