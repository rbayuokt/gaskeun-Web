<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>GASKEUN - Home</title>
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
                    <li class="nav-item active">
                        <a class="nav-link active" href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link " href="cara_menggunakan.php">
                            Cara Menggunakan
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link " href="cari_film.php">
                            Cari Film
                        </a>
                    </li>
                    <li class="nav-item active">
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
                <h1 class="b-text bTopMin90">GASKEUN</h1>
                <p>Aplikasi yang <b>membantumu melancarkan</b> nonton film <b>bareng doi.</b></p>
                <div class="inline-search-area ml-auto none-768">
                    <div class="search-boxs">
                        <div class="search-col">
                            <label for="v_lokasi_bioskop" class="bTextPutih">Pilih Bioskop</label>
                            <select class="selectpicker search-fields" name="v_lokasi_bioskop" id="a_lokasi_bioskop">
                                <option selected disabled>-- Pilih Bisokop --</option>
                                <option value="braga-xxi-bandung">Baraga XXI Bandung</option>
                                <option value="btc-xxi-bandung">BTC XXI Bandung</option>
                                <option value="cgv-23-paskal-bandung">CGV 23 Paskal Bandung</option>
                                <option value="cgv-bec-mall-bandung">CGV BEC Mall Bandung</option>
                                <option value="cgv-paris-van-java-bandung">CGV Paris Van Java Bandung</option>
                                <option value="cgv-kings-shopping-center-bandung">CGV KING Shopping Center Bandung</option>
                                <option value="ciwalk-xxi-bandung">CIWALK XXI Bandung</option>
                                <option value="empire-xxi-bandung">Empire XXI Bandung</option>
                                <option value="festival-citylink-xxi-bandung">Festival Citylink Bandung</option>
                                <option value="tsm-xxi-bandung">TSM XXI Bandung</option>
                            </select>
                        </div>
                        <div class="search-col">
                            <label for="v_judul_film" class="bTextPutih">Pilih Bioskop</label>
                            <select class="selectpicker search-fields" name="v_judul_film" id="a_judul_film">
                                <option selected disabled>-- Pilih Judul Film --</option>
                                <option disabled>Pilih bioskop dahulu</option>
                            </select>
                        </div>
                        <div class="find">
                            <button class="btn button-theme btn-search btn-block b-radius" id="v_gas">
                                <i class="fa fa-search"></i><strong>GAS</strong>
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
            <div class="search-col col-6">
            <select class="selectpicker search-fields" name="location">
                    <option>-- Pilih Bioskop --</option>
                    <option value="braga-xxi-bandung">Baraga XXI Bandung</option>
                    <option value="btc-xxi-bandung">BTC XXI Bandung</option>
                    <option value="cgv-23-paskal-bandung">CGV 23 Paskal Bandung</option>
                    <option value="cgv-bec-mall-bandung">CGV BEC Mall Bandung</option>
                    <option value="cgv-paris-van-java-bandung">CGV Paris Van Java Bandung</option>
                    <option value="cgv-kings-shopping-center-bandung">CGV KING Shopping Center Bandung</option>
                    <option value="ciwalk-xxi-bandung">CIWALK XXI Bandung</option>
                    <option value="empire-xxi-bandung">Empire XXI Bandung</option>
                    <option value="festival-citylink-xxi-bandung">Festival Citylink Bandung</option>
                    <option value="tsm-xxi-bandung">TSM XXI Bandung</option>
                </select>
            </div>
            <div class="search-col col-6">
                <select class="selectpicker search-fields" name="location">
                <option>-- Pilih Film --</option>
                    <option>Shops</option>
                    <option>Hotels</option>
                    <option>Restaurants</option>
                    <option>Fitness</option>
                </select>
            </div>
            <div class="search-col col-12">
                <button class="btn button-theme btn-search btn-block b-radius">
                    <i class="fa fa-search"></i><strong>GAS</strong>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Search area 3 end -->

<!-- hasil prediksi strat -->
<div class="categories content-area-7">
    <div class="container">
        <!-- Main title -->
        <div id="result_cari">
            <div class="main-title text-center">
                <h1 style="font-weight:400"><b>PREDIKSI KELANCARAN</b> MENONTON</h1>
                <p>Silahkan memilih bioskop dan filmnya terlebih dahulu</p>
            </div>
            <div class="row">
                <div class="col">
                    
                </div>
            </div>
        </div><!-- end result prediksi -->
    </div>
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

