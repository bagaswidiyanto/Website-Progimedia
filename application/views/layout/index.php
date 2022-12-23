<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B2YSBV4YWJ"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-B2YSBV4YWJ');
    </script>

    <?php foreach ($this->db->query("SELECT * FROM tbl_navigation WHERE status = 1")->result() as $n) { ?>
    <?php if ($this->uri->segment(1) == $n->slug) {
            $segment1 = $n->title . ' | ' . $n->metaTitle;
            $metaKey = $n->metaKeywords;
            $metaDes = $n->metaDescription;
        } ?>
    <?php } ?>

    <?php if ($this->uri->segment(2) != 'detail') { ?>
    <title><?= $segment1; ?> </title>
    <meta name="keywords" content="<?= $metaKey; ?>">
    <meta name="description" content="<?= $metaDes; ?>">

    <meta name="format-detection" content="telephone=no">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $website->metaTitle; ?>" />
    <meta property="og:description" content="<?= $website->metaDescription; ?>" />
    <meta property="og:url" content="https://progimedia.com/" />
    <meta property="og:image" content="<?= base_url(); ?>assets/images/logo_link.png" />
    <?php } ?>

    <?php
    if ($this->uri->segment(2) == 'detail') {
        $meta = $this->db->get_where('tbl_posts', array('slug' => $this->uri->segment(3)))->row(); ?>
    <title><?= $meta->Title; ?> </title>
    <meta name="keywords" content="<?= $meta->metaKeywords; ?>">
    <meta name="description" content="<?= $meta->metaDescription; ?>">


    <meta property="og:site_name" content="Progimedia" />
    <meta property="og:title" content="<?= $meta->Title; ?>" />
    <meta property="og:description" content="<?= $meta->metaDescription; ?>" />
    <meta property="og:url" content="https://progimedia.com/news/detail/<?= $meta->slug; ?>" />
    <meta property="og:type" content="article" />
    <meta property="article:publisher" content="https://progimedia.com" />
    <meta property="article:section" content="Progimedia" />
    <meta property="article:tag" content="Progimedia" />
    <meta property="og:image" content="https://admin.progimedia.com/upload/posts/<?= $meta->image; ?>" />
    <meta property="og:image:secure_url" content="https://admin.progimedia.com/upload/posts/<?= $meta->image; ?>" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="640" />
    <meta property="twitter:card" content="summary" />
    <meta property="twitter:image" content="https://admin.progimedia.com/upload/posts/<?= $meta->image; ?>" />
    <meta property="twitter:site" content="@Progimedia" />
    <?php } ?>

    <!-- Favicons -->
    <link href="<?= base_url(); ?>assets/images/logo_link.png" rel="icon">
    <!-- <link href="<?= base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <!-- <link href="<?= base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet"> -->
    <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/brand.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/about.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/our-team.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/campaign.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/social-management.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/web-developer.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/desain-logo.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/desain-brosur.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/desain-katalog.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/desain-company.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/video-production.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/undangan-digital.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fotograpi.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/produk-packaging.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/landing-page.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/news.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/contact.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/library.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/whatsapp_chat.css">

    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
</head>

<body>

    <?php if ($header) echo $header; ?>
    <main id="main" class="main">
        <?php if ($middle) echo $middle; ?>
    </main>
    <?php if ($footer) echo $footer; ?>



    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>assets/vendor/purecounter/purecounter.js"></script>
    <!-- <script src="<?= base_url(); ?>assets/vendor/aos/aos.js"></script> -->
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>assets/js/main.js"></script>
</body>

</html>