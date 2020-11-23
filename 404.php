<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
							404 - Страница не найдена
						</li>
					</ol>
				</nav>
			</div>
		<div id="services" class="is-services container">
			<div class="row">
				<h2>
					Страница не найдена
				</h2>
			</div>
			<div class="container">
				<p>
					Ошибка 404. Страница, которую Вы искали, не найдена. Попробуйте указать корректный адрес
				</p>
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
