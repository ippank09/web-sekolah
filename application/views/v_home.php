<!-- Home -->

<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<?php foreach ($berita as $key => $value) { ?>
				
				
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(<?= base_url('gambar_berita/').$value->gambar_berita ?>"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title"> <a href="<?= base_url('/home/detail_berita/'.$value->slug_berita); ?>"><?= $value->judul_berita; ?>"> <?= $value->judul_berita; ?></a></div>
									<div class="home_slider_subtitle"><p><?= substr(strip_tags($value->isi_berita),0,72); ?>....</p></div>
									<div class="home_slider_form_container">
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                 <?php } ?>
				

				<!-- Home Slider Item -->
				

			</div>
		</div>
        <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>

<!-- Features -->

<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Selamat Datang</h2>
						
					</div>
				</div>
			</div>
			<div class="row features_row">
				<?php  foreach ($galeri2 as $key => $value) { ?>
					
								<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="<?= base_url('galeri_foto/').$value->sampul;?>" height="100" width="100"></div>
						
						
					</div>
					<h3 class="feature_title text-center"><a href="<?= base_url('home/galeri'); ?>"><?= $value->nama_galeri; ?></a></h3>
					<div class="feature_text text-center">Item : <?=$value->jml_foto;?></div>
				</div>

				<?php } ?>

			</div>
		</div>
	</div>

	<!-- Popular Courses -->

	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>template/front-end/images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Berita</h2>
			
					</div>
				</div>
			</div>
			<div class="row courses_row">
				
				<?php foreach ($berita as $key => $value) { ?>
				
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="<?= base_url('gambar_berita/').$value->gambar_berita ?>" alt=""></div>
						<div class="course_body">
							<h3 class="course_title"><a href="course.html"><?= substr(strip_tags($value->judul_berita),0,72); ?></a></h3>
							<div class="course_teacher">Diposting oleh : <?= $value->nama_user; ?></div>
							<div class="course_text">
								<p><?= substr(strip_tags($value->isi_berita),0,72); ?>...</p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									<span>20 Student</span>
								</div>
								
							</div>
						</div>
					</div>
				</div>
					<?php } ?>
				<!-- Course -->
				

				<!-- Course -->
				

			</div>
			<div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="#">view all courses</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Counter -->

	

	<!-- Events -->

	

	<!-- Team -->

	<div class="team">
		<div class="team_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>template/front-end/images/team_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Guru dan Staff</h2>
						
					</div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Item -->
				<?php foreach ($guruHome as $key => $value) { ?>
					
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="<?= base_url('foto/'). $value->foto; ?>" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#"><?= $value->nama_guru; ?></a></div>
							<div class="team_subtitle"><?= $value->nama_mapel; ?></div>
							<div class="social_list">
								
							</div>
						</div>
					</div>
				</div>
		    	<?php } ?>
				

			</div>
		</div>
	</div>

	<!-- Latest News -->



 <!--Map -->

		   

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>template/front-end/images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content -->
						<div class="newsletter_content text-lg-left text-center">
							
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




	