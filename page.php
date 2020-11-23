<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package revisor
 */

get_header();
?>

	<section id="services-page">
		<div class="container">
			<div class="is-breadcrumb-list">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="/">
									Главная
								</a>
							</li>
							<li class="breadcrumb-item active">
								<? the_title(); ?>
							</li>
						</ol>
					</nav>
				</div>
			<div id="services" class="is-services">
				<div class="row">
					<h2>
						<? the_title(); ?>
					</h2>
				</div>
				<div class="row is-services__items">
					<div class="col-md-12">
						<? the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="feedback" class="is-feedback" style="background:url(/assets/img/feedbackBg.jpg)">
		<div class="container">
			<h2>
				Остались вопросы?
				<span>
					Мы поможем Вам!
				</span>
			</h2>
			<div class="row">
				<div class="col-md-12 col-lg-6">
					<?php echo do_shortcode( '[contact-form-7 id="252" title="Обратный звонок"]' ); ?>
				</div>
				<div class="col-md-12 col-lg-6" />
			</div>
		</div>
	</section>

<?php
get_footer();
