<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel Sekawan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.timepicker.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fancybox.min.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/ionicons/css/ionicons.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontawesome/css/font-awesome.min.css')?>">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
</head>
<body>

<header class="site-header js-site-header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="index.html">Hotel Sekawan</a></div>
            <div class="col-6 col-lg-8">
            </div>
        </div>
    </div>
</header>

<section class="site-hero inner-page overlay" >
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center text-black" data-aos="fade">
                <h4 class="heading">Pembayaran</h4>
                <?php
                include 'function.php';
                $checkin = $posts[0]->checkin;
                $checkout = $posts[0]->checkout;
                $jenisKamar = $posts[0]->tipekamar;
                //hargaNormal
                $hargaNormal = getHargaKamar($jenisKamar);
                //getHariLibur($dateStart);
                //harga naik cek
                $hargaAkhir = getHargaAkhir($checkin, $hargaNormal);
                //lamanginap
                $lamaNginap = getLamaNginap($checkin, $checkout);
                //harga total
                $hargaTotal = getHargaTotal($hargaAkhir, $lamaNginap);
                //estetika
                if($hargaAkhir <= $hargaNormal){
                    $hargaAkhir = "-";
                }
                ?>
                <h4 class="p-1 mb-0">Jenis kamar: <?php echo $jenisKamar;?> </h4>
                <h4 class="p-1 mb-0">Harga normal: Rp.<?php echo $hargaNormal ;?> </h4>
                <h4 class="p-1 mb-0">Harga naik: Rp.<?php echo $hargaAkhir;?> </h4>
                <h4 class="mb-0 p-1">Lama menginap: <?php echo $lamaNginap;?> hari</h4>
                <h4 class="mb-3 p-1">Harga total: Rp.<?php echo $hargaTotal;?> </h4>
                <?php $specialCode = ($hargaTotal + (rand(111,999))); ?>
                <h4 class="mb-0">silahkan bayar sesuai nominal berikut sampai 3 digit terakhir!</h4>
                <h3 class="mb-0 p-3">Rp.<?php echo $specialCode;?> </h3>
                <p></p>
                <h3><a href="<?php echo base_url(); ?>">Home</a></h3>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery-migrate-3.0.1.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.stellar.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.fancybox.min.js')?>"></script>

<script src="<?php echo base_url('assets/js/aos.js')?>"></script>

<script src="<?php echo base_url('assets/js/bootstrap-datepicker.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.timepicker.min.js')?>"></script>

<script src="<?php echo base_url('assets/js/main.js')?>"></script>
</body>
</html>
