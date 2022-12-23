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
    <div class="undangan-digital many-menus">
        <img src="<?= base_url(); ?>assets/images/undangan-digital/background-undangan.png" class="img-fluid bground"
            alt="">
        <img src="<?= base_url(); ?>assets/images/undangan-digital/people-side.png" class="img-fluid people-side"
            alt="">
        <div class="container many-menus-container">
            <div class="row">
                <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10">
                    <div class="section-text" data-aos="fade-up" data-aos-duration="2000">
                        <div class="title">
                            <h1><?= $undangan->title; ?></h1>
                            <!-- <h4>Mengapa logo sangat penting bagi pemasar?</h4> -->
                        </div>
                        <p><?= $undangan->deskripsi; ?></p>

                    </div>
                </div>
            </div>
        </div>
        <div class="background-color-undangan">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-9">
                        <div class="list-content">
                            <div class="content" data-aos="fade-up" data-aos-duration="2000">
                                <img class="img-fluid"
                                    src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                                    alt="">
                                <p><?= $undangan->content_1; ?></p>
                            </div>
                            <div class="content" data-aos="fade-up" data-aos-duration="2000">
                                <img class="img-fluid"
                                    src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                                    alt="">
                                <p><?= $undangan->content_2; ?>
                                </p>
                            </div>
                            <div class="content" data-aos="fade-up" data-aos-duration="2000">
                                <img class="img-fluid"
                                    src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                                    alt="">
                                <p><?= $undangan->content_3; ?></p>
                            </div>
                            <div class="content" data-aos="fade-up" data-aos-duration="2000">
                                <img class="img-fluid"
                                    src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                                    alt="">
                                <p><?= $undangan->content_4; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="package-choice">
    <img class="img-fluid bground" src="<?= base_url(); ?>assets/images/social-media/background-paket.png" alt="">
    <div class="container container-package">
        <div class="section-text-middle text-center" data-aos="fade-up" data-aos-duration="2000">
            <h1>Investasi terbaik untuk tingkatkan performa bisnismu</h1>
            <h2 class="mb-5">Pricelist Undangan Digital</h2>
        </div>
        <section class="pricelist-home">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-4 col-6 content-pricelist" data-aos="fade-up"
                    data-aos-duration="2000">
                    <div class="card card-pricelist">
                        <img class="card-img-top" src="<?= base_url(); ?>assets/images/undangan-digital/silver.png"
                            alt="Card image" style="width:100%">
                        <div class="card-body">
                            <?= $silver->list; ?>
                            <div class="original-price">
                                <h4>Rp <?= number_format($silver->price_discount, 0, ",", "."); ?></h4>
                            </div>
                            <div class="promo-price">
                                <h3>Rp <?= $silver->price; ?>K</h3>
                            </div>
                            <div class="mx-auto">
                                <a href="<?= $waLink; ?>" target="_blank">INFO LEBIH LANJUT</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-6 content-pricelist" data-aos="fade-up"
                    data-aos-duration="2000">
                    <div class="card card-pricelist">
                        <img class="card-img-top" src="<?= base_url(); ?>assets/images/undangan-digital/gold.png"
                            alt="Card image" style="width:100%">
                        <div class="card-body">

                            <?= $gold->list; ?>
                            <div class="original-price">
                                <h4>Rp <?= number_format($gold->price_discount, 0, ",", "."); ?></h4>
                                <!-- number_format("1000000",0,",","."); -->
                            </div>
                            <div class="promo-price">
                                <h3>Rp <?= $gold->price; ?>K</h3>
                            </div>
                            <div class="mx-auto">
                                <a href="<?= $waLink; ?>" target="_blank">INFO LEBIH LANJUT</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-6 content-pricelist" data-aos="fade-up"
                    data-aos-duration="2000">
                    <div class="card card-pricelist">
                        <img class="card-img-top" src="<?= base_url(); ?>assets/images/undangan-digital/special.png"
                            alt="Card image" style="width:100%">
                        <div class="card-body check">
                            <?php $html = '"' . $special->list . '"';
                            $count = substr_count($html, '<li>');
                            ?>
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
                            <?= $special->list; ?>
                            <div class="original-price">
                                <h4>Rp <?= number_format($special->price_discount, 0, ",", "."); ?></h4>
                            </div>
                            <div class="promo-price">
                                <h3>Rp <?= $special->price; ?>K</h3>
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
</section>