
</main>

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
					<p>&copy; <?php date("Y"); ?> Erick Laxamana. All Rights Reserved.</p>
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
			var minusTop = "<?php echo is_user_logged_in() ? '132' : '100'; ?>";
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