<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Detail Berita</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Contact -->




    <div class="contact_info_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                </div>

                <!-- Blog -->

                <div class="blog">
                    <div class="container">
                        <div class="row">

                            <!-- Blog Content -->
                            <div class="col-lg-8">
                                <div class="blog_content">
                                    <div class="blog_title"><?= $berita->judul_berita; ?></div>
                                    <div class="blog_meta">
                                        <ul>
                                            <li>Tanggal Posting <a href="#"><?= $berita->tgl_berita; ?></a></li>
                                            <li>By <a href="#"><?= $berita->nama_user; ?></a></li>
                                        </ul>
                                    </div>
                                    <div class="blog_image"><img src="<?= base_url('gambar_berita/').$berita->gambar_berita; ?>" alt=""></div>
                                    <p><?= $berita->isi_berita; ?></p>
                                   
                                <!-- Comments -->
                                <div class="comments_container">
                                    <div class="comments_title"><span>30</span> Comments</div>
                                    <ul class="comments_list">
                                        <li>
                                            <div class="comment_item d-flex flex-row align-items-start jutify-content-start">
                                                <div class="comment_image">
                                                    <div><img src="images/comment_1.jpg" alt=""></div>
                                                </div>
                                                <div class="comment_content">
                                                    <div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
                                                        <div class="comment_author"><a href="#">Jennifer Aniston</a></div>
                                                        <div class="comment_rating">
                                                            <div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
                                                        </div>
                                                        <div class="comment_time ml-auto">October 19,2018</div>
                                                    </div>
                                                    <div class="comment_text">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
                                                    </div>
                                                    <div class="comment_extras d-flex flex-row align-items-center justify-content-start">
                                                        <div class="comment_extra comment_likes"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i><span>108</span></a></div>
                                                        <div class="comment_extra comment_reply"><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>Reply</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div class="comment_item d-flex flex-row align-items-start jutify-content-start">
                                                        <div class="comment_image">
                                                            <div><img src="images/comment_2.jpg" alt=""></div>
                                                        </div>
                                                        <div class="comment_content">
                                                            <div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
                                                                <div class="comment_author"><a href="#">John Smith</a></div>
                                                                <div class="comment_rating">
                                                                    <div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
                                                                </div>
                                                                <div class="comment_time ml-auto">October 19,2018</div>
                                                            </div>
                                                            <div class="comment_text">
                                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
                                                            </div>
                                                            <div class="comment_extras d-flex flex-row align-items-center justify-content-start">
                                                                <div class="comment_extra comment_likes"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i><span>108</span></a></div>
                                                                <div class="comment_extra comment_reply"><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>Reply</span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="comment_item d-flex flex-row align-items-start jutify-content-start">
                                                <div class="comment_image">
                                                    <div><img src="images/comment_3.jpg" alt=""></div>
                                                </div>
                                                <div class="comment_content">
                                                    <div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
                                                        <div class="comment_author"><a href="#">Jane Austen</a></div>
                                                        <div class="comment_rating">
                                                            <div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
                                                        </div>
                                                        <div class="comment_time ml-auto">October 19,2018</div>
                                                    </div>
                                                    <div class="comment_text">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
                                                    </div>
                                                    <div class="comment_extras d-flex flex-row align-items-center justify-content-start">
                                                        <div class="comment_extra comment_likes"><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i><span>108</span></a></div>
                                                        <div class="comment_extra comment_reply"><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><span>Reply</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="add_comment_container">
                                        <div class="add_comment_title">Write a comment</div>
                                        <div class="add_comment_text">Your email address will not be published. Required fields are marked *</div>
                                        <form action="#" class="comment_form">
                                            <div>
                                                <div class="form_title">Review*</div>
                                                <textarea class="comment_input comment_textarea" required="required"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 input_col">
                                                    <div class="form_title">Name*</div>
                                                    <input type="text" class="comment_input" required="required">
                                                </div>
                                                <div class="col-md-6 input_col">
                                                    <div class="form_title">Email*</div>
                                                    <input type="text" class="comment_input" required="required">
                                                </div>
                                            </div>
                                            <div class="comment_notify">
                                                <input type="checkbox" id="checkbox_notify" name="regular_checkbox" class="regular_checkbox checkbox_account" checked>
                                                <label for="checkbox_notify"><i class="fa fa-check" aria-hidden="true"></i></label>
                                                <span>Notify me of new posts by email</span>
                                            </div>
                                            <div>
                                                <button type="submit" class="comment_button trans_200">submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Blog Sidebar -->
                            <div class="col-lg-4">
                                <div class="sidebar">

                                    <!-- Categories -->
                                    <div class="sidebar_section">
                                        <div class="sidebar_section_title">Categories</div>
                                        <div class="sidebar_categories">
                                            <ul class="categories_list">
                                                <li><a href="#" class="clearfix">Art & Design<span>(25)</span></a></li>
                                                <li><a href="#" class="clearfix">Business<span>(10)</span></a></li>
                                                <li><a href="#" class="clearfix">IT & Software<span>(22)</span></a></li>
                                                <li><a href="#" class="clearfix">Languages<span>(12)</span></a></li>
                                                <li><a href="#" class="clearfix">Programming<span>(18)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Latest News -->
                                    <div class="sidebar_section">
                                        <div class="sidebar_section_title">Latest Courses</div>
                                        <div class="sidebar_latest">

                                            <!-- Latest Course -->
                                            <div class="latest d-flex flex-row align-items-start justify-content-start">
                                                <div class="latest_image">
                                                    <div><img src="images/latest_1.jpg" alt=""></div>
                                                </div>
                                                <div class="latest_content">
                                                    <div class="latest_title"><a href="course.html">How to Design a Logo a Beginners Course</a></div>
                                                    <div class="latest_date">november 11, 2017</div>
                                                </div>
                                            </div>

                                            <!-- Latest Course -->
                                            <div class="latest d-flex flex-row align-items-start justify-content-start">
                                                <div class="latest_image">
                                                    <div><img src="images/latest_2.jpg" alt=""></div>
                                                </div>
                                                <div class="latest_content">
                                                    <div class="latest_title"><a href="course.html">Photography for Beginners Masterclass</a></div>
                                                    <div class="latest_date">november 11, 2017</div>
                                                </div>
                                            </div>

                                            <!-- Latest Course -->
                                            <div class="latest d-flex flex-row align-items-start justify-content-start">
                                                <div class="latest_image">
                                                    <div><img src="images/latest_3.jpg" alt=""></div>
                                                </div>
                                                <div class="latest_content">
                                                    <div class="latest_title"><a href="course.html">The Secrets of Body Language</a></div>
                                                    <div class="latest_date">november 11, 2017</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Gallery -->
                                    
                                   

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