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
        <img src="<?= base_url(); ?>assets/images/our-team/background-our-team.png" class="img-fluid bground" alt="">
        <div class="container many-menus-container">
            <div class="section-content-color text-center mb-5" data-aos="fade-up" data-aos-duration="2000">
                <h3>We Are Progimedia Team</h3>
            </div>
            <div class="slider-bottom-our-team">

                <div class="row relative justify-content-center">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-11">
                        <div class="our-team-slider swiper">
                            <div class="swiper-wrapper">
                                <?php foreach ($team as $team) { ?>
                                <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                                    <div class="text-center img-center">
                                        <img src="https://admin.progimedia.com/upload/team/<?= $team->image; ?>"
                                            class="img-fluid" alt="">
                                        <div class="team-name mt-4">
                                            <p class="section-desk-text"><?= $team->nama; ?></p>
                                            <span><?= $team->jabatan; ?></span>
                                        </div>
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
    </div>
</div>