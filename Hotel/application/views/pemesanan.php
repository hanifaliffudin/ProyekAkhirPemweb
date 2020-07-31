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

    <section class="site-hero inner-page overlay" style="background-image: url('assets/images/hero_4.jpg')" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center" data-aos="fade">
                    <h1 class="heading mb-3">Reservation Form</h1>
                    <ul class="custom-breadcrumbs mb-4">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li>&bullet;</li>
                        <li>Reservation</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
    <!-- END section -->

    <section class="section contact-section" id="next">
        <div class="container">
            <div class="row">
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <form action="<?php echo base_url('hotel/reserve'); ?>" method="post" name="input">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="text-black font-weight-bold" for="nama">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control ">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="text-black font-weight-bold" for="tlp">Telepon</label>
                                <input type="tel" id="tlp" name="telp" class="form-control ">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="text-black font-weight-bold" for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control ">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label class="text-black font-weight-bold">Check In</label>
                                <input type="date" name="checkin" class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="text-black font-weight-bold">Check Out</label>
                                <input type="date" name="checkout" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="tipe" class="text-black font-weight-bold ">Tipe Kamar</label>
                                <div class="field-icon-wrap">
                                    <div class="icon"></div>
                                    <input type="radio" name="tipe" class="custom-radio" value="Super">
                                    <label for="tipe">Super</label>
                                    <input type="radio" name="tipe" class="custom-radio" value="Hyper">
                                    <label for="tipe">Hyper</label>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="tamu" class="text-black font-weight-bold ">Jumlah Tamu</label>
                                <div class="field-icon-wrap">
                                    <div class="icon"></div>
                                    <input type="number" min="1" name="tamu" id="tamu" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-12 form-group">
                                <label class="text-black font-weight-bold" for="message">Catatan</label>
                                <textarea name="message" id="message" class="form-control " cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input class="btn btn-outline-white-primary py-3 text-dark px-5" type="submit" value="Pesan">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="row">
                        <div class="col-md-10 ml-auto contact-info">
                            <p><span class="d-block">Alamat:</span> <span class="text-black">Jl. Songgoriti, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141</span></p>
                            <p><span class="d-block">Telepon:</span> <span class="text-black"> (0341) 593555</span></p>
                            <p><span class="d-block">Email:</span> <span class="text-black"> hotelsekawan@gmail.com</span></p>
                        </div>
                    </div>
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