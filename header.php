<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package revisor
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Остались вопросы? Закажите обратный звонок!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<?php echo do_shortcode( '[contact-form-7 id="252" title="Обратный звонок"]' ); ?>
      </div>
    </div>
  </div>
</div>
		<header id="header" class="">
			<nav id="navbar" class="navbar navbar-expand-lg navbar-light is-navbar">
				<div class="container">
					<a class="navbar-brand is-navbar__brand" href="/">
						<img class="is-navbar__brand-logo" style="max-width:none;" src="<? echo get_template_directory_uri() . '/assets/img/revisor_logo.svg' ?>" alt="Ревизор - бухгалтерские и юридические услуги">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
				aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse is-navbar__collapse" id="navbarSupportedContent-333">
						<div class="row">
							<div class="col-md-12">
								<a href="<? echo get_option( 'revisor_address_link' ); ?>" target="_blank">
									<i class="fas fa-map-marker-alt "></i>
									<? echo get_option( 'revisor_address' ); ?>
								</a>
								<a href="mailto:<? echo get_option( 'revisor_email' ); ?>">
									<i class="fas fa-envelope"></i>
									<? echo get_option( 'revisor_email' ); ?>
								</a>
								<a href="<? echo get_option( 'revisor_inst' ); ?>">
									<i class="fab fa-instagram"></i>
									revizor_22
								</a>
							</div>
							<div class="col-md-12">
								<?
		              wp_nav_menu( array(
		                  'theme_location'  => '',
		                  'depth'           => 2,
		                  'menu_class'      => 'navbar-nav mr-auto justify-center text-center',
		                  'menu_id'         => 'alaBaiTopMenuList',
		                  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
		                  'walker'          => new WP_Bootstrap_Navwalker(),
		              ) );
		            ?>
							</div>
						</div>
						<div class="col-md-4 is-header__phone-block">
						<div class="row" style="margin-top:-45px;">
							<div class="col-md-12 is-header__phone-item-block">
								<a class="is-header__phone" href="tel:<? echo get_option( 'revisor_phone' ); ?>" style="font-weight: 700 !important;font-size: 20px !important;">
									<? echo get_option( 'revisor_phone' ); ?>
								</a>
							</div>
							<div class="col-md-12 is-header__callback-block">
								<a
									class="is-header__callback"
									href="#"
									data-toggle="modal"
									data-target="#exampleModal"
								>
									<img src="<? echo get_template_directory_uri() . '/assets/img/headerCallIco.svg' ?>" alt="Заказть звонок">
									<span>Заказать звонок</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
		</header>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
