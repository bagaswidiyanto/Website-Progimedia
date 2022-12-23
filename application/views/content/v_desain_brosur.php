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
        <img src="<?= base_url(); ?>assets/images/brand-identity/desain-brosur/background-brosur.png"
            class="img-fluid bground" alt="">
        <div class="container many-menus-container">
            <div class="row">
                <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10">
                    <div class="section-text">
                        <div class="title" data-aos="fade-up" data-aos-duration="2000">
                            <h1><?= $desain_brosur->title; ?></h1>
                            <!-- <h4>Mengapa logo sangat penting bagi pemasar?</h4> -->
                        </div>
                        <div class="desk mt-2" data-aos="fade-up" data-aos-duration="2000">
                            <?= $desain_brosur->deskripsi; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portofolio-desain-brosur">
    <div class="header-portfolio text-center" data-aos="fade-up" data-aos-duration="2000">
        <h1>Portofolio</h1>
    </div>
    <div class="img-portfolio">
        <img class="img-fluid" src="<?= base_url(); ?>assets/images/brand-identity/desain-brosur/portfolio.png" alt="">
    </div>
</div>

<div class="brosur">
    <div class="container">
        <div class="section-text-middle text-center" data-aos="fade-up" data-aos-duration="2000">
            <h1>Investasi terbaik untuk tingkatkan performa bisnismu</h1>
            <h2 class="mb-5">Pricelist Desain Brosur</h2>
        </div>
        <div class="top-table-jasa" data-aos="fade-up" data-aos-duration="2000">
            <div class="row justify-content-center text-center">
                <div class="col-lg-3 col-md-2 col-sm-2 col-2 col-jasa">
                    <div class="header-bdr bdr">
                        <p>SERVICES</p>
                    </div>
                    <div class="kosong">
                        <p></p>
                    </div>
                    <div class="price d-flex align-items-center justify-content-center">
                        <p>Harga</p>
                    </div>
                    <div class="desain-side d-flex align-items-center justify-content-center">
                        <p>Jumlah Sisi Desain</p>
                    </div>
                    <div class="revision d-flex align-items-center justify-content-center">
                        <p>Jumlah Revisi</p>
                    </div>
                    <div class="duration d-flex align-items-center justify-content-center">
                        <p>Lama Pengerjaan</p>
                    </div>
                    <div class="master-files d-flex align-items-center justify-content-center">
                        <p>File Master CDI/AI/EPS</p>
                    </div>
                    <div class="file-export d-flex align-items-center justify-content-center">
                        <p>Ekspor File PNG, JPG, PDF</p>
                    </div>
                </div>
                <?php foreach ($price_brosur as $price) { ?>
                <?php if ($price->nama == 'A5 1s') {
                        $style = 'col-bdr-rl';
                    ?>
                <style>
                .col-bdr-rl {
                    border-right: 1px solid;
                }
                </style>
                <?php } else {
                        $style = ''
                    ?>
                <?php } ?>
                <div class="col-lg-1 col-md-2 col-sm-2 col-2 col-jasa col-width <?= $style; ?>">
                    <div class="header-bdr bdr">
                        <p><?= $price->nama; ?></p>
                    </div>
                    <div class="kosong">
                        <p></p>
                    </div>
                    <div class="price d-flex align-items-center justify-content-center">
                        <p>Rp. <?= number_format($price->harga, 0, ",", "."); ?>,-</p>

                    </div>
                    <div class="desain-side d-flex align-items-center justify-content-center">
                        <p><?= $price->sisi_desain; ?> Halaman</p>
                    </div>
                    <div class="revision d-flex align-items-center justify-content-center">
                        <p><?= $price->revisi; ?>x</p>
                    </div>
                    <div class="duration d-flex align-items-center justify-content-center">
                        <p><?= $price->pengerjaan; ?> hari</p>
                    </div>
                    <div class="master-files d-flex align-items-center justify-content-center">
                        <p>
                            <?php if ($price->file_master == 'Y') { ?>
                            <img class="img-fluid ckls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-brosur/check.png" alt="">
                            <?php } else { ?>
                            <img class="img-fluid cls"
                                src="<?= base_url(); ?>assets/images/brand-identity/desain-company/icon-close.png"
                                alt="">
                            <?php } ?>
                        </p>
                    </div>
                    <div class="file-export d-flex align-items-center justify-content-center">
                        <p>
                            <?php if ($price->export_file == 'Y') { ?>
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
                <div class="col-lg-3 col-md-2 col-sm-2 col-2 col-jasa">
                    <div class="button d-flex align-items-center justify-content-center">
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 col-jasa col-width">
                    <div class="button d-flex align-items-center justify-content-center">
                        <p><a href="<?= $waLink; ?>" target="_blank" class="b-paket">Pilih Paket</a></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 col-jasa col-width">
                    <div class="button d-flex align-items-center justify-content-center">
                        <p><a href="<?= $waLink; ?>" target="_blank" class="b-paket">Pilih Paket</a></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 col-jasa col-width">
                    <div class="button d-flex align-items-center justify-content-center">
                        <p><a href="<?= $waLink; ?>" target="_blank" class="b-paket">Pilih Paket</a></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 col-jasa col-width">
                    <div class="button d-flex align-items-center justify-content-center">
                        <p><a href="<?= $waLink; ?>" target="_blank" class="b-paket">Pilih Paket</a></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 col-jasa col-width">
                    <div class="button d-flex align-items-center justify-content-center">
                        <p><a href="<?= $waLink; ?>" target="_blank" class="b-paket">Pilih Paket</a></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2 col-jasa col-width">
                    <div class="button d-flex align-items-center justify-content-center">
                        <p><a href="<?= $waLink; ?>" target="_blank" class="b-paket">Pilih Paket</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>