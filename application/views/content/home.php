<?php
$numberAPI = $website->phone;
$n1API = substr($numberAPI, 1);
$apiWa = $n1API;

$waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20Sahabat%20$website->name..%21%0APesan%20anda%20sudah%20kami%20terima%0AKami%20akan%20merespons%20pesan%20anda%20segera%0ATerimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
?>

<!-- ? services-area -->
<div class="services-area-home" id="services-area-home 123">
    <img src="<?= base_url(); ?>assets/images/about/about-home.png" alt="" class="img-progi-person-home">
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
            <div class="col-lg-4 col-md-4 col-sm-12  mb-4 mb-md-0 content-service">
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
        <div class="about-us-home">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-header" data-aos="fade-up" data-aos-duration="2000">
                        <h2>About</h2>
                        <p>Kami hadir untuk memberikan solusi</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-duration="2000">
                    <h2 class="section-img">
                        <img src="https://admin.progimedia.com/upload/home/<?= $home->background; ?>" alt=""
                            class="img-fluid">
                    </h2>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="1400">
                    <div class="progi-desk-home"> <?= $home->caption; ?> </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="service-home"
    style="background-image: url('<?= base_url(); ?>assets/images/service-background.png'); background-repeat: no-repeat; background-size: cover;">
    <div class="container service-home-container">

        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <header class="section-header" data-aos="fade-up" data-aos-duration="2000">
                    <h2>Services</h2>
                    <p>Apa yang kami lakukan?</p>
                    <br>
                    <span class="section-desk-text">Tingkatkan performa bisnis kamu dengan layanan - layanan yang kami
                        berikan mulai dari Desain Brand hingga Social Media Managament.</span>
                </header>
            </div>
        </div>

        <div class="row justify-content-center d-none d-sm-flex">
            <?php
            $i = 1;
            foreach ($this->db->query("SELECT * FROM tbl_services ORDER BY id ASC")->result() as $serviceshome) {
            ?>
            <?php if ($i % 2 == 0) { ?>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="2000">
                <div class="service-img">
                    <img src="https://admin.progimedia.com/upload/services/<?= $serviceshome->image; ?>" alt=""
                        class="img-fluid">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="2000">
                <div class="first-service-title">
                    <span><?= $serviceshome->title; ?></span>
                </div>
                <p class="single-service-title section-desk-text"><?= $serviceshome->description; ?></p>
                <div class="service-button">
                    <a href="<?= $waLink; ?>" target="_blank">
                        <p>Konsultasi Gratis</p>
                    </a>
                </div>
            </div>
            <hr class="hr">
            <?php } else { ?>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="2000">
                <div class="first-service-title">
                    <span><?= $serviceshome->title; ?></span>
                </div>
                <p class="single-service-title section-desk-text"><?= $serviceshome->description; ?></p>
                <div class="service-button">
                    <a href="<?= $waLink; ?>" target="_blank">
                        <p>Konsultasi Gratis</p>
                    </a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="2000">
                <div class="service-img">
                    <img src="https://admin.progimedia.com/upload/services/<?= $serviceshome->image; ?>" alt=""
                        class="img-fluid">
                </div>
            </div>
            <hr class="hr">
            <?php } ?>
            <?php
                $i++;
            }
            ?>
        </div>
        <div class="row justify-content-center d-flex d-sm-none">
            <?php
            $i = 1;
            foreach ($this->db->query("SELECT * FROM tbl_services ORDER BY id ASC")->result() as $serviceshome) {
            ?>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="2000">
                <div class="service-img">
                    <img src="https://admin.progimedia.com/upload/services/<?= $serviceshome->image; ?>" alt=""
                        class="img-fluid">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="2000">
                <div class="first-service-title">
                    <span><?= $serviceshome->title; ?></span>
                </div>
                <p class="single-service-title section-desk-text"><?= $serviceshome->description; ?></p>
                <div class="service-button">
                    <a href="<?= $waLink; ?>" target="_blank">
                        <p>Konsultasi Gratis</p>
                    </a>
                </div>
            </div>
            <hr class="hr">

            <?php
                $i++;
            }
            ?>
        </div>



    </div>
</section>

