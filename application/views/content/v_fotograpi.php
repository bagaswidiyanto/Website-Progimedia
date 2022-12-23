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
        <img src="<?= base_url(); ?>assets/images/photography/background-photograpi.png" class="img-fluid bground"
            alt="">
        <div class="container many-menus-container">
            <div class="row">
                <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10">
                    <div class="section-text">
                        <div class="title" data-aos="fade-up" data-aos-duration="2000">
                            <h1><?= $fotograpi->title; ?></h1>
                            <!-- <h4>Mengapa logo sangat penting bagi pemasar?</h4> -->
                        </div>
                        <div class="desk mt-5" data-aos="fade-up" data-aos-duration="2000">
                            <?= $fotograpi->deskripsi; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="slider-photography">
    <img class="img-fluid bground" src="<?= base_url(); ?>assets/images/photography/background-slider.png" alt="">
    <div class="container slider-photography-container">

        <div class="header-portfolio text-center mt-5 mb-5" data-aos="fade-up" data-aos-duration="2000">
            <h1>Portofolio</h1>
        </div>

        <div class="row relative justify-content-center">
            <div class="col-lg-10 col-md-10 col-sm-10 col-11">
                <div class="produk-bottom-slider swiper mx-auto">
                    <div class="swiper-wrapper">
                        <?php foreach ($slider_foto as $slider_foto) { ?>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                            <div class="text-center img-center">
                                <img src="https://admin.progimedia.com/upload/potografi_slider/<?= $slider_foto->image; ?>"
                                    class="img-fluid" alt="" title="<?= $slider_foto->name; ?>">
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

    </div>
</div>

<div class="table-photography">
    <img class="img-fluid bground" src="<?= base_url(); ?>assets/images/social-media/background-paket2.png" alt="">
    <div class="container photography-container">

        <div class="section-text-middle text-center" data-aos="fade-up" data-aos-duration="2000">
            <h1>Investasi terbaik untuk tingkatkan performa bisnismu</h1>
            <h2 class="mb-5">Pricelist Foto Produk</h2>
        </div>

        <div class="top-table-jasa">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-p" data-aos="fade-up" data-aos-duration="2000">
                    <div class="header-text d-flex align-items-center justify-content-center"
                        style="background: #000D20; ">
                        <p>LIST PAKET</p>
                    </div>
                    <div class="header-text tp d-flex align-items-center justify-content-center"
                        style="background: #333D4D; ">
                        <p>LIST PAKET</p>
                    </div>
                    <div class="katalog row-grey">
                        <div class="row ">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="green d-flex align-items-center justify-content-center">
                                    <img class="img-fluid img-color"
                                        src="<?= base_url(); ?>assets/images/photography/green.png" alt="">
                                    <div class="picture-content text-center">
                                        <p>Katalog</p>
                                        <h3>Rp 35K/foto</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-5 col-content">
                                <div class="content">
                                    <img class="img-fluid check"
                                        src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                                        alt="">
                                    <p>Foto produk dengan berbagai pilihan warna background warna polos</p>
                                </div>
                                <div class="content">
                                    <img class="img-fluid check"
                                        src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                                        alt="">
                                    <p>Tanpa minimal pembelian</p>
                                </div>
                                <div class="content">
                                    <img class="img-fluid check"
                                        src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                                        alt="">
                                    <p>Gratis Steaming</p>
                                </div>
                                <div class="content">
                                    <img class="img-fluid check"
                                        src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                                        alt="">
                                    <p>Gratis Penyimpanan File</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                <div class="img-side">
                                    <img class="img-fluid "
                                        src="<?= base_url(); ?>assets/images/photography/img-side-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="creative row-white">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="red d-flex align-items-center justify-content-center">
                                    <img class="img-fluid img-color"
                                        src="<?= base_url(); ?>assets/images/photography/red.png" alt="">
                                    <div class="picture-content text-center">
                                        <p>Creative Popular</p>
                                        <h3>Rp 40K/foto</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-5 col-content">
                                <div class="content">
                                    <img class="img-fluid check"
                                        src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                                        alt="">
                                    <p>Foto produk dengan berbagai pilihan warna background warna polos</p>
                                </div>
                                <div class="content">
                                    <img class="img-fluid check"
                                        src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                                        alt="">
                                    <p>Tanpa minimal pembelian</p>
                                </div>
                                <div class="content">
                                    <img class="img-fluid check"
                                        src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                                        alt="">
                                    <p>Gratis Steaming</p>
                                </div>
                                <div class="content">
                                    <img class="img-fluid check"
                                        src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                                        alt="">
                                    <p>Gratis Penyimpanan File</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                <div class="img-side">
                                    <img class="img-fluid "
                                        src="<?= base_url(); ?>assets/images/photography/img-side-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="food row-white">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="blue d-flex align-items-center justify-content-center">
                                    <img class="img-fluid img-color"
                                        src="<?= base_url(); ?>assets/images/photography/blue.png" alt="">
                                    <div class="picture-content text-center">
                                        <p>Food & Baverage</p>
                                        <h3>Rp 45K/foto</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-5 col-content">
                                <div class="content">
                                    <img class="img-fluid check"
                                        src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                                        alt="">
                                    <p>Foto produk dengan berbagai pilihan warna background warna polos</p>
                                </div>
                                <div class="content">
                                    <img class="img-fluid check"
                                        src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                                        alt="">
                                    <p>Tanpa minimal pembelian</p>
                                </div>
                                <div class="content">
                                    <img class="img-fluid check"
                                        src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                                        alt="">
                                    <p>Gratis Steaming</p>
                                </div>
                                <div class="content">
                                    <img class="img-fluid check"
                                        src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                                        alt="">
                                    <p>Gratis Penyimpanan File</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                <div class="img-side">
                                    <img class="img-fluid "
                                        src="<?= base_url(); ?>assets/images/photography/img-side-3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="model row-grey">
                        <div class="row ">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                <div class="yellow d-flex align-items-center justify-content-center">
                                    <img class="img-fluid img-color"
                                        src="<?= base_url(); ?>assets/images/photography/yellow.png" alt="">
                                    <div class="picture-content text-center">
                                        <p>Foto Model</p>
                                        <h3>Rp 125K/foto</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-5 col-content">
                                <div class="content">
                                    <img class="img-fluid check"
                                        src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                                        alt="">
                                    <p>Foto produk dengan berbagai pilihan warna background warna polos</p>
                                </div>
                                <div class="content">
                                    <img class="img-fluid check"
                                        src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                                        alt="">
                                    <p>Tanpa minimal pembelian</p>
                                </div>
                                <div class="content">
                                    <img class="img-fluid check"
                                        src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                                        alt="">
                                    <p>Gratis Steaming</p>
                                </div>
                                <div class="content">
                                    <img class="img-fluid check"
                                        src="<?= base_url(); ?>assets/images/brand-identity/desain-katalog-produk/check-g.png"
                                        alt="">
                                    <p>Gratis Penyimpanan File</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                <div class="img-side">
                                    <img class="img-fluid "
                                        src="<?= base_url(); ?>assets/images/photography/img-side-4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>