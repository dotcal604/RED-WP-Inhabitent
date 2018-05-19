<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */
?>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<!-- 				
								<div class="site-info">
									<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
								</div> -->
				<div> 
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

					<div class="open-hours">
						<h2>Business Hours</h2>
						<div>
							<p><span>Monday-Friday: </span>9am to 5pm</p>
							<p><span>Saturday: </span>10am to 2am</p>
							<p><span>Sundays: </span>Closed</p>
						</div>
					</div>

					<div class="logo">
						<div class="screen-reader-text">Inhabitent Company Supply Co.</div>
					</div>
				</div>
                <div class="copyright">
                    Copyright <i class="far fa-copyright"></i> 2016 Inhabitent
                </div>
				
			</footer><!-- #colophon -->


		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
