<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package marcapagina
 */

get_header(); ?>
<!--<div id="fh5co-intro-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h2>Lesser is a creative agency that love to create functional website</h2>
			</div>
		</div>
	</div>
</div>-->
<div id="fh5co-featured-section">
	<div class="container">
		<div class="row mosaico-principal">
			<div class="col-md-6">
				<a href="#" class="featured-grid" style="background-image: url(<?php echo get_template_directory_uri() ?>/images//image_6.jpg);">
					<div class="desc">
						<h3>Work with love</h3>
						<span>Web Design</span>
					</div>
				</a>
			</div>
			<div class="col-md-6">
				<a href="#" class="featured-grid featured-grid-2" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/image_2.jpg);">
					<div class="desc">
						<h3>Music Lover</h3>
						<span>Application</span>
					</div>
				</a>
				<div class="row">
					<div class="col-md-6">
						<a href="#" class="featured-grid featured-grid-2" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/image_3.jpg);">
							<div class="desc">
								<h3>Travel</h3>
								<span>Illustration</span>
							</div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="#" class="featured-grid featured-grid-2" style="background-image: url(<?php echo get_template_directory_uri() ?>/images//image_8.jpg);">
							<div class="desc">
								<h3>Captured</h3>
								<span>Photo</span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="fh5co-services-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2>Our Awesome Services</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 services-inner text-center">
				<span><i class="sl-icon-graph"></i></span>
				<h3>Finance Dashboard</h3>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			</div>
			<div class="col-md-4 services-inner text-center">
				<span><i class="sl-icon-heart"></i></span>
				<h3>Made with Love</h3>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			</div>
			<div class="col-md-4 services-inner text-center">
				<span><i class="sl-icon-key"></i></span>
				<h3>Help &amp; Support</h3>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			</div>

		</div>
	</div>
</div>
<div id="fh5co-blog-section" class="fh5co-grey-bg-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2>Our Recent Blog</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 text-center">
				<div class="blog-inner">
					<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/images//image_4.jpg" alt="Blog"></a>
					<div class="desc">
						<h3><a href="#">New iPhone 6 Released</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<p><a href="#" class="btn btn-primary btn-outline with-arrow">Read More<i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<div class="blog-inner">
					<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/images//image_5.jpg" alt="Blog"></a>
					<div class="desc">
						<h3><a href="#">Start your day with a beautiful appearance</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<p><a href="#" class="btn btn-primary btn-outline with-arrow">Read More<i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
			</div>
			<div class="col-md-4 text-center">
				<div class="blog-inner">
					<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/images//image_6.jpg" alt="Blog"></a>
					<div class="desc">
						<h3><a href="#">Bookmarksgrove right</a></h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<p><a href="#" class="btn btn-primary btn-outline with-arrow">Read More<i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="fh5co-client-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2>Our Happy Clients</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 text-center">
				<div class="testimony">
					<span class="quote"><i class="icon-quote-right"></i></span>
					<blockquote>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<span>Athan Smith, via <a href="#" class="icon-twitter twitter-color"></a></span>
					</blockquote>
				</div>
			</div>
			<div class="col-md-6 text-center">
				<div class="testimony">
					<span class="quote"><i class="icon-quote-right"></i></span>
					<blockquote>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<span>Athan Smith, via <a href="#" class="icon-google-plus googleplus-color"></a></span>
					</blockquote>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
//get_sidebar();
get_footer();
