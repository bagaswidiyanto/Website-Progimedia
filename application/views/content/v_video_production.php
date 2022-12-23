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
    <div class="many-menus">
        <img src="<?= base_url(); ?>assets/images/video-production/background-video-production.png"
            class="img-fluid bground" alt="">
        <div class="container many-menus-container">
            <div class="row">
                <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10">
                    <div class="section-text">
                        <div class="title" data-aos="fade-up" data-aos-duration="2000">
                            <h1><?= $video_pro->title; ?></h1>
                            <!-- <h4>Mengapa logo sangat penting bagi pemasar?</h4> -->
                        </div>
                        <div class="desk mt-2" data-aos="fade-up" data-aos-duration="2000">
                            <?= $video_pro->deskripsi; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="video-production">
    <div class="container vp-container">
        <!-- <img class="img-fluid img-people" src="<?= base_url(); ?>assets/images/brand-identity/desain-company/Group 8764.png" alt=""> -->
        <div class="section-content-color" data-aos="fade-up" data-aos-duration="2000">
            <h3>Beberapa manfaat bila Anda membuat video sebagai sarana promosi produk Anda </h3>
        </div>

        <div class="vp-area">
            <img class="img-fluid bg-slider"
                src="<?= base_url(); ?>assets/images/video-production/background-slider.png" alt="">
            <div class="video-production-slider swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($video_slider as $video) { ?>
                    <div class="swiper-slide">
                        <div class="video-production-item">
                            <img class="img-fluid"
                                src="https://admin.progimedia.com/upload/vid_slider/<?= $video->image; ?>" alt="">
                        </div>
                    </div>
                    <?php } ?>

                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div id="js-prev1" class="swiper-button-prev"></div>
            <div id="js-next1" class="swiper-button-next"></div>
        </div>

    </div>
    <img class="img-fluid img-bottom" src="<?= base_url(); ?>assets/images/brand-identity/desain-company/img-1.png"
        alt="">
</div>

