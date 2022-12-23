<div class="services-area-home" id="services-area-home">
    <img src="<?= base_url(); ?>assets/images/campaign/background-campaign.png" alt=""
        class="img-fluid img-back-campaign">
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
    <div class="about-us-home">
        <img class="img-fluid world-back-campaign" src="<?= base_url(); ?>assets/images/campaign/dunia-campaign.png"
            alt="">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12">
                    <div class="section-header" data-aos="fade-up" data-aos-duration="2000">
                        <h2>Digital Campaign</h2>
                    </div>
                </div>
            </div>
            <div class="row prg">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-duration="2000">
                    <h2 class="section-img">
                        <img src="https://admin.progimedia.com/upload/campaign/<?= $campaign->image; ?>" alt=""
                            class="img-fluid">
                    </h2>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-duration="2000">
                    <div class="title-branding">
                        <h3><?= $campaign->title; ?></h3>
                    </div>
                    <p class="progi-desk-home section-desk-text"><?= $campaign->deskripsi; ?></p>
                </div>
            </div>
            <div class="platform-iklan">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-12">
                        <div class="section-header" data-aos="fade-up" data-aos-duration="2000">
                            <h2>Our Service</h2>
                            <p>Platform Iklan </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="row justify-content-center">
                            <?php foreach ($our_services as $our_services) { ?>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6" data-aos="fade-up"
                                data-aos-duration="2000">
                                <div class="section-img-social">
                                    <img class="img-fluid"
                                        src="https://admin.progimedia.com/upload/campaign/<?= $our_services->image; ?>"
                                        alt="">
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bnefits">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-12">
                <div class="section-header" data-aos="fade-up" data-aos-duration="2000">
                    <h2>Bnefits</h2>
                    <p>Keuntungan Iklan Online ?</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <?php foreach ($bnefits as $bnefit) { ?>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" data-aos="fade-up" data-aos-duration="2000">
                <div class="bnefits-img">
                    <img class="img-fluid" src="https://admin.progimedia.com/upload/campaign/<?= $bnefit->image; ?>"
                        alt="">
                </div>
                <div class="bnefits-text">
                    <p><?= $bnefit->title; ?></p>
                    <span><?= $bnefit->deskripsi; ?></span>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>