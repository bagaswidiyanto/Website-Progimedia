<?php
$numberAPI = $website->phone;
$n1API = substr($numberAPI, 1);
$apiWa = $n1API;

$waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20Sahabat%20$website->name..%21%0APesan%20anda%20sudah%20kami%20terima%0AKami%20akan%20merespons%20pesan%20anda%20segera%0ATerimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
?>

<div class="services-area-home" id="services-area-home">
    <!-- <img src="<?= base_url(); ?>assets/images/social-media/Frame 1802.svg" class="img-fluid img-bubble" alt=""> -->
    <div class="container service-area-container">
        <div class="row justify-content-sm-center">
            <div class="col-lg-4 col-md-4 col-sm-12 mb-4 mb-md-0 content-service">
                <div class="single-services mb-30" data-aos="fade-up" data-aos-duration="2000">
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
                <div class="single-services mb-30" data-aos="fade-up" data-aos-duration="2000">
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
                <div class="single-services mb-30" data-aos="fade-up" data-aos-duration="2000">
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
        <img src="<?= base_url(); ?>assets/images/brand-identity/desain-company/background-cp.png"
            class="img-fluid bground" alt="">
        <div class="container many-menus-container">
            <div class="row">
                <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10">
                    <div class="section-text">
                        <div class="title" data-aos="fade-up" data-aos-duration="2000">
                            <h1><?= $compro->title; ?></h1>
                            <!-- <h4>Mengapa logo sangat penting bagi pemasar?</h4> -->
                        </div>
                        <div class="desk mt-2" data-aos="fade-up" data-aos-duration="2000">
                            <?= $compro->deskripsi; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cp-function">
    <div class="container cp-container">
        <!-- <img class="img-fluid img-people" src="<?= base_url(); ?>assets/images/brand-identity/desain-company/Group 8764.png" alt=""> -->
        <div class="row justify-content-center">
            <div class="col-lg-11" data-aos="fade-up" data-aos-duration="2000">
                <div class="section-content-color">
                    <h3>APA FUNGSI DARI COMPANY PROFILE?</h3>
                </div>
            </div>
        </div>
        <div class="img-content">
            <img class="img-fluid img-people"
                src="<?= base_url(); ?>assets/images/brand-identity/desain-company/Group 8764.png" alt="">
        </div>
        <!-- <div class="row cp-row">
          <div class="col-lg-6">
            <div class="box-content">
              <div class="content-cp left">
                <div class="img">
                  <img class="img-fluid" src="<?= base_url(); ?>assets/images/brand-identity/desain-company/icon-people.png" alt="">
                </div>
                  <p>Memberikan gambaran perusahaan</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box-content">
              <div class="content-cp right">
                <div class="img">
                  <img class="img-fluid speaker" src="<?= base_url(); ?>assets/images/brand-identity/desain-company/icon-speaker.png" alt="">
                </div>
                <p>Media branding dan publikasi</p>
              </div>
            </div>
          </div>
        </div> -->
    </div>
    <img class="img-fluid img-bottom" src="<?= base_url(); ?>assets/images/brand-identity/desain-company/img-1.png"
        alt="">
</div>