<section class="pricelist-home">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center text-center">
            <div class="col-lg-7">
                <header class="section-header" data-aos="fade-up" data-aos-duration="2000">
                    <h2>Pricelist Social Media Design</h2>
                    <p>Investasi terbaik untuk tingkatkan performa bisnismu</p>
                </header>
            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 content-pricelist">
                <div class="card card-pricelist">
                    <img class="card-img-top" src="<?= base_url(); ?>assets/images/silver.png" alt="Card image"
                        style="width:100%">
                    <div class="card-body">
                        <?= $silver->list_package; ?>

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
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 content-pricelist">
                <div class="card card-pricelist">
                    <img class="card-img-top" src="<?= base_url(); ?>assets/images/gold.png" alt="Card image"
                        style="width:100%">
                    <div class="card-body">
                        <?= $gold->list_package; ?>

                        <div class="original-price">
                            <h4>Rp <?= number_format($gold->price_discount, 0, ",", "."); ?></h4>
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
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mt-4 mt-lg-0 content-pricelist">
                <div class="card card-pricelist">
                    <img class="card-img-top" src="<?= base_url(); ?>assets/images/platinum.png" alt="Card image"
                        style="width:100%">
                    <div class="card-body">
                        <?= $platinum->list_package; ?>

                        <div class="original-price">
                            <h4>Rp <?= number_format($platinum->price_discount, 0, ",", "."); ?></h4>
                        </div>
                        <div class="promo-price">
                            <h3>Rp <?= $platinum->price; ?>K</h3>
                        </div>
                        <div class="mx-auto">
                            <a href="<?= $waLink; ?>" target="_blank">INFO LEBIH LANJUT</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 mt-4 mt-lg-0 content-pricelist">
                <div class="card card-pricelist">
                    <img class="card-img-top" src="<?= base_url(); ?>assets/images/special.png" alt="Card image"
                        style="width:100%">
                    <div class="card-body check">
                        <?php $html = '"' . $special->list_package . '"';
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
                        <?= $special->list_package; ?>
                        <!-- </ul> -->

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
    </div>
</section>

<!-- ======= Portfolio Section ======= -->
<section id="portfolio-home" class="portfolio-home">

    <div class="container">

        <header class="section-header" data-aos="fade-up" data-aos-duration="2000">
            <h2>Portfolio</h2>
            <p>Check our latest work</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <?php foreach ($filter as $filter) { ?>
                    <li data-filter=".filter-<?= $filter->slug ?>"><?= $filter->filter ?></li>
                    <?php } ?>
                    <!-- <li data-filter=".filter-web-design">Web Design</li>
                    <li data-filter=".filter-app-design">App Design</li> -->
                </ul>
            </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-duration="2000">
            <?php foreach ($this->db->query("SELECT * FROM tbl_portofolio_filter")->result() as $fi) { ?>
            <?php $slug = $this->db->query("SELECT * FROM tbl_master_filter_portofolio WHERE id = '" . $fi->id_filter . "'")->row(); ?>
            <div class="col-xs-3 col-lg-3 col-md-3 col-6 portfolio-item filter-<?= $slug->slug ?>">
                <div class="portfolio-wrap">
                    <img src="https://admin.progimedia.com/upload/portofolio/<?= $fi->image; ?>" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4><?= $fi->nama; ?></h4>
                        <div class="portfolio-links">
                            <a href="https://admin.progimedia.com/upload/portofolio/<?= $fi->image; ?>"
                                data-gallery="portfolioGallery" class="portfokio-lightbox">
                                <i class="bi bi-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="col-xs-3 col-lg-3 col-md-3 col-6 portfolio-item filter-video-production">
                <div class="portfolio-wrap">
                    <img src="<?= base_url(); ?>assets/images/Video Youtube.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Video</h4>
                        <div class="portfolio-links">
                            <div class="box-watch-video-portfolio">
                                <a href="<?= base_url(); ?>assets/images/Video Youtube Landscape - Dwilaily Integrated Farm II.mp4"
                                    class="glightbox btn-watch-video align-items-center"><i class="bi bi-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section><!-- End Portfolio Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials-home" class="testimonials-home">

    <div class="container" data-aos="fade-up">

        <header class="section-header" data-aos="fade-up" data-aos-duration="2000">
            <h2>Testimonials</h2>
            <p>Apa kata mereka dengan kami</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-duration="2000">
            <div class="swiper-wrapper">
                <?php foreach ($testimoni as $testimoni) { ?>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="img-top-write d-flex align-items-center mb-2">
                            <img src="https://admin.progimedia.com/upload/testimonials/<?= $testimoni->image; ?>"
                                class="testimonial-img" alt="">
                            <div class="profile">
                                <h3><?= $testimoni->nama; ?></h3>
                                <h4><?= $testimoni->jabatan; ?></h4>
                            </div>
                        </div>
                        <div class="stars">
                            <?php if ($testimoni->rating == 5) { ?>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <?php } else if ($testimoni->rating == 4) { ?>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <?php } else if ($testimoni->rating == 3) { ?>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <?php } else if ($testimoni->rating == 2) { ?>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <?php } else if ($testimoni->rating == 1) { ?>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <?php } else { ?>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <?php } ?>
                        </div>
                        <p><?= $testimoni->testimoni; ?></p>
                    </div>
                </div><!-- End testimonial item -->
                <?php } ?>

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- End Testimonials Section -->

<section id="clients-home" class="clients-home">

    <div class="container" data-aos="fade-up">

        <header class="section-header" data-aos="fade-up" data-aos-duration="2000">
            <p>10.000 + Pelanggang Percaya dengan Progi Media</p>
        </header>

        <div class="clients-slider swiper" data-aos="fade-up" data-aos-duration="2000">
            <div class="swiper-wrapper align-items-center">
                <?php foreach ($client as $client) { ?>
                <div class="swiper-slide"><img src="https://admin.progimedia.com/upload/clients/<?= $client->image; ?>"
                        class="img-fluid" alt="" title="<?= $client->name; ?>"></div>
                <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

</section>