<div class="services-area-home" id="services-area-home">
    <!-- <img src="assets/images/social-media/Frame 1802.svg" class="img-fluid img-bubble" alt=""> -->
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
</div>

<div class="contact-us">
    <div class="container">
        <header class="section-header" data-aos="fade-up" data-aos-duration="2000">
            <p>Contact Us</p>
        </header>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="2000">
                <?= $website->maps; ?>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="2000">
                <div class="contact-address-progi">
                    <div class="d-flex">
                        <div class="contact flex-fill">
                            <div class="icon-contact d-flex">
                                <img class="me-2" src="https://splcargo.co.id/img/icon/map.png" alt="">
                                <div class="contact-address">
                                    <h5>Alamat</h5>
                                    <?= $website->address; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12" data-aos="fade-up" data-aos-duration="2000">
                            <div class="d-sm-flex">
                                <div class="contact flex-sm-fill">
                                    <div class="icon-contact d-flex">
                                        <img class="me-2" src="https://splcargo.co.id/img/icon/telephone.png" alt="">
                                        <div class="contact-address">
                                            <?php
                                            $telpon = $website->telp;
                                            $t1 = substr($telpon, 0, 4);
                                            $t2 = substr($telpon, 4);
                                            $telp = $t1 . ' ' . $t2;
                                            ?>
                                            <h5>Telepon</h5>
                                            <p><?= $telp; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact flex-sm-fill">
                                    <div class="icon-contact d-flex">
                                        <img class="me-2" src="https://splcargo.co.id/img/icon/fax.png" alt="">
                                        <div class="contact-address">
                                            <h5>Fax</h5>
                                            <p><?= $website->fax1; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact flex-sm-fill">
                                    <div class="icon-contact d-flex">
                                        <img class="me-2" src="https://splcargo.co.id/img/icon/email.png" alt="">
                                        <div class="contact-address">
                                            <h5>Email</h5>
                                            <p><?= $website->email; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="help" data-aos="fade-up" data-aos-duration="2000">
            <div class="row">
                <div class="col-lg-12">
                    <form id="help" class="form-contact">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <h5><img src="https://splcargo.co.id/img/icon/user.png" alt="">Nama</h5>
                                    <input id="name" name="nama" type="text" class="form-control" placeholder="Nama"
                                        required>
                                </div>
                                <div class="form-group mb-3">
                                    <h5><img src="https://splcargo.co.id/img/icon/email.png" alt="">E-mail</h5>
                                    <input id="email" name="email" type="email" class="form-control" placeholder="Email"
                                        required>
                                </div>
                                <div class="form-group mb-3">
                                    <h5><img src="https://splcargo.co.id/img/icon/contact.png" alt="">Telepon</h5>
                                    <input id="telp" name="telp" type="text" class="form-control" placeholder="Telepon"
                                        required onkeypress="return hanyaAngka(event)">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <h5><img src="https://splcargo.co.id/img/icon/message.png" alt="">Alamat</h5>
                                    <textarea name="message" class="form-control" id="message" cols="0" rows="3"
                                        required maxlength="5000" placeholder="Alamat"></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <div id="recaptcha" class="g-recaptcha float-start"
                                        data-sitekey="<?php echo $this->config->item('google_key') ?>"
                                        data-callback="enableBtnkontak"></div>
                                    <div class="row-button text-center">
                                        <button type="submit" id="btn-validate" class="btn btn-primary"
                                            disabled="true">Kirim Pesan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
    return true;
}

function enableBtnkontak() {
    document.getElementById("btn-validate").disabled = false;
}

$(document).ready(function() {
    base_url = '<?= base_url() ?>';

    $("#help").submit(function() {
        $(".btn").attr("disabled", true);

        var data = {
            name: $("#name").val(),
            email: $("#email").val(),
            telp: $("#telp").val(),
            message: $("#message").val()
        }

        $.ajax({
            type: "POST",
            url: base_url + "bantuan",
            data: data,

            success: function(response) {
                $('.success').fadeIn(1000);
                $("#help .btn").attr("disabled", false);
                // alert("Terima Kasih, Pesan anda akan kami proses secepatnya.")
                setInterval(function() {
                    window.location = base_url;
                }, 3000)
            },
            error: function() {
                $(".error").fadeIn(1000);
                $("#help .btn").attr("disabled", false);
            }
        });
        return false;
    });
});
</script>