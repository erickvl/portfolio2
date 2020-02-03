
</main>

<?php if ( get_field('google_map') ) : ?>

	<div id="google_map_con">
		<iframe src="<?php the_field('google_map'); ?>" height="450" frameborder="0" style="width: 100%; border:0; display: block;" allowfullscreen="" id="google_map"></iframe>
	</div>

<?php endif; ?>

<footer id="footer" class="footer">
	<div class="footer-middle">
		<div class="container">
			<div class="row">

                <div class="col-lg-4"></div>

                <div class="col-lg-4"></div>

                <div class="col-lg-4"></div>

                <div class="col-lg-4"></div>

			</div>
		</div>
	</div>
    
    <div class="footer-copyright">
		<div class="container">
			<div class="row">
					<p>&copy; <?php date("Y"); ?> Erick Laxamana. All Rights Reserved. 
				
						<?php if ( get_field('email_address') ) : ?>
							<a href="mailto:<?php the_field('email_address'); ?>" title="Email Address" class="contact-links"><i class="far fa-envelope"></i></a>
						<?php endif; ?>

						<?php if ( get_field('phone_number') ) : ?>
							<a href="tel:<?php the_field('phone_number'); ?>" title="Phone Number" class="contact-links"><i class="fas fa-phone-square-alt"></i></a>
						<?php endif; ?>

						<?php if ( get_field('facebook_link') ) : ?>
							<a href="<?php the_field('facebook_link'); ?>" title="Facebook" class="contact-links"><i class="fab fa-facebook-square"></i></a>
						<?php endif; ?>

						<?php if ( get_field('instagram_link') ) : ?>
							<a href="<?php the_field('instagram_link'); ?>" title="Instagram" class="contact-links"><i class="fab fa-instagram"></i></a>
						<?php endif; ?>

						<?php if ( get_field('twitter_link') ) : ?>
							<a href="<?php the_field('twitter_link'); ?>" title="Twitter" class="contact-links"><i class="fab fa-twitter-square"></i></a>
						<?php endif; ?>

					</p>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>

<script>
	jQuery(document).ready(function($) {

		$("#experience .exp-content.left-con ul").attr('dir', 'rtl');

		$(".main-navigation a").on('click', function(e) {
			var href = $(this).attr('href');
			var minusTop = "<?php echo is_user_logged_in() ? '182' : '150'; ?>";
			if ( !href.split('#')[0] ) {
				e.preventDefault();
				$( 'html, body' ).animate({
					scrollTop: $( $(this).attr('href') ).offset().top - minusTop
				}, 1000);
			}
		});

		$("#section1 a").on('click', function(e) {
			console.log( $(this).attr('href') );
			var href = $(this).attr('href');
			var minusTop = "<?php echo is_user_logged_in() ? '132' : '100'; ?>";
			if ( !href.split('#')[0] ) {
				e.preventDefault();
				$( 'html, body' ).animate({
					scrollTop: $( $(this).attr('href') ).offset().top - minusTop
				}, 1000);
			}
		});

	});
</script>

</body>
</html>