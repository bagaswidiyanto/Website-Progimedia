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
        <img src="<?= base_url(); ?>assets/images/web-developer/background-buble.svg" class="img-fluid bground" alt="">
        <div class="container">
            <div class="jasa-web">
                <div class="row row-content-top-web">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-web" data-aos="fade-up" data-aos-duration="2000">
                        <h3><?= $services_web->title; ?></h3>
                        <p class="section-desk-text mt-4"><?= $services_web->deskripsi; ?></p>
                        <div class="b_konsultasi mt-5">
                            <a href="">Konsultasi Gratis</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 mt-5" data-aos="fade-up" data-aos-duration="2000">
                        <h2 class="section-img">
                            <img src="https://admin.progimedia.com/upload/webdevelopment/<?= $services_web->image; ?>"
                                alt="" class="img-fluid">
                        </h2>
                    </div>
                </div>
            </div>
            <div class="portfolio-web">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-header" data-aos="fade-up" data-aos-duration="2000">
                            <p>Portofolio</p>
                            <span>Kami telah membantu berbagai bisnis membuat website baru maupun re-design website lama
                                ke teknologi dan desain yang lebih terkini!</span>
                        </div>
                    </div>
                </div>

                <div class="portfolio-web-slider swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($portofolio as $portofolio) { ?>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                            <div class="text-center img-center">
                                <img src="https://admin.progimedia.com/upload/webdevelopment/<?= $portofolio->image; ?>"
                                    class="layanan-img img-fluid" alt="">
                                <div class="brand-name">
                                    <p class="section-desk-text"><?= $portofolio->title; ?></p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        <?php } ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="web-developer">
    <img class="img-fluid backgrd" src="<?= base_url(); ?>assets/images/web-developer/background-web-dev.png" alt="">
    <div class="container web-container">
        <div class="section-header" data-aos="fade-up" data-aos-duration="2000">
            <p class="web">Web Development</p>
        </div>
        <div class="row justify-content-center row-content-top">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-duration="2000">
                        <h3><?= $peranweb->title; ?></h3>
                        <p class="section-desk-text mt-4"><?= $peranweb->deskripsi; ?></p>
                        <div class="advantages mt-4">
                            <?php $html = '"' . $peranweb->list . '"';
                            $count = substr_count($html, '<li>');                            ?>
                            <div class="img-polygon">
                                <?php for ($i = 0; $i < $count; $i++) { ?>
                                <img class="img1" src="<?= base_url(); ?>assets/images/social-media/polygon.png"
                                    alt=""><br>

                                <?php } ?>
                            </div>
                            <?= $peranweb->list; ?>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 text-center" data-aos="fade-up"
                        data-aos-duration="2000">
                        <h2 class="section-img">
                            <img src="<?= base_url(); ?>assets/images/web-developer/img-middle-side.png" alt=""
                                class="img-fluid">
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="what-do-you-get">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10" data-aos="fade-up" data-aos-duration="2000">
                <div class="section-header">
                    <p>Apa yang kamu dapatkan?</p>
                    <span>Berikut merupakan keuntungan yang akan kamu dapatkan jika kamu bergabung bersama kami untuk
                        mulai mengembangkan bisnis anda.</span>
                </div>
            </div>
        </div>
        <div class="row mx-auto justify-content-center text-center mb-5">
            <div class="col-lg-7">
                <div class="row mx-auto justify-content-center text-center mb-5">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4" data-aos="fade-up" data-aos-duration="2000">
                        <div class="logo-design">
                            <div class="logo-section-image">
                                <img class="img-fluid" src="<?= base_url(); ?>assets/images/web-developer/diamond.png"
                                    alt="">
                            </div>
                            <div class="logo-section-text">
                                <p>Logo Orisinil</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4" data-aos="fade-up" data-aos-duration="2000">
                        <div class="logo-design">
                            <div class="logo-section-image">
                                <img class="img-fluid"
                                    src="<?= base_url(); ?>assets/images/web-developer/check-orange.png" alt="">
                            </div>
                            <div class="logo-section-text">
                                <p>Nilai Filosofi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-4" data-aos="fade-up" data-aos-duration="2000">
                        <div class="logo-design">
                            <div class="logo-section-image">
                                <img class="img-fluid" src="<?= base_url(); ?>assets/images/web-developer/lamp.png"
                                    alt="">
                            </div>
                            <div class="logo-section-text">
                                <p>Desain Modern</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="service-price d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-5" data-aos="fade-up" data-aos-duration="2000">
                <div class="section-header">
                    <p>Harga Jasa</p>
                    <span>Harga Jasa Pembuatan Website</span>
                </div>
            </div>
        </div>
        <div class="top-table-jasa" data-aos="fade-up" data-aos-duration="2000">
            <div class="row justify-content-center text-center">
                <div class="col-lg-3 col-md-2 col-sm-2 col-2 col-jasa">
                    <div class="header-bdr ">
                        <p></p>
                    </div>
                    <div class="kosong">
                        <p></p>
                    </div>
                    <div class="price d-flex align-items-center justify-content-center">
                        <p>Harga</p>
                    </div>
                    <div class="page d-flex align-items-center justify-content-center">
                        <p>Pembuatan halaman website</p>
                    </div>
                    <div class="domain d-flex align-items-center justify-content-center">
                        <p>Domain</p>
                    </div>
                    <div class="hosting d-flex align-items-center justify-content-center">
                        <p>Hosting (Server)</p>
                    </div>
                    <div class="ssl d-flex align-items-center justify-content-center">
                        <p>SSL (https)</p>
                    </div>
                    <div class="setup-free d-flex align-items-center justify-content-center">
                        <p>Setup Free</p>
                    </div>
                    <div class="work-duration d-flex align-items-center justify-content-center">
                        <p>Lama pengerjaan</p>
                    </div>
                </div>
                <?php foreach ($price_web as $price_web) { ?>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 col-jasa">
                    <div class="header-bdr bdr">
                        <p><?= $price_web->nama; ?></p>
                    </div>
                    <div class="kosong">
                        <p></p>
                    </div>
                    <div class="price d-flex align-items-center justify-content-center">
                        <p>Rp <?= number_format($price_web->harga, 0, ",", "."); ?>,-</p>
                    </div>
                    <div class="page d-flex align-items-center justify-content-center">
                        <p><?= $price_web->halaman; ?> Halaman</p>
                    </div>
                    <div class="domain d-flex align-items-center justify-content-center">
                        <p><?= $price_web->domain; ?></p>
                    </div>
                    <div class="hosting d-flex align-items-center justify-content-center">
                        <p>
                            <?php if ($price_web->hosting == 'Y') { ?>
                            <img class="img-fluid ckls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-brosur/check.png" alt="">
                            <?php } else { ?>

                            <img class="img-fluid cls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-company/icon-close.png"
                                alt="">
                            <?php } ?>
                        </p>
                    </div>
                    <div class="ssl d-flex align-items-center justify-content-center">
                        <p>
                            <?php if ($price_web->ssl_https == 'Y') { ?>
                            <img class="img-fluid ckls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-brosur/check.png" alt="">
                            <?php } else { ?>
                            <img class="img-fluid cls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-company/icon-close.png"
                                alt="">
                            <?php } ?>
                        </p>
                    </div>
                    <div class="setup-free d-flex align-items-center justify-content-center">
                        <p><a href="" class="free">Free</a></p>
                    </div>
                    <div class="work-duration d-flex align-items-center justify-content-center">
                        <p><?= $price_web->lama_pengerjaan; ?> Hari</p>
                    </div>
                    <!-- <div class="button">
                        <p><a href=""  class="b-paket">Pilih Paket</a></p>
                    </div> -->
                </div>
                <?php } ?>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 col-jasa">
                    <div class="header-bdr bdr">
                        <p>CUSTOM</p>
                    </div>
                    <div class="kosong">
                        <p></p>
                    </div>
                    <div class="price d-flex align-items-center justify-content-center">
                        <p><a href="" class="info">Info lebih lanjut</a></p>
                    </div>
                    <div class="page d-flex align-items-center justify-content-center">

                    </div>
                    <div class="domain d-flex align-items-center justify-content-center">

                    </div>
                    <div class="hosting d-flex align-items-center justify-content-center">

                    </div>
                    <div class="ssl d-flex align-items-center justify-content-center">

                    </div>
                    <div class="setup-free d-flex align-items-center justify-content-center">

                    </div>
                    <div class="work-duration d-flex align-items-center justify-content-center">

                    </div>
                    <!-- <div class="button">
                        <p><a href="" class="b-paket">Pilih Paket</a></p> 
                    </div> -->
                </div>


            </div>
            <!-- Button pilih paket -->
            <div class="row justify-content-center text-center">
                <div class="col-lg-3 col-md-2 col-sm-2 col-2 col-jasa">
                    <div class="button d-flex align-items-center justify-content-center">

                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 col-jasa">
                    <div class="button d-flex align-items-center justify-content-center">
                        <p><a href="<?= $waLink; ?>" target="_blank" class="b-paket">Pilih Paket</a></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 col-jasa">
                    <div class="button d-flex align-items-center justify-content-center">
                        <p><a href="<?= $waLink; ?>" target="_blank" class="b-paket">Pilih Paket</a></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 col-jasa">
                    <div class="button d-flex align-items-center justify-content-center">
                        <p><a href="<?= $waLink; ?>" target="_blank" class="b-paket">Pilih Paket</a></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 col-jasa">
                    <div class="button d-flex align-items-center justify-content-center">
                        <p><a href="<?= $waLink; ?>" target="_blank" class="b-paket">Pilih Paket</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>