<div class="table-video-production">
    <div class="container">
        <div class="section-text-middle text-center" data-aos="fade-up" data-aos-duration="2000">
            <h1>Investasi terbaik untuk tingkatkan performa bisnismu</h1>
            <h2 class="mb-5">Pricelist Video Production</h2>
        </div>
        <div class="top-table-jasa">
            <div class="top-text text-center mb-5" data-aos="fade-up" data-aos-duration="2000">
                <p>HARGA PRODUK PER VIDEO</p>
            </div>
            <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-duration="2000">
                <div class="col-lg-3 col-md-3 col-sm-3 col-3 col-jasa">
                    <div class="header-bdr bdr">
                        <p>SERVICES</p>
                    </div>
                    <div class="kosong">
                        <p></p>
                    </div>
                    <div class="price d-flex align-items-center justify-content-center">
                        <div class="pdc">
                            <p class="pdg">Harga</p>
                        </div>
                    </div>
                    <div class="platform d-flex align-items-center justify-content-center">
                        <p>Platform Sosmed</p>
                    </div>
                    <div class="duration d-flex align-items-center justify-content-center">
                        <p>Durasi Video</p>
                    </div>
                    <div class="infografis d-flex align-items-center justify-content-center">
                        <p>Free Infografis</p>
                    </div>
                    <div class="free-copyright d-flex align-items-center justify-content-center">
                        <p>Backsound Free Copyright</p>
                    </div>
                    <div class="work-duration d-flex align-items-center justify-content-center">
                        <p>Lama Pengerjaan</p>
                    </div>
                    <div class="revision d-flex align-items-center justify-content-center">
                        <p>Jumlah Revisi</p>
                    </div>
                    <div class="aset d-flex align-items-center justify-content-center">
                        <p>Aset Free Copyright</p>
                    </div>
                    <div class="cover-video d-flex align-items-center justify-content-center">
                        <p>Cover Video (Grafis)</p>
                    </div>
                    <div class="voice-over d-flex align-items-center justify-content-center">
                        <p>Voice Over</p>
                    </div>
                    <div class="talent d-flex align-items-center justify-content-center">
                        <p>Talent</p>
                    </div>
                    <div class="full-service d-flex align-items-center justify-content-center">
                        <p>Full Service (shot, editing, sound, dll)</p>
                    </div>
                </div>
                <?php foreach ($video_price as $price) { ?>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 col-jasa">
                    <div class="header-bdr bdr">
                        <p><?= $price->nama; ?></p>
                    </div>
                    <div class="kosong">
                        <p></p>
                    </div>
                    <div class="price d-flex align-items-center justify-content-center">
                        <div class="pdc">
                            <p class="pdg">Rp. <?= number_format($price->harga, 0, ",", "."); ?>,-</p>
                        </div>
                    </div>
                    <div class="platform d-flex align-items-center justify-content-center">
                        <p><?= $price->platform_sosmed; ?></p>
                    </div>
                    <div class="duration d-flex align-items-center justify-content-center">
                        <p><?= $price->durasi; ?> Detik ++</p>
                    </div>
                    <div class="infografis d-flex align-items-center justify-content-center">
                        <p>
                            <?php if ($price->free_infografis == 'Y') { ?>
                            <img class="img-fluid ckls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-brosur/check.png" alt="">
                            <?php } else { ?>

                            <img class="img-fluid cls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-company/icon-close.png"
                                alt="">
                            <?php } ?>
                        </p>
                    </div>
                    <div class="free-copyright d-flex align-items-center justify-content-center">
                        <p>
                            <?php if ($price->free_backgroundNCS == 'Y') { ?>
                            <img class="img-fluid ckls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-brosur/check.png" alt="">
                            <?php } else { ?>

                            <img class="img-fluid cls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-company/icon-close.png"
                                alt="">
                            <?php } ?>
                        </p>
                    </div>
                    <div class="work-duration d-flex align-items-center justify-content-center">
                        <p><?= $price->pengerjaan; ?> hari</p>
                    </div>
                    <div class="revision d-flex align-items-center justify-content-center">
                        <p><?= $price->revisi; ?>x</p>
                    </div>
                    <div class="aset d-flex align-items-center justify-content-center">
                        <p>
                            <?php if ($price->asset_free == 'Y') { ?>
                            <img class="img-fluid ckls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-brosur/check.png" alt="">
                            <?php } else { ?>

                            <img class="img-fluid cls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-company/icon-close.png"
                                alt="">
                            <?php } ?>
                        </p>
                    </div>
                    <div class="cover-video d-flex align-items-center justify-content-center">
                        <p>
                            <?php if ($price->cover_video == 'Y') { ?>
                            <img class="img-fluid ckls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-brosur/check.png" alt="">
                            <?php } else { ?>

                            <img class="img-fluid cls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-company/icon-close.png"
                                alt="">
                            <?php } ?>
                        </p>
                    </div>
                    <div class="voice-over d-flex align-items-center justify-content-center">
                        <p>
                            <?php if ($price->voice_over == 'Y') { ?>
                            <img class="img-fluid ckls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-brosur/check.png" alt="">
                            <?php } else { ?>

                            <img class="img-fluid cls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-company/icon-close.png"
                                alt="">
                            <?php } ?>
                        </p>
                    </div>
                    <div class="talent d-flex align-items-center justify-content-center">
                        <p>
                            <?php if ($price->talent == 'Y') { ?>
                            <img class="img-fluid ckls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-brosur/check.png" alt="">
                            <?php } else { ?>

                            <img class="img-fluid cls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-company/icon-close.png"
                                alt="">
                            <?php } ?>
                        </p>
                    </div>
                    <div class="full-service d-flex align-items-center justify-content-center">
                        <p>
                            <?php if ($price->fullservice == 'Y') { ?>
                            <img class="img-fluid ckls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-brosur/check.png" alt="">
                            <?php } else { ?>

                            <img class="img-fluid cls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-company/icon-close.png"
                                alt="">
                            <?php } ?>
                        </p>
                    </div>
                </div>
                <?php } ?>

            </div>
            <!-- Button pilih paket -->
            <div class="row justify-content-center text-center">
                <div class="col-lg-3 col-md-3 col-sm-3 col-3 col-jasa">
                    <div class="button d-flex align-items-center justify-content-center">
                        <p class=""></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 col-jasa col-width">
                    <div class="button d-flex align-items-center justify-content-center">
                        <p class=""><a href="<?= $waLink; ?>" target="_blank" class="b-paket">Pilih
                                Paket</a></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 col-jasa col-width">
                    <div class="button d-flex align-items-center justify-content-center">
                        <p class=""><a href="<?= $waLink; ?>" target="_blank" class="b-paket">Pilih
                                Paket</a></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 col-jasa col-width">
                    <div class="button d-flex align-items-center justify-content-center">
                        <p class=""><a href="<?= $waLink; ?>" target="_blank" class="b-paket">Pilih
                                Paket</a></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 col-jasa col-width">
                    <div class="button d-flex align-items-center justify-content-center">
                        <p class=""><a href="<?= $waLink; ?>" target="_blank" class="b-paket">Pilih
                                Paket</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>