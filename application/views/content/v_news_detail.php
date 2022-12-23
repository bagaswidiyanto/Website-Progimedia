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

<div class="single-post">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <article class="entry-single">
                    <div class="entry-title text-center" data-aos="fade-up" data-aos-duration="2000">
                        <h2><?= $news->Title; ?></h2>
                    </div>
                    <div class="entry-img text-center" data-aos="fade-up" data-aos-duration="2000">
                        <img class="img-fluid" src="https://admin.progimedia.com/upload/posts/<?= $news->image; ?>"
                            alt="">
                    </div>
                    <div class="entry-meta" data-aos="fade-up" data-aos-duration="2000">
                        <span><i class="fa fa-clock-o " aria-hidden="true"></i>di posting
                            <?= time_ago($news->created_date); ?></span>
                    </div>
                    <div class="entry-content" data-aos="fade-up" data-aos-duration="2000">
                        <?= $news->content; ?>
                        <?php if ($news->content != '' && $news->metaLink != '') { ?>
                        <p class="mt-5">Sumber : <a href="<?= $news->metaLink; ?>"
                                target="_blank"><?= $news->metaLink; ?></a></p>
                        <?php } ?>
                    </div>
                </article>
                <div class="back">
                    <a href="<?= base_url('news'); ?>">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>