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
                    <div class="form_title"> <label for="">Nama Sekolah</label></div>
                    <input type="text" name="nama_sekolah" value="<?= $profile->nama_sekolah ?>" placeholder="Nama Sekolah" class="comment_input" readonly>
                </div>
                <br>

                <div class="form-group">
                    <div class="form_title"> <label for="">No Telpon</label></div>
                    <input type="text" name="nama_sekolah" value="<?= $profile->no_telp ?>" placeholder="Nama Sekolah" class="comment_input" readonly>
                </div>
            </div>

            <br>
            <br>

            <div class="col-sm-12">
                <div class="form-group text-center">
                    <label style="font-size: 23px;" for="">Visi</label>
                    <h3>Unggul dalam Prestasi, Berakhlakul Karimah, Terampil dan Mandiri</h3>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label style="font-size: 23px;" for="">Misi</label>
                    <div class="row" style="font-size: 20px;">
                        <ul>
                            <li>1. Menumbuhkembangkan lingkungan dan perilaku religius sehingga dapat mengamalkan dan menghayati agama secara nyata</li>
                            <li>2. Menyelenggarakan pendidikan untuk menumbuhkembangkan kemampuan berpikir aktif, kreatif dan Inovatif </li>
                            <li>          dalam memecahkan masalah</li>
                            <li>3. Menyelenggarakan pengembangan diri dan ekstrakulikuler sehingga dapat berkembang sesuai bakat dan minatnya.</li>
                            <li>4. Menumbuhkembangkan perilaku terpuji dan praktik nyata sehingga dapat menjadi teladan bagi masyarakat</li>
                        </ul>
                    </div>
                </div>
                        <br>
                        <br>
                <div class="form-group">
                    <label style="font-size: 23px;" for="">Tujuan</label>
                    <div class="row" style="font-size: 20px;">
                        <ul>
                            <li>1. Madrasah mengembangkan berbagai wadah/program penghayatan dan pengamalan agama</li>
                            <li>2. Madrasah mengembangkan Pembelajaran Aktif, Inovatif, Kreatif, Efektif dan Menyenangkan (PAIKEM).</li>
                            <li>3. Madrasah mengoptimalkan pengembangan diri dan ekstrakulikuler dalam bidang seni, olahraga dan Sains.</li>
                            <li>4. Madrasah memiliki alumni yang berkualitas, berkompeten, berakhlakul karimah, terampil dan Mandiri.</li>
                        </ul>
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
                            <!-- <div class="newsletter_title">sign up for news and offers</div>
                            <div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div> -->
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