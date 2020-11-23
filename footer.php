<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package revisor
 */

?>

<footer id="footer" class="">
	<nav class="navbar navbar-expand-lg navbar-light is-navbar">
	<div class="container">
		<a class="navbar-brand is-navbar__brand" href="/">
			<img class="is-navbar__brand-logo" style="max-width:none;" src="<? echo get_template_directory_uri() . '/assets/img/revisor_logo.svg' ?>" alt="Ревизор - бухгалтерские и юридические услуги">
		</a>
		<button class="navbar-toggler" type="button">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse container is-footer__collapse">
			<div class="col-md-8">
				<div class="row pt-3">
					<div class="col-md-12">
						<a href="<? echo get_option( 'revisor_address_link' ); ?>" target="_blank">
							<i class="fas fa-map-marker-alt"></i>
							<? echo get_option( 'revisor_address' ); ?>
						</a>
						<a href="<? echo get_option( 'revisor_email' ); ?>" target="_blank">
							<i class="fas fa-envelope"></i>
							<? echo get_option( 'revisor_email' ); ?>
						</a>
					</div>
					<div class="col-md-12 justify-content-center">
						<div style="margin-bottom:.5em">
							<a class="btn d-none" href="<? echo get_option( 'revisor_vk' ); ?>" target="_blank">
								<i class="fab fa-vk"></i>
							</a>
							<a class="btn d-none" href="<? echo get_option( 'revisor_fb' ); ?>" target="_blank">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a class="btn d-none" href="<? echo get_option( 'revisor_ok' ); ?>" target="_blank">
								<i class="fab fa-odnoklassniki"></i>
							</a>
							<a class="btn d-none" href="<? echo get_option( 'revisor_mailru' ); ?>" target="_blank">
								<i class="fas fa-at"></i>
							</a>
							<a class="btn d-none" href="<? echo get_option( 'revisor_tw' ); ?>" target="_blank">
								<i class="fab fa-twitter"></i>
							</a>
							<a class="btn" href="<? echo get_option( 'revisor_inst' ); ?>" target="_blank">
								<i class="fab fa-instagram"></i>
							</a>
							<p class="text-center mt-3" style="font-size:.75rem;display: inline-table;">
								<img src="<? echo get_template_directory_uri(). '/assets/img/msp_logo.webp' ?>" alt="" style="max-height:42px;">
								<br>
								<span class="text-center">
									При поддержке фонда МСП
								</span>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12" style="margin-top:.5em">
								<a class="is-footer__phone" href="tel:<? echo get_option( 'revisor_phone' ); ?>">
									<? echo get_option( 'revisor_phone' ); ?>
								</a>
							</div>
							<div class="col-md-12"  style="margin-top:.5em">
								<a v-if="contactsItemsInfo.acf" class="is-footer__dev-link" href="https://alianscompany.ru" target="_blank">
									Разработка сайта <img class="is-footer__dev-img" src="/assets/img/alians_logo.svg" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>
<a id="toTop" style="position:fixed;bottom:25px;right:25px;color:#de3131" href="#" >
	<i class="fas fa-chevron-up fa-2x"></i>
</a>
</footer>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
	$(function() {
		$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();
			} else {
			$('#toTop').fadeOut();
			}
			});
		$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},1000);
		});
	});
</script>
<?php wp_footer(); ?>

</body>
</html>
