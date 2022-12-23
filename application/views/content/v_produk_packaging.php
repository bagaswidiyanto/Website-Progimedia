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
    <div class="packaging many-menus">
        <img src="<?= base_url(); ?>assets/images/produk-packaging/background-produk.png" class="img-fluid bground"
            alt="">
        <!-- <img src="<?= base_url(); ?>assets/images/undagan-digital/people-side.png" class="img-fluid people-side" alt=""> -->
        <div class="container many-menus-container">
            <div class="row">
                <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10">
                    <div class="section-text" data-aos="fade-up" data-aos-duration="2000">
                        <div class="title">
                            <h1>PRODUK PACKAGING</h1>
                            <!-- <h4>Mengapa logo sangat penting bagi pemasar?</h4> -->
                        </div>
                        <p><?= $packaging->title; ?></p>
                        <div class="desk mt-5">
                            <?= $packaging->deskripsi; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="produk-packaging">
    <img class="img-fluid bg-people" src="<?= base_url(); ?>assets/images/produk-packaging/people-produk.png" alt="">
    <div class="container">
        <div class="section-content-color text-center mb-5" data-aos="fade-up" data-aos-duration="2000">
            <h3><?= $produk_text->title; ?></h3>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-9">
                <div class="list-content">
                    <div class="content  d-flex align-items-center" data-aos="fade-up" data-aos-duration="2000">
                        <img class="img-fluid"
                            src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                            alt="">
                        <div class="text-cnt">
                            <h5><?= $produk_text->content_1; ?></h5>
                            <p><?= $produk_text->content_2; ?></p>
                        </div>
                    </div>
                    <div class="content d-flex align-items-center" data-aos="fade-up" data-aos-duration="2000">
                        <img class="img-fluid"
                            src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                            alt="">
                        <div class="text-cnt">
                            <h5><?= $produk_text->content_3; ?></h5>
                            <p><?= $produk_text->content_4; ?></p>
                        </div>
                    </div>
                    <div class="content  d-flex align-items-center" data-aos="fade-up" data-aos-duration="2000">
                        <img class="img-fluid"
                            src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                            alt="">
                        <div class="text-cnt">
                            <h5><?= $produk_text->content_5; ?></h5>
                            <p><?= $produk_text->content_6; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="slider-bottom">
    <img class="img-fluid bground" src="<?= base_url(); ?>assets/images/social-media/background-paket.png" alt="">
    <div class="container slider-bottom-container">

        <div class="row relative justify-content-center">
            <div class="col-lg-10">
                <div class="produk-bottom-slider swiper mx-auto">
                    <div class="swiper-wrapper">
                        <?php foreach ($produk_slide as $slide) { ?>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                            <div class="text-center img-center">
                                <img src="https://admin.progimedia.com/upload/produk_package/<?= $slide->image; ?>"
                                    class="img-fluid" alt="">
                                <div class="brand-name mt-4">
                                    <p class="section-desk-text"><?= $slide->name; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div id="js-prev1" class="swiper-button-prev"></div>
                <div id="js-next1" class="swiper-button-next"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
    <div class="call-me">
        <div class="container call-me-container">
            <div class="text-center" data-aos="fade-up" data-aos-duration="2000">
                <h2>Hubungi Kami</h2>
                <p>untuk mendapatkan penawaran harga</p>
            </div>
            <?php
            $telpon = $website->telp;
            $t1 = substr($telpon, 1, 3);
            $t2 = substr($telpon, 4);
            $telp = $t1 . ' ' . $t2;

            $number = $website->phone;
            $n1 = substr($number, 0, 4);
            $n2 = substr($number, 4, 4);
            $n3 = substr($number, 8, 4);
            $wa = $n1 . '-' . $n2 . '-' . $n3;
            ?>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-5 col-md-5 col-sm-6 col-6" data-aos="fade-right" data-aos-duration="2000">
                    <div class="box-col" style="background: #377AB7;">
                        <img class="img-fluid" src="<?= base_url(); ?>assets/images/produk-packaging/icon-phone.png"
                            alt="">
                        <p>(+62) <?= $telp; ?></p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6 col-6" data-aos="fade-left" data-aos-duration="2000">
                    <div class="box-col" style="background: #48B737;">
                        <img class="img-fluid" src="<?= base_url(); ?>assets/images/produk-packaging/icon-wa.png"
                            alt="">
                        <p><?= $wa; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>