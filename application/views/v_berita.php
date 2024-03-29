<!-- Home -->

<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>Berita</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>


    <!-- Berita -->


	<div class="courses">
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-8">
                            <h2>Berita</h2>
					<div class="courses_container">
						<div class="row courses_row">
							
							<!-- Course -->
							<?php foreach ($berita as $key => $value) {?>
								 
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="<?= base_url('gambar_berita/'). $value->gambar_berita; ?>" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="<?= base_url('/home/detail_berita/'.$value->slug_berita); ?>"><?= $value->judul_berita; ?></a></h3>
										<div class="course_teacher">Mr. John Taylor</div>
										<div class="course_text">
											<p><?= substr(strip_tags($value->isi_berita),0,72); ?>....</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<!-- <div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>20 Student</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											<div class="course_price ml-auto">$130</div> -->
										</div>
									</div>
								</div>
							</div>
							<?php } ?>	

						</div>
						<div class="row pagination_row">
							<div class="col">
								
								<?php if (isset($paginasi)) {
									echo $paginasi;
								} ?>

							</div>
						</div>
					</div>
				</div>

				<!-- Courses Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Categories -->
						<!-- <div class="sidebar_section">
							<div class="sidebar_section_title">Categories</div>
							<div class="sidebar_categories">
								<ul>
									<li><a href="#">Art & Design</a></li>
									<li><a href="#">Business</a></li>
									<li><a href="#">IT & Software</a></li>
									<li><a href="#">Languages</a></li>
									<li><a href="#">Programming</a></li>
								</ul>
							</div>
						</div> -->

						<!-- Latest Course -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Berita Terkini</div>
							<div class="sidebar_latest">
									<?php foreach ($latest_berita as $key => $value) { ?>
										
								
								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="<?= base_url('gambar_berita/').$value->gambar_berita; ?>" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="<?= base_url('home/detail_berita/').$value->slug_berita; ?>"><?= $value->judul_berita; ?></a></div>
										<div class="latest_price">Free</div>
									</div>
								</div>
							     <?php } ?>			
							</div>
						</div>

						<!-- Gallery -->
						<div class="sidebar_section">
							
						</div>

						<!-- Tags -->
						<!-- <div class="sidebar_section">
							<div class="sidebar_section_title">Tags</div>
							<div class="sidebar_tags">
								<ul class="tags_list">
									<li><a href="#">creative</a></li>
									<li><a href="#">unique</a></li>
									<li><a href="#">photography</a></li>
									<li><a href="#">ideas</a></li>
									<li><a href="#">wordpress</a></li>
									<li><a href="#">startup</a></li>
								</ul>
							</div>
						</div> -->

						<!-- Banner -->
						<!-- <div class="sidebar_section">
							<div class="sidebar_banner d-flex flex-column align-items-center justify-content-center text-center">
								<div class="sidebar_banner_background" style="background-image:url(images/banner_1.jpg)"></div>
								<div class="sidebar_banner_overlay"></div>
								<div class="sidebar_banner_content">
									<div class="banner_title">Free Book</div>
									<div class="banner_button"><a href="#">download now</a></div>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
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