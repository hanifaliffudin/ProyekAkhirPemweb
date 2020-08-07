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
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontawesome/css/font-awesome.min.css') ?>">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
</head>

<body>

    <header class="site-header js-site-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="<?php echo base_url(); ?>">Hotel Sekawan</a></div>
                <div class="col-6 col-lg-8">
                </div>
            </div>
        </div>
    </header>
    <section class="site-hero inner-page overlay">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center" data-aos="fade">
                    <h1 class="heading">Data Tamu</h1>
                    <table class="table table-bordered table-striped table-light text-black" id="mydata">
                        <thead>
                            <tr class="table-dark text-black">
                                <td>Nama</td>
                                <td>Nomor telepon</td>
                                <td>Email</td>
                                <td>Check In</td>
                                <td>Check Out</td>
                                <td>Tipe Kamar</td>
                                <td>Jumlah tamu</td>
                                <td>Catatan</td>
                                <td>Nomor Pembayaran</td>
                                <td>Bayar</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($user->result_array() as $i) :
                                // $id = $i['id'];
                                $nama = $i['nama'];
                                $telp = $i['telp'];
                                $email = $i['email'];
                                $checkin = $i['checkin'];
                                $checkout = $i['checkout'];
                                $tipe = $i['tipekamar'];
                                $tamu = $i['tamu'];
                                $cttn = $i['catatan'];
                                $nopbyrn = $i['nopembayaran'];
                            ?>
                                <tr>
                                    <td><?php echo $nama; ?> </td>
                                    <td><?php echo $telp; ?> </td>
                                    <td><?php echo $email; ?> </td>
                                    <td><?php echo $checkin; ?> </td>
                                    <td><?php echo $checkout; ?> </td>
                                    <td><?php echo $tipe; ?> </td>
                                    <td><?php echo $tamu; ?> </td>
                                    <td><?php echo $cttn; ?> </td>
                                    <td><?php echo $nopbyrn; ?></td>
                                    <td><a href=" <?php echo base_url('hotel/bayar/' . $nopbyrn); ?>">Bayar</a> </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <a href="<?php echo base_url(); ?>">
                        <h3>Home</h3>
                    </a>
                    <!-- <h3>Home</h3> -->
                </div>
            </div>
        </div>

    </section>


    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-migrate-3.0.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.stellar.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.fancybox.min.js') ?>"></script>

    <script src="<?php echo base_url('assets/js/aos.js') ?>"></script>

    <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.timepicker.min.js') ?>"></script>

    <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
</body>

</html>