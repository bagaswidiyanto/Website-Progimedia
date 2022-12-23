<?php
$number = $website->phone;
$n1 = substr($number, 0, 4);
$n2 = substr($number, 4, 4);
$n3 = substr($number, 8, 4);
$wa = $n1 . '-' . $n2 . '-' . $n3;

$numberAPI = $website->phone;
$n1API = substr($numberAPI, 1);
$apiWa = $n1API;

$waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20Sahabat%20$website->name..%21%0APesan%20anda%20sudah%20kami%20terima%0AKami%20akan%20merespons%20pesan%20anda%20segera%0ATerimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
?>

<style>
form input:focus {
    outline: none;
}
</style>
<footer id="footer" class="footer">
    <div class="footer-newsletter" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h2>Terus ikuti update terbaru dari ProgiMedia</h2>
                </div>
                <div class="col-lg-6">
                    <form action="" method="post">
                        <input type="email" name="email" placeholder="Enter your email address">
                        <input type="submit" class="bg-submit" value="Subscribe Now">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top"
        style="background-image: url(<?= base_url(); ?>assets/images/background-footer.png); background-size: cover;background-position: center;background-repeat: no-repeat;">
        <div class="container">
            <div class="row g-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 footer-info">
                    <a href="<?= base_url(); ?>" class="logo d-flex align-items-center">
                        <img class="img-fluid" src="<?= base_url(); ?>assets/images/logo_progi_footer.png" alt="">
                    </a>
                    <div class="col-lg-12">
                        <?= $website->description; ?>
                    </div>
                    <div class="social-links mt-3">
                        <p style="margin-left: 0;">Ikuti Kami :</p>
                        <?php foreach ($sosmed as $sosmed) { ?>
                        <a href="<?= $sosmed->link; ?>" title="<?= $sosmed->name; ?>"><i
                                class="fa <?= $sosmed->icon; ?>"></i></a>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url(); ?>">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('about'); ?>">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>


                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6 footer-links">

                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="<?= base_url('WebDevelopment'); ?>">Web
                                Development</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        <?= $website->address; ?>
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
                            rel="stylesheet">
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
                        </script>
                    </p>
                </div>
            </div>

            <div class="contact-bottom">
                <!-- <?php
                        $number = $website->phone;
                        $n1 = substr($number, 0, 4);
                        $n2 = substr($number, 4, 4);
                        $n3 = substr($number, 8, 4);
                        $wa = $n1 . '-' . $n2 . '-' . $n3;

                        $numberAPI = $website->phone;
                        $n1API = substr($number, 1);
                        $apiWa = $n1API;
                        ?> -->
                <strong>Phone:</strong> <a class="text-white" href="<?= $waLink; ?>" target="_blank"><?= $wa; ?></a>
                <br>
                <strong>Email:</strong> <?= $website->email; ?><br>
            </div>
        </div>
    </div>
    <div class="copyright">
        Copyright © 2022 - PROGIMEDIA All Rights Reserved. Powered by <a href="https://digitalindo.co.id/"
            class="text-white">Digitalindo</a>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
<?php
date_default_timezone_set('ASIA/JAKARTA');
$curr_time     = date('H:i:s');
?>
<div class="whatsapp-chat-section">
    <div class="icon-section">
        <img src="<?= base_url(); ?>assets/images/whatsapp/ic_whatsapp.png" id="whatsapp_chat"
            onclick="chatWhatsApp();">
    </div>
    <div id="whatsapp-chat-popup" class="animate__animated animate__bounceOutDown"
        style="z-index: 999999; display: none;">
        <div id="list-chat-section" class="list-chat-section animate__animated animate__fadeIn" style="display: block;">
            <div class="header-section" style="background:#0dc152;">
                <img class="close-chat-section" src="<?= base_url(); ?>assets/images/whatsapp/ic_close_btn.png"
                    onclick="closechatWhatsApp();">
                <div class="header-avatar-section">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa order by id asc")->result() as $sec1) { ?>
                    <div class="avatar">
                        <img class="avatar"
                            style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;"
                            src="https://admin.progimedia.com/upload/wa_image/<?= $sec1->image; ?>">
                    </div>
                    <? } ?>
                </div>
                <div class="header-desc-section" style="margin-top: 15px;">
                    <p>Kami siap membantu Anda, Silahkan chat dengan customer service kami. </p>
                </div>
            </div>
            <div class="chat-section">
                <?php foreach ($this->db->query("SELECT a.*,b.first_name as nama,c.nama as cabang FROM tbl_chat_wa a left join sys_users b on a.user=b.id left join log_branch c ON a.branch=c.kode order by a.id asc")->result() as $sec2) { ?>
                <div class="cs-section" onclick="chatCustomer(<?= $sec2->id; ?>);">
                    <div class="avatar">
                        <img class="avatar" src="https://admin.progimedia.com/upload/wa_image/<?= $sec2->image; ?>">
                    </div>
                    <div class="profile">
                        <p class="position">Customer Service <?= ucwords(strtolower($sec2->cabang)); ?></p>
                        <h3 class="name"><?= strtoupper($sec2->nama); ?></h3>
                        <?php if (($curr_time >= $sec2->startOnline) && ($curr_time < $sec2->endOnline)) { ?>
                        <small class="status">Online <span class="online"><i class="fa fa-circle "></i></span> </small>
                        <? } else { ?>
                        <small class="status">Offline <span class="offline"><i class="fa fa-circle "></i></span>
                        </small>
                        <? } ?>
                    </div>
                </div>
                <? } ?>
            </div>
        </div>
        <?php foreach ($this->db->query("SELECT a.*,b.first_name as nama,c.nama as cabang FROM tbl_chat_wa a left join sys_users b on a.user=b.id left join log_branch c ON a.branch=c.kode order by a.id asc")->result() as $sec3) { ?>
        <div class="chat-section animate__animated animate__fadeIn" id="customer_chat_<?= $sec3->id; ?>"
            style="display: none;">
            <div class="header-section" style="background:#0dc152;">
                <img class="back-chat-section" src="<?= base_url(); ?>assets/images/whatsapp/ic_back_btn.png"
                    onclick="backListChat(<?= $sec3->id; ?>);">
                <div class="header-avatar-section">
                    <div class="avatar">
                        <img class="avatar"
                            style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;"
                            src="https://admin.progimedia.com/upload/wa_image/<?= $sec3->image; ?>">
                    </div>
                </div>
                <div class="header-desc-section">
                    <h3><?= $sec3->nama; ?></h3>
                    <?php
                        $phone_split = implode(" ", str_split('+62' . $sec3->phone, 4)) . " ";
                        ?>
                    <p><i class="fa fa-phone"></i> <?php echo $phone_split; ?></p>
                </div>
            </div>
            <div class="inside-chat-section">
                <div class="chat">
                    <div class="inside-chat">
                        <span>Halo saya <?= ucwords(strtolower($sec3->nama)); ?>, Customer Service dari Cabang
                            <?= ucwords(strtolower($sec3->cabang)); ?>.</span>
                    </div>
                    <div class="time">
                        <span><?php echo date('H:i'); ?><img
                                src="<?= base_url(); ?>assets/images/whatsapp/ic_check_wa.png"></span>
                    </div>
                </div>
                <div class="chat">
                    <div class="inside-chat">
                        <span>Ada yang bisa saya bantu ?</span>
                    </div>
                    <div class="time">
                        <span><?php echo date('H:i'); ?><img
                                src="<?= base_url(); ?>assets/images/whatsapp/ic_check_wa.png"></span>
                    </div>
                </div>
            </div>
            <div class="box-chat-section">
                <div class="text">
                    <input type="hidden" id="telp_wa_<?= $sec3->id; ?>" name="telp_wa_<?= $sec3->id; ?>"
                        value="<?= $sec3->phone; ?>">
                    <input type="text" class="input-message-whatsapp" id="chat_wa_<?= $sec3->id; ?>"
                        name="chat_wa_<?= $sec3->id; ?>" onchange="textChatWhatsapp(<?= $sec3->id; ?>);"
                        onclick="textChatWhatsapp(<?= $sec3->id; ?>);"
                        onmouseover="textChatWhatsapp(<?= $sec3->id; ?>);"
                        onmouseout="textChatWhatsapp(<?= $sec3->id; ?>);"
                        onkeydown="textChatWhatsapp(<?= $sec3->id; ?>);" value="" placeholder="Type a message">
                </div>
                <div class="button-send">
                    <a href="" id="btn_wa_<?= $sec3->id; ?>" target="_blank"><img
                            src="<?= base_url(); ?>assets/images/whatsapp/ic_send_message.png"></a>
                </div>
            </div>
        </div>
        <? } ?>
    </div>
