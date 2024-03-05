<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="contact_info_container">
    <div class="container">
        <div class="row">

            <div class="col-sm-4 text-center">
                <img src="<?= base_url('foto_kepsek/') . $profile->foto_kepsek; ?>" width="230" height="280">
                <br>
                <h3><?= $profile->kepala_sekolah; ?></h3>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                  <div class="form_title">  <label for="">Nama Sekolah</label></div>
                    <input type="text" name="nama_sekolah" value="<?= $profile->nama_sekolah ?>" placeholder="Nama Sekolah" class="comment_input" readonly>
                </div>
                    <br>

                <div class="form-group">
                <div class="form_title">  <label for="">No Telpon</label></div>
                    <input type="text" name="nama_sekolah" value="<?= $profile->no_telp ?>" placeholder="Nama Sekolah" class="comment_input" readonly>
                </div>
            </div>

        </div>
    </div>
</div>




<!-- Newsletter -->

<div class="newsletter">
    <div class="newsletter_background" style="background-image:url(<?= base_url() ?>template/front-end/images/newsletter_background.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

                    <!-- Newsletter Content -->
                    <div class="newsletter_content text-lg-left text-center">
                        <div class="newsletter_title">sign up for news and offers</div>
                        <div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
                    </div>

                    <!-- Newsletter Form -->
                    <div class="newsletter_form_container ml-lg-auto">
                        <form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
                            <input type="email" class="newsletter_input" placeholder="Your Email" required="required">
                            <button type="submit" class="newsletter_button">subscribe</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>