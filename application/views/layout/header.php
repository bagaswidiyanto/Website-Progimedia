<style>
.text-menu {
    line-height: 1px;
}

.text-menu p {
    font-size: 15px;
    font-weight: 700;
    color: #000;
}

.text-menu span {
    font-size: 13px;
    color: #B1B1B1;
}
</style>



<?php
$hal = $this->uri->segment(1);
?>

<!-- ======= Header ======= -->
<?php if ($hal == 'news') { ?>
<style>
.header-news {
    background: #fff !important;
}

.header-news .navbar a,
.header-news.navbar a:focus {
    color: #000 !important;
}

.header-news .navbar-logo.-black {
    opacity: 1;
}

.header-news .logo img {
    opacity: 0;
}
</style>
<header id="header" class="header fixed-top logo-header header-news">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <div class="logos d-flex align-items-center">
            <a href="<?= base_url(); ?>" class="logo d-flex align-items-center">
                <!-- Logo Scrolled black-->
                <img class="navbar-logo -black" src="<?= base_url(); ?>assets/images/logo_progi_header_scroll.png"
                    alt="">
            </a>
            <a href="<?= base_url(); ?>" class="logo d-flex align-items-center">
                <!-- Logo header white -->
                <img class="navbar-logo -white" src="<?= base_url(); ?>assets/images/logo_progi_header.png" alt="">
            </a>
        </div>
        <div class="m-navbar">
            <nav id="navbar" class="navbar mr-auto">

                <ul class="site-menu">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_navigation WHERE parent = 0 AND status = 1 ORDER BY sort ASC")->result() as $key) { ?>

                    <?php
                            if ($key->id == 2 || $key->id == 5) {
                                $chevron = '<i class="bi bi-chevron-down"></i>';
                            } else {
                                $chevron = '';
                            }
                            ?>
                    <li class="dropdown disabled">
                        <a class="nav-link scrollto <?php
                                                            if ($key->slug != "") {
                                                                if ($this->uri->segment(1) == $key->slug) {
                                                                    echo "active";
                                                                }
                                                            } else {
                                                                if ($this->uri->segment(1) == "") {
                                                                    echo "active";
                                                                }
                                                            }
                                                            ?>"
                            href="<?= ($key->title != 'Home') ? strtolower($key->slug) : base_url() ?>"
                            onclick="window.location.href='<?= ($key->title != 'Home') ? $key->slug : base_url() ?>';"><span><?= $key->title ?></span><?= $chevron; ?></a>
                        <?php if ($key->id != 5) { ?>
                        <ul class="menu-hover normal">
                            <?php foreach ($this->db->query("SELECT * FROM tbl_navigation where parent='$key->id' and status='1' order by sort")->result() as $c) { ?>

                            <li class="dropdown">
                                <a class="nav-link scrollto <?php
                                                                            if ($c->slug != "") {
                                                                                if ($this->uri->segment(1) == $c->slug) {
                                                                                    echo "active";
                                                                                }
                                                                            } else {
                                                                                if ($this->uri->segment(1) == "") {
                                                                                    echo "active";
                                                                                }
                                                                            }
                                                                            ?>" href="<?= $c->slug; ?>"
                                    onclick="window.location.href='<?= $c->slug ?>';">
                                    <!-- <img src="<?= base_url(); ?>assets/images/menu-img/about-orange.png" alt="" class="img-fluid grey"> -->
                                    <img src="https://admin.progimedia.com/upload/navigation/<?= $c->image; ?>" alt=""
                                        class="img-fluid orange">
                                    <div class="text-menu">
                                        <p><?= $c->title; ?></p>
                                    </div>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } else { ?>
                        <ul class="menu-hover">
                            <div class="row dropdown-row">
                                <div class="col-md-6" id="dropdown-row">
                                    <?php foreach ($this->db->query("SELECT * FROM tbl_navigation where parent='$key->id' and status='1' order by sort ASC LIMIT 5")->result() as $c) { ?>
                                    <?php
                                                    if ($c->id == 11) {
                                                        $chrn = '<i class="bi bi-chevron-down"></i>';
                                                    } else {
                                                        $chrn = '';
                                                    }
                                                    ?>
                                    <li class="dropdown">
                                        <a class="nav-link scrollto <?php
                                                                                    if ($c->slug != "") {
                                                                                        if ($this->uri->segment(1) == $c->slug) {
                                                                                            echo "active";
                                                                                        }
                                                                                    } else {
                                                                                        if ($this->uri->segment(1) == "") {
                                                                                            echo "active";
                                                                                        }
                                                                                    }
                                                                                    ?>" href="<?= $c->slug; ?>"
                                            onclick="window.location.href='<?= $c->slug ?>';" id="bordered">
                                            <!-- <img src="<?= base_url(); ?>assets/images/menu-img/about-orange.png" alt="" class="img-fluid grey"> -->
                                            <img src="https://admin.progimedia.com/upload/navigation/<?= $c->image; ?>"
                                                alt="" class="img-fluid orange">
                                            <div class="text-menu">
                                                <p><?= $c->title; ?></p>
                                                <span><?= $c->desk_title; ?></span>
                                            </div>
                                            <?= $chrn; ?>
                                        </a>
                                        <ul class="menu-hover-dropdown">
                                            <?php foreach ($this->db->query("SELECT * FROM tbl_navigation where parent='$c->id' and status='1' order by sort")->result() as $sub) { ?>

                                            <li>
                                                <a class="nav-link scrollto <?php
                                                                                                if ($sub->slug != "") {
                                                                                                    if ($this->uri->segment(1) == $sub->slug) {
                                                                                                        echo "active";
                                                                                                    }
                                                                                                } else {
                                                                                                    if ($this->uri->segment(1) == "") {
                                                                                                        echo "active";
                                                                                                    }
                                                                                                }
                                                                                                ?>"
                                                    href="<?= base_url() . $sub->slug; ?>"
                                                    onclick="window.location.href='<?= base_url() . $sub->slug ?>/';"
                                                    id="bordered-drop">
                                                    <!-- <img src="<?= base_url(); ?>assets/images/menu-img/logo.png" alt="" class="img-fluid grey"> -->
                                                    <img src="https://admin.progimedia.com/upload/navigation/<?= $sub->image; ?>"
                                                        alt="" class="img-fluid orange">
                                                    <div class="text-menu">
                                                        <p><?= $sub->title; ?></p>
                                                        <!-- <span><?= $sub->desk_title; ?></span> -->
                                                    </div>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <?php } ?>
                                </div>
                                <div class="col-md-6 dropdown-col-6">
                                    <?php foreach ($this->db->query("SELECT * FROM tbl_navigation where parent='$key->id' and status='1' order by sort ASC LIMIT 5,10")->result() as $c) { ?>

                                    <li class="dropdown">
                                        <a class="nav-link scrollto <?php
                                                                                    if ($c->slug != "") {
                                                                                        if ($this->uri->segment(1) == $c->slug) {
                                                                                            echo "active";
                                                                                        }
                                                                                    } else {
                                                                                        if ($this->uri->segment(1) == "") {
                                                                                            echo "active";
                                                                                        }
                                                                                    }
                                                                                    ?>" href="<?= $c->slug; ?>"
                                            onclick="window.location.href='<?= $c->slug ?>';" id="bordered">
                                            <!-- <img src="<?= base_url(); ?>assets/images/menu-img/about-orange.png" alt="" class="img-fluid grey"> -->
                                            <img src="https://admin.progimedia.com/upload/navigation/<?= $c->image; ?>"
                                                alt="" class="img-fluid orange">
                                            <div class="text-menu">
                                                <p><?= $c->title; ?></p>
                                                <span><?= $c->desk_title; ?></span>
                                            </div>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </div>
                            </div>
                        </ul>
                        <?php } ?>
                    </li>

                    <?php } ?>

                </ul>
            </nav><!-- .navbar -->
        </div>

        <div class="ml-auto">
            <nav id="navbar" class="navbar mr-auto">
                <ul class="site-menu">
                    <!-- <li class="dropdown"><a href="#"><i class="fa fa-user-circle-o"
                                aria-hidden="true"></i><span>Account</span> <i class="bi bi-chevron-down"></i></a>
                        <ul class="menu-hover normal">
                            <li><a href="#">Drop Down 1</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>


    </div>
</header>
<?php } else { ?>
<header id="header" class="header fixed-top logo-header">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <div class="logos d-flex align-items-center">
            <a href="<?= base_url(); ?>" class="logo d-flex align-items-center">
                <!-- Logo Scrolled black-->
                <img class="navbar-logo -black" src="<?= base_url(); ?>assets/images/logo_progi_header_scroll.png"
                    alt="">
            </a>
            <a href="<?= base_url(); ?>" class="logo d-flex align-items-center">
                <!-- Logo header white -->
                <img class="navbar-logo -white" src="<?= base_url(); ?>assets/images/logo_progi_header.png" alt="">
            </a>
        </div>
        <div class="m-navbar">
            <nav id="navbar" class="navbar mr-auto">
                <?php
                    $hal = $this->uri->segment(1);
                    ?>
                <ul class="site-menu">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_navigation WHERE parent = 0 AND status = 1 ORDER BY sort ASC")->result() as $key) { ?>

                    <?php
                            if ($key->id == 2 || $key->id == 5) {
                                $chevron = '<i class="bi bi-chevron-down"></i>';
                            } else {
                                $chevron = '';
                            }
                            ?>
                    <li class="dropdown disabled">
                        <a class="nav-link scrollto <?php
                                                            if ($key->slug != "") {
                                                                if ($this->uri->segment(1) == $key->slug) {
                                                                    echo "active";
                                                                }
                                                            } else {
                                                                if ($this->uri->segment(1) == "") {
                                                                    echo "active";
                                                                }
                                                            }
                                                            ?>"
                            href="<?= ($key->title != 'Home') ? strtolower($key->slug) : base_url() ?>"
                            onclick="window.location.href='<?= ($key->title != 'Home') ? $key->slug : base_url() ?>';"><span><?= $key->title ?></span><?= $chevron; ?></a>
                        <?php if ($key->id != 5) { ?>
                        <ul class="menu-hover normal">
                            <?php foreach ($this->db->query("SELECT * FROM tbl_navigation where parent='$key->id' and status='1' order by sort")->result() as $c) { ?>

                            <li class="dropdown">
                                <a class="nav-link scrollto <?php
                                                                            if ($c->slug != "") {
                                                                                if ($this->uri->segment(1) == $c->slug) {
                                                                                    echo "active";
                                                                                }
                                                                            } else {
                                                                                if ($this->uri->segment(1) == "") {
                                                                                    echo "active";
                                                                                }
                                                                            }
                                                                            ?>" href="<?= $c->slug; ?>"
                                    onclick="window.location.href='<?= $c->slug ?>';">
                                    <!-- <img src="<?= base_url(); ?>assets/images/menu-img/about-orange.png" alt="" class="img-fluid grey"> -->
                                    <img src="https://admin.progimedia.com/upload/navigation/<?= $c->image; ?>" alt=""
                                        class="img-fluid orange">
                                    <div class="text-menu">
                                        <p><?= $c->title; ?></p>
                                    </div>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } else { ?>
                        <ul class="menu-hover">
                            <div class="row dropdown-row">
                                <div class="col-md-6" id="dropdown-row">
                                    <?php foreach ($this->db->query("SELECT * FROM tbl_navigation where parent='$key->id' and status='1' order by sort ASC LIMIT 5")->result() as $c) { ?>
                                    <?php
                                                    if ($c->id == 11) {
                                                        $chrn = '<i class="bi bi-chevron-down"></i>';
                                                    } else {
                                                        $chrn = '';
                                                    }
                                                    ?>
                                    <li class="dropdown">
                                        <a class="nav-link scrollto <?php
                                                                                    if ($c->slug != "") {
                                                                                        if ($this->uri->segment(1) == $c->slug) {
                                                                                            echo "active";
                                                                                        }
                                                                                    } else {
                                                                                        if ($this->uri->segment(1) == "") {
                                                                                            echo "active";
                                                                                        }
                                                                                    }
                                                                                    ?>" href="<?= $c->slug; ?>"
                                            onclick="window.location.href='<?= $c->slug ?>';" id="bordered">
                                            <!-- <img src="<?= base_url(); ?>assets/images/menu-img/about-orange.png" alt="" class="img-fluid grey"> -->
                                            <img src="https://admin.progimedia.com/upload/navigation/<?= $c->image; ?>"
                                                alt="" class="img-fluid orange">
                                            <div class="text-menu">
                                                <p><?= $c->title; ?></p>
                                                <span><?= $c->desk_title; ?></span>
                                            </div>
                                            <?= $chrn; ?>
                                        </a>
                                        <ul class="menu-hover-dropdown">
                                            <?php foreach ($this->db->query("SELECT * FROM tbl_navigation where parent='$c->id' and status='1' order by sort")->result() as $sub) { ?>

                                            <li>
                                                <a class="nav-link scrollto <?php
                                                                                                if ($sub->slug != "") {
                                                                                                    if ($this->uri->segment(1) == $sub->slug) {
                                                                                                        echo "active";
                                                                                                    }
                                                                                                } else {
                                                                                                    if ($this->uri->segment(1) == "") {
                                                                                                        echo "active";
                                                                                                    }
                                                                                                }
                                                                                                ?>"
                                                    href="<?= base_url() . $sub->slug; ?>"
                                                    onclick="window.location.href='<?= base_url() . $sub->slug ?>/';"
                                                    id="bordered-drop">
                                                    <!-- <img src="<?= base_url(); ?>assets/images/menu-img/logo.png" alt="" class="img-fluid grey"> -->
                                                    <img src="https://admin.progimedia.com/upload/navigation/<?= $sub->image; ?>"
                                                        alt="" class="img-fluid orange">
                                                    <div class="text-menu">
                                                        <p><?= $sub->title; ?></p>
                                                        <!-- <span><?= $sub->desk_title; ?></span> -->
                                                    </div>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <?php } ?>
                                </div>
                                <div class="col-md-6 dropdown-col-6">
                                    <?php foreach ($this->db->query("SELECT * FROM tbl_navigation where parent='$key->id' and status='1' order by sort ASC LIMIT 5,10")->result() as $c) { ?>

                                    <li class="dropdown">
                                        <a class="nav-link scrollto <?php
                                                                                    if ($c->slug != "") {
                                                                                        if ($this->uri->segment(1) == $c->slug) {
                                                                                            echo "active";
                                                                                        }
                                                                                    } else {
                                                                                        if ($this->uri->segment(1) == "") {
                                                                                            echo "active";
                                                                                        }
                                                                                    }
                                                                                    ?>" href="<?= $c->slug; ?>"
                                            onclick="window.location.href='<?= $c->slug ?>';" id="bordered">
                                            <!-- <img src="<?= base_url(); ?>assets/images/menu-img/about-orange.png" alt="" class="img-fluid grey"> -->
                                            <img src="https://admin.progimedia.com/upload/navigation/<?= $c->image; ?>"
                                                alt="" class="img-fluid orange">
                                            <div class="text-menu">
                                                <p><?= $c->title; ?></p>
                                                <span><?= $c->desk_title; ?></span>
                                            </div>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </div>
                            </div>
                        </ul>
                        <?php } ?>
                    </li>

                    <?php } ?>

                </ul>
            </nav><!-- .navbar -->
        </div>

        <div class="ml-auto">
            <nav id="navbar" class="navbar mr-auto">
                <ul class="site-menu">
                    <!-- <li class="dropdown"><a href="#"><i class="fa fa-user-circle-o"
                                aria-hidden="true"></i><span>Account</span> <i class="bi bi-chevron-down"></i></a>
                        <ul class="menu-hover normal">
                            <li><a href="#">Drop Down 1</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>


    </div>
</header>
<?php } ?>
<!-- End Header -->

<!-- ======= Hero Section ======= -->
<?php if ($hal != 'news') { ?>
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item <?= ($hal == '') ? 'active' : ''; ?>"
                style="background-image: url(<?= base_url(); ?>assets/images/hero-home.png)">
                <div class="carousel-container">
                    <div class="container welcome-container">
                        <div class="row  justify-content-center">
                            <div class="col-xl-6 col-lg-7 col-md-6  about-hero-content">
                                <h2 class="mb-0" data-aos="fade-down" data-aos-duration="2000">WELCOME to Website</h2>
                                <p data-aos="fade-up" data-aos-duration="2000">Creative Design Agency</p>

                                <div class="row">
                                    <div class="col-lg-6 mb-4 mb-lg-0">
                                        <a href="https://admin.progimedia.com/upload/<?= $website->compro; ?>"
                                            target="_blank" class="btn-get-started scrollto w-100 p-3"
                                            data-aos="fade-right" data-aos-duration="2000">
                                            <h6><img src="<?= base_url(); ?>assets/images/doc.png" alt=""> Company
                                                Profile</h6>
                                        </a>

                                    </div>
                                    <div class="col-lg-6 mb-4 mb-lg-0" style="position: relative;">
                                        <div class="box-watch-video p-3" data-aos="fade-left" data-aos-duration="2000">
                                            <a href="<?= base_url(); ?>assets/images/Promosi Progimedia - Service Short.mp4"
                                                class="glightbox btn-watch-video w-100">
                                                <h6><img class="img-fluid bgvideo"
                                                        src="<?= base_url(); ?>assets/images/icon-video.png" alt="">
                                                    Watch Video</h6>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5 col-md-6">
                                <div class="hero-logo">
                                    <img class="img-fluid" src="<?= base_url(); ?>assets/images/logo-home.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item <?= ($hal == 'about') ? 'active' : ($hal == 'campaign' ? 'active' : ''); ?>"
                style="background-image: url(<?= base_url(); ?>assets/images/about/img-hero-about.png)">
                <div class="carousel-container">
                    <div class="container">
                        <div class="row  justify-content-center">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 about-hero-content">
                                <h2>Tingkatkan Performa Bisnismu Dengan Social Media Management</h2>
                                <p>Bergabung bersama Progimedia dan tingkatkan performa bisnismu dengan Social Media
                                    Design!</p>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="hero-logo">
                                    <img class="img-fluid"
                                        src="<?= base_url(); ?>assets/images/about/about-img-hero2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item <?= $hal == 'brand' ? 'active' : ''; ?>"
                style="background-image: url(<?= base_url(); ?>assets/images/social-media/hero-next-menu.png)">
                <div class="carousel-container">
                    <div class="container">
                        <div class="row  justify-content-center">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 about-hero-content">
                                <h2>Ingin punya Aplikasi sendiri untuk kembangkan bisnis?</h2>
                                <p>Aplikasi Mobile sangatlah penting perannya untuk mengembangkan binis anda. Progimedia
                                    siap melayani kebutuhan anda dengan memberikan desain yang modern dan sesuai dengan
                                    kebutuhan pengguna</p>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <!-- <div class="about-phone">
                     <img class="img-fluid" src="<?= base_url(); ?>assets/images/about/about-img-hero2.png" alt="">
                 </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item <?= ($hal == 'socialmanagement' ? 'active' : ($hal == 'webdevelopment' ? 'active' : ($hal == 'desainlogo' ? 'active' : ($hal == 'desainbrosur' ? 'active' : ($hal == 'desainkatalog' ? 'active' : ($hal == 'desaincompany' ? 'active' : ($hal == 'desainidcard' ? 'active' : ($hal == 'desainbanner' ? 'active' : ($hal == 'videoproduction' ? 'active' : ($hal == 'undangandigital' ? 'active' : ($hal == 'fotograpi' ? 'active' : ($hal == 'produkpackaging' ? 'active' : ($hal == 'digi_camp' ? 'active' : ($hal == 'landingpage' ? 'active' : ($hal == 'client' ? 'active' : ($hal == 'contact' ? 'active' : ($hal == 'domain' ? 'active' : ''))))))))))))))))); ?>"
                id="carousel-next-menu"
                style="background-image: url(<?= base_url(); ?>assets/images/brand-identity/hero.png)">
                <div class="carousel-container">
                    <div class="container">
                        <div class="row ">
                            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-7  about-hero-content">
                                <h2 style="margin-bottom: 0;">Buat Website yang keren dan powerfull</h2>
                                <p class="mt-5">Butuh website atau landingpage untuk identitas bisnis anda di dunia
                                    digital? Desainnya keren dan yang paling penting powerfull? Progimedia Solusinya!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="carousel-item <?= ($hal == 'news' ? 'active' : ($hal == 'news/detail' ? 'active' : '')); ?>"
                style="background-image: url(<?= base_url(); ?>assets/images/news/hero.png)">
                <div class="carousel-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 hero-news">
                                <h1 style="color: #fff;">Dapatkan Artikel Berita Seputar Dunia Kreatif</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="carousel-item <?= $hal == 'ourteam' ? 'active' : ''; ?>"
                style="background-image: url(<?= base_url(); ?>assets/images/our-team/hero.png)">
                <div class="carousel-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 hero-news">
                                <h1 style="color: #fff;">Our Team</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item <?= $hal == 'library' ? 'active' : ''; ?>"
                style="background-image: url(<?= base_url(); ?>assets/images/bg-library.png)">
                <div class="carousel-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 hero-news">
                                <h1 style="color: #fff;">Library Design</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section>
<?php } ?>
<!-- End Hero -->