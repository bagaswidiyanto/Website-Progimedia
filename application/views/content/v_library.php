<div class="library-design py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-9 col-lg-9 col-md-11 col-sm-10">
                <div class="section-text ">
                    <div class="title text-center">
                        <h1>Library Design</h1>
                    </div>
                    <div class="desk mt-4">
                        <p>Tingkatkan performa bisnis kamu dengan layanan-layanan yang kami berikan mulai dari Desain
                            Brand hingga Social Media Management.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="portfolio-home" class="library">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="library-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <?php foreach ($filter as $filter) { ?>
                    <li data-filter=".filter-<?= $filter->slug ?>"><?= $filter->filter ?></li>
                    <?php } ?>

                </ul>
            </div>
        </div>


        <div class="row gy-4 library-container" data-aos="fade-up" data-aos-duration="2000">
            <?php foreach ($this->db->query("SELECT * FROM tbl_library")->result() as $l) { ?>
            <?php $slug = $this->db->query("SELECT * FROM tbl_master_filter_library WHERE id = '" . $l->id_filter . "'")->row(); ?>
            <div class="col-xs-3 col-lg-3 col-md-3 col-6 library-item filter-<?= $slug->slug ?>">
                <div class="library-wrap">
                    <img src="https://admin.progimedia.com/upload/library/<?= $l->image; ?>" class="img-fluid" alt="">
                    <div class="library-info">
                        <h4><?= $l->nama; ?></h4>
                        <div class="library-links">
                            <a href="#" data-gallery="portfolioGallery" title="App 1" data-bs-toggle="modal"
                                data-bs-target="#myModal<?= $l->id; ?>"><i class="bi bi-plus"></i></a>
                        </div>
                    </div>
                    <div class="library-title text-center py-2 ">
                        <p class="text-white mb-0"><?= $l->nama; ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</section>

<style>
.modal-img {
    height: 87%;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    bottom: 0;
    top: auto;
}
</style>
<!-- The Modal -->
<?php foreach ($this->db->query("SELECT * FROM tbl_library")->result() as $lModal) { ?>
<div class="modal modal-img animate__animated animate__fadeInUp" id="myModal<?= $lModal->id; ?>">
    <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
        <div class="modal-content px-5">
            <style>
            .btn-close {
                background-color: #fff;
            }
            </style>
            <!-- Modal Header -->
            <div class="modal-header border-0">
                <div class="title-header">
                    <h3 class="text-danger fw-bold text-uppercase mb-0"><?= $lModal->nama; ?></h3>
                    <small>Created By <?= $lModal->createBy ?></small>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body ">
                <img src="https://admin.progimedia.com/upload/library/<?= $lModal->portofolio; ?>" class="img-fluid"
                    alt="">
            </div>


        </div>
    </div>
</div>
<?php } ?>