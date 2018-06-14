<?php
/**
 * The template for displaying the footer.
 *
 * @package rafaelsc_inhabitent_Theme
 */
?>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="content-to-center"> 
					<div class="site-contact">
						<h2>Contact Info</h2>
						<ul class="fa-ul">
							<li><a class="email" href="mailto:info@inhabitent.com" rel="nofollow">
								<span class="fa-li"><i class="fas fa-envelope"></i></span>info@inhabitent.com</a></li>
							<li><a class="phone" href="tel:+17784567891" rel="nofollow">
								<span class="fa-li"><i class="fas fa-phone" data-fa-transform="flip-h"></i></span>+1 778-456-7891</a></li>
						</ul>
						<ul class="fa-ul socialNetwork">
							<li><a class="facebook" href="#" target="_black" rel="nofollow">
								<span class="fa-li"><i class="fab fa-facebook-f"></i></span>http://facebook.com/inhabitent</a></li>
							<li><a class="twitter" href="#" target="_black" rel="nofollow">
								<span class="fa-li"><i class="fab fa-twitter"></i></span>http://twitter.com/inhabitent</a></li>
							<li><a class="googlePlus" href="#" target="_black" rel="nofollow">
								<span class="fa-li"><i class="fab fa-google-plus-g"></i></span>http://google.com/+/inhabitent</a></li>
						</ul>
					</div>

					<?php
						if(is_active_sidebar('footer-sidebar')){
							dynamic_sidebar('footer-sidebar');
						}
					?>

					<div class="logo">
						<div class="screen-reader-text">Inhabitent Company Supply Co.</div>
					</div>
				</div>
                <div class="copyright content-to-center">
					<p>Copyright <i class="far fa-copyright"></i> 2016 Inhabitent</p>
                </div>
			</footer><!-- #colophon -->

		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