<div class="slider-bottom">
    <img class="img-fluid bground"
        src="<?= base_url(); ?>assets/images/brand-identity/desain-idcard/background-portofolio.svg" alt=""
        style="top: 20px;">
    <div class="container slider-bottom-container">

        <div class="header-portfolio text-center mt-5">
            <h1>Portofolio</h1>
        </div>

        <div class="row relative justify-content-center">
            <div class="col-lg-10 col-md-10 col-sm-10 col-11">
                <div class="produk-bottom-slider swiper mx-auto">
                    <div class="swiper-wrapper">
                        <?php foreach ($slider_compro as $slider) { ?>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                            <div class="text-center img-center">
                                <img src="https://admin.progimedia.com/upload/company_profile/<?= $slider->image; ?>"
                                    class="img-fluid" alt="">
                                <div class="brand-name mt-4">
                                    <p class="section-desk-text"><?= $slider->name; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- <div id="js-prev1" class="swiper-button-prev"></div> -->
                <!-- <div id="js-next1" class="swiper-button-next"></div> -->
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</div>

<div class="table-company-profile">
    <div class="container">

        <div class="section-text-middle text-center" data-aos="fade-up" data-aos-duration="2000">
            <h1>Investasi terbaik untuk tingkatkan performa bisnismu</h1>
            <h2 class="mb-5">Pricelist Desain Company Profile</h2>
        </div>
        <div class="top-table-jasa" data-aos="fade-up" data-aos-duration="2000">
            <div class="row justify-content-center text-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-4 col-jasa">
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
                    <div class="minim d-flex align-items-center justify-content-center">
                        <p class="">Minimal</p>
                    </div>
                    <div class="revision d-flex align-items-center justify-content-center">
                        <p class="">Jumlah Revisi</p>
                    </div>
                    <div class="duration d-flex align-items-center justify-content-center">
                        <p class="">Lama Pengerjaan</p>
                    </div>
                    <div class="master-files d-flex align-items-center justify-content-center">
                        <p class="">Master File Editable</p>
                    </div>
                    <div class="export d-flex align-items-center justify-content-center">
                        <p class="">Export PNG/JPG/PDF</p>
                    </div>
                    <div class="materi d-flex align-items-center justify-content-center">
                        <p class=" pdg-s">Pembuatan Materi dalam Bahasa Indonesia</p>
                    </div>
                    <div class="img-editing d-flex align-items-center justify-content-center">
                        <p class="">Image Editing</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3 col-4 col-jasa col-border-rl">
                    <div class="header-bdr bdr">
                        <p><?= $service_compro->nama; ?></p>
                    </div>
                    <div class="kosong">
                        <p></p>
                    </div>

                    <div class="price d-flex align-items-center justify-content-center">
                        <div class="pdc">
                            <p>Rp. <?= number_format($service_compro->harga, 0, ",", "."); ?>,-</p>
                        </div>
                    </div>
                    <div class="minim  d-flex align-items-center justify-content-center">
                        <p><?= $service_compro->minimal; ?> Halaman</p>
                    </div>
                    <div class="revision  d-flex align-items-center justify-content-center">
                        <p><?= $service_compro->revisi; ?>x</p>
                    </div>
                    <div class="duration d-flex align-items-center justify-content-center">
                        <p><?= $service_compro->pengerjaan; ?> hari</p>
                    </div>
                    <div class="master-files  d-flex align-items-center justify-content-center">
                        <p>
                            <?php if ($service_compro->file_master == 'Y') { ?>
                            <img class="img-fluid ckls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-brosur/check.png" alt="">
                            <?php } else { ?>

                            <img class="img-fluid cls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-company/icon-close.png"
                                alt="">
                            <?php } ?>
                        </p>
                    </div>
                    <div class="export d-flex align-items-center justify-content-center">
                        <p>
                            <?php if ($service_compro->export_file == 'Y') { ?>
                            <img class="img-fluid ckls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-brosur/check.png" alt="">
                            <?php } else { ?>

                            <img class="img-fluid cls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-company/icon-close.png"
                                alt="">
                            <?php } ?>
                        </p>
                    </div>
                    <div class="materi d-flex align-items-center justify-content-center">
                        <p>
                            <?php if ($service_compro->language == 'Y') { ?>
                            <img class="img-fluid ckls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-brosur/check.png" alt="">
                            <?php } else { ?>

                            <img class="img-fluid cls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-company/icon-close.png"
                                alt="">
                            <?php } ?>
                        </p>
                    </div>
                    <div class="img-editing  d-flex align-items-center justify-content-center">
                        <p>
                            <?php if ($service_compro->image_edit == 'Y') { ?>
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
                <div class="col-lg-2 col-md-3 col-sm-3 col-4 col-jasa">
                    <div class="header-bdr bdr">
                        <p>PREMIUM</p>
                    </div>
                    <div class="kosong">
                        <p></p>
                    </div>

                    <div class="price d-flex align-items-center justify-content-center">
                        <div class="pdc">
                            <p class="pdg"><a href="">Call Us</a></p>
                        </div>
                    </div>
                    <div class="minim  d-flex align-items-center justify-content-center">
                        <p class=""></p>
                    </div>
                    <div class="revision  d-flex align-items-center justify-content-center">
                        <p class=""></p>
                    </div>
                    <div class="duration d-flex align-items-center justify-content-center">
                        <p class=""></p>
                    </div>
                    <div class="master-files  d-flex align-items-center justify-content-center">
                        <p class=""></p>
                    </div>
                    <div class="export d-flex align-items-center justify-content-center">
                        <p class=""></p>
                    </div>
                    <div class="materi d-flex align-items-center justify-content-center">
                        <p class=""></p>
                    </div>
                    <div class="img-editing  d-flex align-items-center justify-content-center">
                        <p class=""></p>
                    </div>
                </div>


            </div>
            <!-- Button pilih paket -->
            <div class="row justify-content-center text-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-4 col-jasa">
                    <div class="button d-flex align-items-center justify-content-center">
                        <p class=""></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-4 col-jasa col-width">
                    <div class="button d-flex align-items-center justify-content-center">
                        <p class=""><a href="<?= $waLink; ?>" target="_blank" class="b-paket">Pilih
                                Paket</a></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-4 col-jasa col-width">
                    <div class="button d-flex align-items-center justify-content-center">
                        <p class=""><a href="<?= $waLink; ?>" target="_blank" class="b-paket">Pilih
                                Paket</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>