</div>
<!-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->

<!-- <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" /> -->

<script>
//     $(document).ready(function() {

//     setTimeout(function() {

//       $("#whatsapp_chat").trigger('click');

//     }, 3000);

// });



function chatWhatsApp() {
    var cek_class = document.getElementById('whatsapp-chat-popup');
    if (cek_class.classList.contains('animate__bounceOutDown')) {
        cek_class.classList.remove("animate__bounceOutDown");
        cek_class.classList.add("animate__bounceInUp");
        cek_class.style.display = "block";
    } else {
        cek_class.classList.remove("animate__bounceInUp");
        cek_class.classList.add("animate__bounceOutDown");
    }
}

function chatCustomer(id) {
    var list_chat = document.getElementById("list-chat-section");
    var chat = document.getElementById('customer_chat_' + id);

    if (id != 0 && id != '') {
        list_chat.style.display = "none";
        chat.style.display = "block";
    }
}



function closechatWhatsApp() {
    var cek_class = document.getElementById('whatsapp-chat-popup');
    if (cek_class.classList.contains('animate__bounceInUp')) {
        cek_class.classList.remove("animate__bounceInUp");
        cek_class.classList.add("animate__bounceOutDown");
    }
}





function backListChat(id) {
    var list_chat = document.getElementById("list-chat-section");
    var chat = document.getElementById('customer_chat_' + id);
    if (id != 0 && id != '') {
        chat.style.display = "none";
        list_chat.style.display = "block";
        $("#chat_wa_" + id).val('');
    }
}



function textChatWhatsapp(id) {
    var link_wa = 'https://api.whatsapp.com/send?';
    if (id != 0 && id != '') {
        var telp = $("#telp_wa_" + id).val();
        var chat = $("#chat_wa_" + id).val();
        var link = 'https://api.whatsapp.com/send?phone=62' + telp + '&text=' + chat;
        var btn = document.getElementById("btn_wa_" + id);
        btn.setAttribute("href", link);
    }
}
</script>