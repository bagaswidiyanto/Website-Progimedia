<?php
function time_ago($timestamp)
{
    $time_ago = strtotime($timestamp);
    $current_time = time();
    $time_difference = $current_time - $time_ago;
    $seconds = $time_difference;
    $minutes      = round($seconds / 60);        // value 60 is seconds  
    $hours        = round($seconds / 3600);       //value 3600 is 60 minutes * 60 sec  
    $days         = round($seconds / 86400);      //86400 = 24 * 60 * 60;  
    $weeks        = round($seconds / 604800);     // 7*24*60*60;  
    $months       = round($seconds / 2629440);    //((365+365+365+365+366)/5/12)*24*60*60  
    $years        = round($seconds / 31553280);   //(365+365+365+365+366)/5 * 24 * 60 * 60  
    if ($seconds <= 60) {
        return "Sekarang";
    } else if ($minutes <= 60) {
        if ($minutes == 1) {
            return "Satu menit lalu";
        } else {
            return "$minutes menit lalu";
        }
    } else if ($hours <= 24) {
        if ($hours == 1) {
            return "Satu jam lalu";
        } else {
            return "$hours jam lalu";
        }
    } else if ($days <= 7) {
        if ($days == 1) {
            return "Kemarin";
        } else {
            return "$days hari lalu";
        }
    } else if ($weeks <= 4.3) {  //4.3 == 52/12
        if ($weeks == 1) {
            return "Satu minggu lalu";
        } else {
            return "$weeks minggu lalu";
        }
    } else if ($months <= 12) {
        if ($months == 1) {
            return "Satu bulan lalu";
        } else {
            return "$months bulan lalu";
        }
    } else {
        if ($years == 1) {
            return "Satu tahun lalu";
        } else {
            return "$years tahun lalu";
        }
    }
}
?>

<style>
form input:focus {
    outline: none;
}
</style>

<div class="post-news">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11 col-12" data-aos="fade-up" data-aos-duration="2000">
                <div class="search-form">
                    <form class="position-relative" role="search" method="get" action="<?= base_url('news'); ?>">
                        <input class="bg-linier-grey border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                            name="search" placeholder="Cari Berita...">
                        <button
                            class="btn bg-linier-orange rounded-pill position-absolute m-2 top-0 end-0 py-2 px-4 text-white"
                            type="submit">Cari<i class="fa fa-search ms-2"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <?php
                    if (($news->num_rows()) > 0) {
                        foreach ($news->result() as $news) {
                    ?>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-4" data-aos="fade-up" data-aos-duration="2000">
                        <div class="box-news ">
                            <div class="box-img">
                                <a href="<?= base_url(); ?>news/detail/<?= $news->slug; ?>"
                                    title="<?= $news->Title; ?>">
                                    <img class="img-fluid"
                                        src="https://admin.progimedia.com/upload/posts/<?= $news->image; ?>" alt="">
                                </a>
                            </div>
                            <div class="box-text mt-3">
                                <a href="<?= base_url(); ?>news/detail/<?= $news->slug; ?>"
                                    title="<?= $news->Title; ?>">
                                    <h5><?= $news->Title; ?></h5>
                                </a>
                                <span><i class="fa fa-clock-o " aria-hidden="true"></i>di posting
                                    <?= time_ago($news->created_date); ?></span>
                                <a href="<?= base_url(); ?>news/detail/<?= $news->slug; ?>"
                                    title="<?= $news->Title; ?>">
                                    <p><?= substr(strip_tags($news->content), 0, 100); ?>...</p>
                                </a>
                            </div>

                        </div>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <style>
            .post-news .sidebar-post .box-shadow {
                box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.1);
                padding: 30px;
                margin: 0 0 30px 20px;
            }

            .post-news .sidebar-post .sidebar-title {
                font-size: 20px;
                font-weight: 700;
                padding: 0 0 0 0;
                margin: 0 0 15px 0;
                color: #0D438D;
                position: relative;
            }

            .post-news .sidebar-post .tags ul {
                padding: 0;
            }

            .post-news .sidebar-post .tags ul a {
                color: #7B7B7B;
                font-size: 14px;
                padding: 6px 14px;
                margin: 0 6px 8px 0;
                display: inline-block;
                cursor: pointer;
                transition: 0.3s;
                background: #FFF7F4;
            }

            .post-news .sidebar-post .tags ul li {
                display: inline-block;
            }
            </style>
            <div class="col-lg-4 mt-5" data-aos="fade-down" data-aos-delay="200">
                <div class="sidebar-post">
                    <div class="box-shadow">
                        <h3 class="sidebar-title">Tags</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                <?php foreach ($this->db->query("SELECT * FROM tbl_post_tag")->result() as $tag) { ?>
                                <li><a onclick="getTag(<?= $tag->id ?>, '<?= $tag->tag_name ?>')"
                                        title="<?= $tag->tag_name; ?>"><?= $tag->tag_name; ?></a></li>
                                <?php } ?>

                            </ul>
                        </div><!-- End sidebar tags-->
                    </div>
                </div>
            </div>
        </div>
        <nav class="blog-pagination justify-content-center d-flex">
            <?= $pagination; ?>
        </nav>
    </div>
</div>

<script>
function getTag(id, name) {
    base_url = '<?php echo base_url(); ?>';
    $.ajax({
        type: "GET",
        url: base_url + "news",
        data: {
            'id': id,
            'nama': name
        },
        success: function(html) {
            window.location = base_url + 'news/tag/?id=' + id;
        },
        error: function() {}
    });
}
</script>