<div class="background-image" id="background-image">
    <!-- ? services-area -->content
    <div class="services-area-home" id="services-area-home">
        <div class="container service-area-container">
            <div class="row justify-content-sm-center">
                <div class="col-lg-4 col-md-4 col-sm-12 content-service">
                    <div class="single-services mb-30" data-aos="fade-up" data-aos-delay="200">
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
                <div class="col-lg-4 col-md-4 col-sm-12 content-service">
                    <div class="single-services mb-30" data-aos="fade-up" data-aos-delay="300">
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
                <div class="col-lg-4 col-md-4 col-sm-12 content-service">
                    <div class="single-services mb-30" data-aos="fade-up" data-aos-delay="400">
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
                <div class="row justify-content-center text-center">
                    <div class="col-lg-12">
                        <div class="section-header" data-aos="fade-up" data-aos-delay="200">
                            <h2>Brand Identity & Desain</h2>
                            <p class="section-title2">Ide yang orisinil dan modern untuk branding bisnis anda</p>
                        </div>
                    </div>
                </div>
                <div class="row prg">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                        <p class="section-desk-text">Branding sangatlah penting bagi pelaku bisnis bahkan perusahaan
                            karena branding memiliki tujuan untuk menciptakan suatu image yang baik pada publik, yang
                            akan berpengaruh pada kepopuleran sebuah brand.</p>
                        <p class="section-desk-text">Branding yang tepat akan membuat suatu brand menjadi terkenal dan
                            bisa berimbas untuk memudahkan marketing dan menaikkan sales.</p>
                        <p class="section-desk-text">Selain itu, branding juga akan memberikan bisnis yang kamu
                            jalankan memiliki posisi yang kuat dalam industri yang sama.</p>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="section-img">
                            <img src="<?= base_url(); ?>assets/images/brand-identity/brand.png" alt=""
                                class="img-fluid">
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= Testimonials Section ======= -->
    <section id="layanan" class="layanan">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>What we do?</h2>
                <p>Pilihan Layanan Branding</p>
            </header>
            <div class="row mx-auto justify-content-center text-center mb-5">
                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                    <div class="logo-design">
                        <div class="logo-section-image">
                            <img class="img-fluid" src="<?= base_url(); ?>assets/images/brand-identity/Group1.png"
                                alt="">
                        </div>
                        <div class="logo-section-text">
                            <p>Logo Orisinil</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                    <div class="logo-design">
                        <div class="logo-section-image">
                            <img class="img-fluid" src="<?= base_url(); ?>assets/images/brand-identity/Group2.png"
                                alt="">
                        </div>
                        <div class="logo-section-text">
                            <p>Nilai Filosofi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                    <div class="logo-design">
                        <div class="logo-section-image">
                            <img class="img-fluid" src="<?= base_url(); ?>assets/images/brand-identity/Group3.png"
                                alt="">
                        </div>
                        <div class="logo-section-text">
                            <p>Desain Modern</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layanan-slider swiper mx-auto" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">
                    <?php foreach ($brand as $brand) { ?>
                    <div class="swiper-slide">
                        <div class="text-center img-center">
                            <img src="https://admin.progimedia.com/upload/brand-identity/<?= $brand->picture; ?>"
                                class="layanan-img img-fluid" alt="" title="<?= $brand->caption_picture; ?>">
                            <div class="brand-name">
                                <p class="section-desk-text" style="color: #fff;"><?= $brand->caption_picture; ?></p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <section class="pricelist-home">
                <div class="container" data-aos="fade-up">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-7">
                            <header class="section-header" data-aos="fade-up" data-aos-delay="100">
                                <h2>Pricelist Social Media Design</h2>
                                <p>Investasi terbaik untuk tingkatkan performa bisnismu</p>
                            </header>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 content-pricelist" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="card card-pricelist">
                                <img class="card-img-top" src="<?= base_url(); ?>assets/images/silver.png"
                                    alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <?php foreach ($pricesilver as $silver) { ?>
                                    <?= $silver->list_package; ?>
                                    <?php } ?>
                                    <div class="original-price">
                                        <h4><?= $pricesilverrow->price_discount; ?></h4>
                                    </div>
                                    <div class="promo-price">
                                        <h3><?= $pricesilverrow->price; ?></h3>
                                    </div>
                                    <div class="mx-auto">
                                        <a href="#">INFO LEBIH LANJUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 content-pricelist" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="card card-pricelist">
                                <img class="card-img-top" src="<?= base_url(); ?>assets/images/gold.png"
                                    alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <?php foreach ($pricegold as $gold) { ?>
                                    <?= $gold->list_package; ?>
                                    <?php } ?>
                                    <div class="original-price">
                                        <h4><?= $pricegoldrow->price_discount; ?></h4>
                                    </div>
                                    <div class="promo-price">
                                        <h3><?= $pricegoldrow->price; ?></h3>
                                    </div>
                                    <div class="mx-auto">
                                        <a href="#">INFO LEBIH LANJUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 content-pricelist" data-aos="fade-up"
                            data-aos-delay="300">
                            <div class="card card-pricelist">
                                <img class="card-img-top" src="<?= base_url(); ?>assets/images/platinum.png"
                                    alt="Card image" style="width:100%">
                                <div class="card-body">
                                    <?php foreach ($priceplatinum as $platinum) { ?>
                                    <?= $platinum->list_package; ?>
                                    <?php } ?>
                                    <div class="original-price">
                                        <h4><?= $priceplatinumrow->price_discount; ?></h4>
                                    </div>
                                    <div class="promo-price">
                                        <h3><?= $priceplatinumrow->price; ?></h3>
                                    </div>
                                    <div class="mx-auto">
                                        <a href="#">INFO LEBIH LANJUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 content-pricelist" data-aos="fade-up"
                            data-aos-delay="400">
                            <div class="card card-pricelist">
                                <img class="card-img-top" src="<?= base_url(); ?>assets/images/special.png"
                                    alt="Card image" style="width:100%">
                                <div class="card-body check"> <?php foreach ($pricespecial as $special) { ?>
                                    <?php $html = '"' . $special->list_package . '"';
                                                                    $count = substr_count($html, '<li>'); ?>
                                    <div class="img-check">
                                        <?php for ($i = 0; $i < $count; $i++) { ?>
                                        <img class="img1" src="<?= base_url(); ?>assets/images/check.png" alt=""><br>
                                        <?php } ?>
                                    </div>
                                    <?= $special->list_package; ?>
                                    <?php } ?>
                                    <!-- </ul> -->
                                    <div class="original-price">
                                        <h4><?= $pricespecialrow->price_discount; ?></h4>
                                    </div>
                                    <div class="promo-price">
                                        <h3><?= $pricespecialrow->price; ?></h3>
                                    </div>
                                    <div class="mx-auto">
                                        <a href="#">INFO LEBIH LANJUT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section><!-- End Testimonials Section -->
</div>