<!-- script untuk cuaca -->
<script>
    var counter_prediksi = 0;
    function getCucacaJam(jadwal){

        //split jadwal bioskop
        var jadwal_bioskop_h = jadwal.split(':');
        //alert(jadwal_bioskop_h[0]);
        
        //inisialisasi prediksi 

        $.ajax({
            url : "controller/c_api_cuaca.php",
            dataType: "json",
            success : function(result){
                $.each(result.data,function(index,item){
                    var jam = item.timestamp_local.split('T');
                    var h = jam[1].split(':');

                    for(var z = 0 ; z <= h.length-3; z++){
                        
                        if(h[z] == jadwal_bioskop_h[0]){
                        //jamnya
                        //console.log(h[z]);
                        
                        //code cuaca
                        //console.log("https://www.weatherbit.io/static/img/icons/"+item.weather.icon+".png");
                        var hsl_icn = "https://www.weatherbit.io/static/img/icons/"+item.weather.icon+".png";
                        var hsl_ket_icn = item.weather.description;

                        var icn_cuaca = "<tr style='height:80px!important;line-height:80px; !important;'><td><center><img src='"+hsl_icn+"' class='' alt='cuaca' style='width:70px;height:70px;'/></center></td><td><p style='font-size:15px;' class='text-center'>"+hsl_ket_icn+"</p></td></tr>";
                        //cuacanya
                        //console.log(item.weather.description);
                        
                        //cek untuk prediksi 
                        if(hsl_ket_icn == "Few clouds" || hsl_ket_icn == "Scattered clouds"){
                            counter_prediksi += 1;
                            console.log(counter_prediksi);
                        }

                        $('#loop_cuaca').append(icn_cuaca);
                    
                        }

                    }

                    //ke prediksi
                    var tot_jam = h.length-2;
                    var prediksi = (counter_prediksi / tot_jam) * 100;
                    console.log(prediksi);
                    $('.bBoxHijau').css('width',prediksi);
                    $('.counter_hsl').html(prediksi/ 10 +" %");
                    
                })
                
            }
        });
    }
</script>

<!-- <td id='gambar_cuaca'></td> -->
<!-- script untuk film -->
<script>
    function getDataJadwalFilm(tempat){
        $.ajax({
            url: "controller/c_api_jadwal_film.php",
            method: "POST",
            dataType: "json",
            data: {
                "v_lokasi_bioskop": tempat,
            },  
            success: function (result) {
                var w = $('#a_lokasi_bioskop option:selected').text();
                var y = $('#a_judul_film option:selected').text();

                $.each(result, function(index, item) {
                    if(item.title == y){
                        $("#v_poster_film").attr("src",item.img);
                        $('#v_judul_film').html(item.title);
                        $('#v_kategori_film').html(item.category);
                        $('#v_aktor_film').html(item.Actors);
                        $('#v_jadwal_film').html(item.Jadwal);
                        $('#t_judul_film').html(y);
                        $('#t_nama_bioskop').html(w);

                        var jadwal_split = item.Jadwal.split('\n');
                        var no = 1;
                        var isi_jadwal = "";
                        for(var z = 0 ; z <= jadwal_split.length - 2 ; z++){
                            getCucacaJam(jadwal_split[z]);

                            isi_jadwal += "<tr style='height:80px!important;line-height:80px; !important;'><td>"+no+"</td><td>"+jadwal_split[z]+"</td></tr>";
                
                            no++;
                            $('#loop_jadwal').html(isi_jadwal);
                        }
                    }
                })
            }
        });
    }
</script>

<script>
    $(document).ready(function(){
        $('#v_gas').click(function(){
            var x = $('#a_lokasi_bioskop option:selected').text();
            var tempat = $('#a_lokasi_bioskop option:selected').val();
            var y = $('#a_judul_film option:selected').text();

            if(tempat != null && ( y != null && y != "-- Pilih Judul Film --")){
                //alert(x +" "+ y);

                getDataJadwalFilm(tempat);

                $.ajax({
                    url: 'result_prediksi.php',
                        type : 'POST',
                        dataType: "html",
                        success : function(result){
                            $('#result_cari').html(result);
                        }
                });

                $('html,body').animate({
                        scrollTop: $("#result_cari").offset().top
                    }, 'slow');
            }else{
                alert('Silahkan pilih bioskop atau film terlebih dahulu');
            }
            

        });
    });
</script>
<script>
    $(document).ready(function(){
        $('#a_lokasi_bioskop').change(function(){
            //var list_judul = "<option value='wow'>WOW</option>";
            // $('#a_judul_film').html(list_judul).selectpicker('refresh');
            var tempat = $('#a_lokasi_bioskop').val();
            $('#a_judul_film').html();
            $.ajax({
                url : 'controller/c_api_jadwal_film.php',
                method : 'POST',
                dataType: "json",
                data: {
                    "v_lokasi_bioskop": tempat,
                },
                success : function(result){
                    $.each(result, function(index, item) {
                        //for(var i = 0 ; i <= index ; i++){
                            var list_judul = "<option value='"+item.title+"'>"+item.title+"</option>";
                            $('#a_judul_film').append(list_judul).selectpicker('refresh');
                        //}
                    });
                }
            });
            $('#a_judul_film').html('<option value="#">-- Pilih Judul Film --</option>');
        });
    });
</script>
<!-- batas -->
</body>
</html>