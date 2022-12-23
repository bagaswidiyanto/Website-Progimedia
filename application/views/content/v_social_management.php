<?php
$numberAPI = $website->phone;
$n1API = substr($numberAPI, 1);
$apiWa = $n1API;

$waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20Sahabat%20$website->name..%21%0APesan%20anda%20sudah%20kami%20terima%0AKami%20akan%20merespons%20pesan%20anda%20segera%0ATerimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
?>

<div class="services-area-home" id="services-area-home">
    <!-- <img src="<?= base_url(); ?>assets/images/social-media/Frame 1802.svg" class="img-fluid img-bubble" alt=""> -->
    <div class="container service-area-container">
        <div class="row justify-content-sm-center" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-4 col-md-4 col-sm-12 mb-4 mb-md-0 content-service">
                <div class="single-services mb-30">
                    <div class="features-icon">
                        <img src="<?= base_url(); ?>assets/images/icon/clients.png" alt="">
                        <p>Clients</p>
                    </div>
                    <div class="features-caption">
                        <h3>4,500 <i class="fa fa-plus"></i></h3>
                        <p>4,500 Personal dan Perusahaan telah percayakan pembuatan web kepada kami.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 mb-4 mb-md-0 content-service">
                <div class="single-services mb-30">
                    <div class="features-icon">
                        <img src="<?= base_url(); ?>assets/images/icon/project.png" alt="">
                        <p>Projects</p>
                    </div>
                    <div class="features-caption">
                        <h3>1,800 <i class="fa fa-plus"></i></h3>
                        <p>1800 lebih projek website telah berhasil dikembangan oleh kami.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 mb-4 mb-md-0 content-service">
                <div class="single-services mb-30">
                    <div class="features-icon">
                        <img src="<?= base_url(); ?>assets/images/icon/employes.png" alt="">
                        <p>Employess</p>
                    </div>
                    <div class="features-caption">
                        <h3>58 <i class="fa fa-plus"></i></h3>
                        <p>58 tenaga ahli kami siap membantu membangun bisnis digital kamu.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box2-content">
        <img src="<?= base_url(); ?>assets/images/social-media/background-manfaat.png" class="img-fluid bground" alt="">
        <div class="container">
            <div class="manfaat">
                <div class="section-content-color text-center" data-aos="fade-up" data-aos-duration="2000">
                    <h3>MANFAAT</h3>
                    <h5 class="mb-5" style="color: #fff;">Social Media Management</h5>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 mt-4">
                        <div class="box-first-yellow" data-aos="fade-up" data-aos-duration="2000">
                            <div class="box-second">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="box-img text-center">
                                            <img class="img-fluid"
                                                src="https://admin.progimedia.com/upload/socialmanagement/<?= $manfaat_yellow->image; ?>"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="text-content">
                                            <h4><?= $manfaat_yellow->title; ?></h4>
                                            <p><?= $manfaat_yellow->deskripsi; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 mt-4">
                        <div class="box-first-green" data-aos="fade-up" data-aos-duration="2000">
                            <div class="box-second">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="box-img text-center">
                                            <img class="img-fluid"
                                                src="https://admin.progimedia.com/upload/socialmanagement/<?= $manfaat_green->image; ?>"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="text-content">
                                            <h4><?= $manfaat_green->title; ?></h4>
                                            <p><?= $manfaat_green->deskripsi; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 mt-4">
                        <div class="box-first-aqua" data-aos="fade-up" data-aos-duration="2000">
                            <div class="box-second">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="box-img text-center">
                                            <img class="img-fluid"
                                                src="https://admin.progimedia.com/upload/socialmanagement/<?= $manfaat_aqua->image; ?>"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="text-content">
                                            <h4><?= $manfaat_aqua->title; ?></h4>
                                            <p><?= $manfaat_aqua->deskripsi; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 mt-4">
                        <div class="box-first-blue" data-aos="fade-up" data-aos-duration="2000">
                            <div class="box-second">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <div class="box-img text-center">
                                            <img class="img-fluid"
                                                src="https://admin.progimedia.com/upload/socialmanagement/<?= $manfaat_blue->image; ?>"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                        <div class="text-content">
                                            <h4><?= $manfaat_blue->title; ?></h4>
                                            <p><?= $manfaat_blue->deskripsi; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="social-slider-phone">
    <div class="container social-phone-container">
        <div class="header-portfolio text-center mt-5" data-aos="fade-up" data-aos-duration="2000">
            <h1>Portofolio</h1>
        </div>
        <div class="slider-food" data-aos="fade-up" data-aos-duration="2000">
            <img class="img-fluid bkground" src="<?= base_url(); ?>assets/images/social-media/phone-1.png" alt="">
            <div class="food">
                <div class="backgrnd-text-1">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-8">
                            <p>Food & Baverage Intagram Post</p>
                        </div>
                    </div>
                </div>
                <div class="sosial-food-slider sos swiper mx-auto">
                    <div class="swiper-wrapper">
                        <?php foreach ($food as $food) { ?>
                        <div class="swiper-slide">
                            <div class="text-center img-center">
                                <img src="https://admin.progimedia.com/upload/social_food_slider/<?= $food->image; ?>"
                                    class="img-fluid" alt="" title="<?= $food->name; ?>">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
                <div id="js-prev1" class="swiper-button-prev"></div>
                <div id="js-next1" class="swiper-button-next"></div>
            </div>
        </div>


        <div class="slider-automotive" data-aos="fade-up" data-aos-duration="2000">
            <img class="img-fluid bkground" src="<?= base_url(); ?>assets/images/social-media/phone-1.png" alt="">
            <div class="automotive">
                <div class="backgrnd-text-1">
                    <div class="row" style="justify-content: right;">
                        <div class="col-lg-9 col-md-9 col-sm-9 col-8">
                            <p>Automotive Intagram Post</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                        </div>
                    </div>
                </div>
                <div class="sosial-automotive-slider sos swiper mx-auto">
                    <div class="swiper-wrapper">

                        <?php foreach ($automotive as $automotive) { ?>
                        <div class="swiper-slide">
                            <div class="text-center img-center">
                                <img src="https://admin.progimedia.com/upload/social_auto_slider/<?= $automotive->image; ?>"
                                    class="img-fluid" alt="" title="<?= $automotive->name; ?>">
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
                <div id="js-prev1" class="swiper-button-prev"></div>
                <div id="js-next1" class="swiper-button-next"></div>
            </div>
        </div>

        <div class="slider-food beauty" data-aos="fade-up" data-aos-duration="2000">
            <img class="img-fluid bkground" src="<?= base_url(); ?>assets/images/social-media/phone-1.png" alt="">
            <div class="food">
                <div class="backgrnd-text-1">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-8">
                            <p>Beauty Intagram Post</p>
                        </div>
                    </div>
                </div>
                <div class="sosial-beauty-slider sos swiper mx-auto">
                    <div class="swiper-wrapper">

                        <?php foreach ($beauty as $beauty) { ?>
                        <div class="swiper-slide">
                            <div class="text-center img-center">
                                <img src="https://admin.progimedia.com/upload/social_beauty_slider/<?= $beauty->image; ?>"
                                    class="img-fluid" alt="" title="<?= $beauty->name; ?>">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div id="js-prev1" class="swiper-button-prev"></div>
                <div id="js-next1" class="swiper-button-next"></div>
            </div>
        </div>

    </div>
</div>

<section class="package-choice">
    <img class="img-fluid bground" src="<?= base_url(); ?>assets/images/social-media/background-paket.png" alt="">
    <div class="container container-package">
        <div class="section-text-middle text-center" data-aos="fade-up" data-aos-duration="2000">
            <h1>Investasi terbaik untuk tingkatkan performa bisnismu</h1>
            <h2 class="mb-5">Harga Jasa Social Media Managements</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 col-sm-12">
                <div class="tab">

                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4" data-aos="fade-up" data-aos-duration="2000">
                            <img class="tablinks" id="defaultOpen" onclick="openCity(event, 'Instagram')"
                                src="<?= base_url(); ?>assets/images/social-media/instagram.png" class="img-fluid"
                                alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4" data-aos="fade-up" data-aos-duration="2000">
                            <img class="tablinks" onclick="openCity(event, 'Facebook')"
                                src="<?= base_url(); ?>assets/images/social-media/facebook.png" class="img-fluid"
                                alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4" data-aos="fade-up" data-aos-duration="2000">
                            <img class="tablinks" onclick="openCity(event, 'Tiktok')"
                                src="<?= base_url(); ?>assets/images/social-media/tiktok.png" class="img-fluid" alt="">
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div id="Instagram" class="tabcontent">
                <section class="pricelist-home">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 content-pricelist" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="card card-pricelist">
                                <img class="card-img-top" src="<?= base_url(); ?>assets/images/silver.png"
                                    alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <?= $igsilver->list; ?>
                                    <div class="original-price">
                                        <h4>Rp <?= number_format($igsilver->price_discount, 0, ",", "."); ?></h4>
                                    </div>
                                    <div class="promo-price">
                                        <h3>Rp <?= $igsilver->price; ?>K</h3>
                                    </div>
                                    <div class="mx-auto">
                                        <a href="<?= $waLink; ?>" target="_blank">INFO LEBIH LANJUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 content-pricelist" data-aos="fade-up"
                            data-aos-delay="300">
                            <div class="card card-pricelist">
                                <img class="card-img-top" src="<?= base_url(); ?>assets/images/gold.png"
                                    alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <?= $iggold->list; ?>
                                    <div class="original-price">
                                        <h4>Rp <?= number_format($iggold->price_discount, 0, ",", "."); ?></h4>
                                    </div>
                                    <div class="promo-price">
                                        <h3>Rp <?= $iggold->price; ?>K</h3>
                                    </div>
                                    <div class="mx-auto">
                                        <a href="<?= $waLink; ?>" target="_blank">INFO LEBIH LANJUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 content-pricelist" data-aos="fade-up"
                            data-aos-delay="400">
                            <div class="card card-pricelist">
                                <img class="card-img-top" src="<?= base_url(); ?>assets/images/platinum.png"
                                    alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <?= $igplatinum->list; ?>
                                    <div class="original-price">
                                        <h4>Rp <?= number_format($igplatinum->price_discount, 0, ",", "."); ?></h4>
                                    </div>
                                    <div class="promo-price">
                                        <h3>Rp <?= $igplatinum->price; ?>K</h3>
                                    </div>
                                    <div class="mx-auto">
                                        <a href="<?= $waLink; ?>" target="_blank">INFO LEBIH LANJUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 content-pricelist" data-aos="fade-up"
                            data-aos-delay="500">
                            <div class="card card-pricelist">
                                <img class="card-img-top" src="<?= base_url(); ?>assets/images/special.png"
                                    alt="Card image" style="width:100%">
                                <div class="card-body check">
                                    <?php $html = '"' . $igspecial->list . '"';
                                    $count = substr_count($html, '<li>');                            ?>
                                    <?php for ($i = 0; $i < $count; $i++) { ?>
                                    <style>
                                    .card-body.check ul li {
                                        background-image: url(assets/images/check.png);
                                        background-repeat: no-repeat;
                                        background-position: 0 5px;
                                        padding-left: 28px;
                                    }
                                    </style>

                                    <?php } ?>
                                    <?= $igspecial->list; ?>
                                    <div class="original-price">
                                        <h4>Rp <?= number_format($igspecial->price_discount, 0, ",", "."); ?></h4>
                                    </div>
                                    <div class="promo-price">
                                        <h3>Rp <?= $igspecial->price; ?>K</h3>
                                    </div>
                                    <div class="mx-auto">
                                        <a href="<?= $waLink; ?>" target="_blank">INFO LEBIH LANJUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div id="Facebook" class="tabcontent">
                <section class="pricelist-home">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 content-pricelist" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="card card-pricelist">
                                <img class="card-img-top" src="<?= base_url(); ?>assets/images/silver.png"
                                    alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <?= $fbsilver->list; ?>
                                    <div class="original-price">
                                        <h4>Rp <?= number_format($fbsilver->price_discount, 0, ",", "."); ?></h4>
                                    </div>
                                    <div class="promo-price">
                                        <h3>Rp <?= $fbsilver->price; ?>K</h3>
                                    </div>
                                    <div class="mx-auto">
                                        <a href="<?= $waLink; ?>" target="_blank">INFO LEBIH LANJUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 content-pricelist" data-aos="fade-up"
                            data-aos-delay="300">
                            <div class="card card-pricelist">
                                <img class="card-img-top" src="<?= base_url(); ?>assets/images/gold.png"
                                    alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <?= $fbgold->list; ?>
                                    <div class="original-price">
                                        <h4>Rp <?= number_format($fbgold->price_discount, 0, ",", "."); ?></h4>
                                    </div>
                                    <div class="promo-price">
                                        <h3>Rp <?= $fbgold->price; ?>K</h3>
                                    </div>
                                    <div class="mx-auto">
                                        <a href="<?= $waLink; ?>" target="_blank">INFO LEBIH LANJUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 content-pricelist" data-aos="fade-up"
                            data-aos-delay="400">
                            <div class="card card-pricelist">
                                <img class="card-img-top" src="<?= base_url(); ?>assets/images/platinum.png"
                                    alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <?= $fbplatinum->list; ?>
                                    <div class="original-price">
                                        <h4>Rp <?= number_format($fbplatinum->price_discount, 0, ",", "."); ?></h4>
                                    </div>
                                    <div class="promo-price">
                                        <h3>Rp <?= $fbplatinum->price; ?>K</h3>
                                    </div>
                                    <div class="mx-auto">
                                        <a href="<?= $waLink; ?>" target="_blank">INFO LEBIH LANJUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 content-pricelist" data-aos="fade-up"
                            data-aos-delay="500">
                            <div class="card card-pricelist">
                                <img class="card-img-top" src="<?= base_url(); ?>assets/images/special.png"
                                    alt="Card image" style="width:100%">
                                <div class="card-body check">
                                    <?php $html = '"' . $fbspecial->list . '"';
                                    $count = substr_count($html, '<li>');                            ?>
                                    <?php for ($i = 0; $i < $count; $i++) { ?>
                                    <style>
                                    .card-body.check ul li {
                                        background-image: url(assets/images/check.png);
                                        background-repeat: no-repeat;
                                        background-position: 0 5px;
                                        padding-left: 28px;
                                    }
                                    </style>

                                    <?php } ?>
                                    <?= $fbspecial->list; ?>
                                    <div class="original-price">
                                        <h4>Rp <?= number_format($fbspecial->price_discount, 0, ",", "."); ?></h4>
                                    </div>
                                    <div class="promo-price">
                                        <h3>Rp <?= $fbspecial->price; ?>K</h3>
                                    </div>
                                    <div class="mx-auto">
                                        <a href="<?= $waLink; ?>" target="_blank">INFO LEBIH LANJUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div id="Tiktok" class="tabcontent">
                <section class="pricelist-home">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4 content-pricelist" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="card card-pricelist">
                                <img class="card-img-top" src="<?= base_url(); ?>assets/images/silver.png"
                                    alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <?= $tksilver->list; ?>
                                    <div class="original-price">
                                        <h4>Rp <?= number_format($tksilver->price_discount, 0, ",", "."); ?></h4>
                                    </div>
                                    <div class="promo-price">
                                        <h3>Rp <?= $tksilver->price; ?>K</h3>
                                    </div>
                                    <div class="mx-auto">
                                        <a href="<?= $waLink; ?>" target="_blank">INFO LEBIH LANJUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4 content-pricelist" data-aos="fade-up"
                            data-aos-delay="300">
                            <div class="card card-pricelist">
                                <img class="card-img-top" src="<?= base_url(); ?>assets/images/gold.png"
                                    alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <?= $tkgold->list; ?>
                                    <div class="original-price">
                                        <h4>Rp <?= number_format($tkgold->price_discount, 0, ",", "."); ?></h4>
                                    </div>
                                    <div class="promo-price">
                                        <h3>Rp <?= $tkgold->price; ?>K</h3>
                                    </div>
                                    <div class="mx-auto">
                                        <a href="<?= $waLink; ?>" target="_blank">INFO LEBIH LANJUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4 content-pricelist" data-aos="fade-up"
                            data-aos-delay="400">
                            <div class="card card-pricelist">
                                <img class="card-img-top" src="<?= base_url(); ?>assets/images/platinum.png"
                                    alt="Card image" style="width:100%">
                                <div class="card-body check">
                                    <?php $html = '"' . $tkplatinum->list . '"';
                                    $count = substr_count($html, '<li>');                            ?>
                                    <?php for ($i = 0; $i < $count; $i++) { ?>
                                    <style>
                                    .card-body.check ul li {
                                        background-image: url(assets/images/check.png);
                                        background-repeat: no-repeat;
                                        background-position: 0 5px;
                                        padding-left: 20px;
                                    }
                                    </style>

                                    <?php } ?>
                                    <?= $tkplatinum->list; ?>
                                    <div class="original-price">
                                        <h4>Rp <?= number_format($tkplatinum->price_discount, 0, ",", "."); ?></h4>
                                    </div>
                                    <div class="promo-price">
                                        <h3>Rp <?= $tkplatinum->price; ?>K</h3>
                                    </div>
                                    <div class="mx-auto">
                                        <a href="<?= $waLink; ?>" target="_blank">INFO LEBIH LANJUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                </section>
            </div>
        </div>
    </div>
    </div>
</section>

<script>
function openCity(evt, socialName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(socialName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>