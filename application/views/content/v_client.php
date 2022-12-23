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
    <!-- <div class="many-menus">
          <img src="<?= base_url(); ?>assets/images/brand-identity/desain-idcard/background-idcard.png" class="img-fluid bground" alt="">
          <div class="container many-menus-container">
            <div class="row">
              <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10">
                <div class="section-text">
                    <div class="title">
                        <h1>DESAIN ID CARD</h1>
                    </div>
                    <div class="desk mt-5">
                        <p>ID Card atau bisa disebut kartu tanda pengenal memiliki fungsi tidak hanya sebagai kartu identitas karyawan, kartu pelajar, kartu anggota sebuah perusahaan atau organisasi, akan tetapi mempunyai arti sendiri dalam mendukung formalitas dan image perusahaan atau organisasi.</p>
                    </div>
                </div>
                </div>
            </div>
          </div>
        </div> -->
    <div class="client">
        <div class="container" data-aos="fade-up">
            <header class="section-header" data-aos="fade-up" data-aos-duration="2000">
                <p>10.000 + Pelanggang Percaya dengan Progi Media</p>
            </header>
            <div class="client-slider swiper" data-aos="fade-up" data-aos-duration="2000">
                <div class="swiper-wrapper">
                    <?php foreach ($client as $client) { ?>
                    <div class="swiper-slide"><img
                            src="https://admin.progimedia.com/upload/clients/<?= $client->image; ?>" class="img-fluid"
                            alt="" title="<?= $client->name; ?>"></div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

</div>