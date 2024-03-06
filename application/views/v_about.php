<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>tentang</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Map -->

<div class="contact_map">

    <div class="col">
        <div id="mapid" style="height: 400px;"></div>
               
</div >


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


    <script>
        const map = L.map('mapid').setView([-4.339978738596244, 119.8696063423992], 13);

        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

         L.marker([-4.339978738596244, 119.8696063423992]).addTo(map)
		.bindPopup('MAS PP YASRIB LAPAJUNG').openPopup(); 

    </script>



