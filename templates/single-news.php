<?
  /* Template name: Новость */

  get_header();
?>
  <section id="services-item" class="is-services-item">
    <div class="container">
      <div class="is-breadcrumb-list">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/">
                Главная
              </a>
            </li>
            <li class="breadcrumb-item">
              <a href="/news">
                Новости компании
              </a>
            </li>
            <li class="breadcrumb-item active">
              <? the_title(); ?>
            </li>
          </ol>
        </nav>
      </div>
      <h2 v-if="newsItemPageData.title">
        <? the_title(); ?>
      </h2>
      <p class="is-news__page-date">
        Опубликовано:
        <span style="font-weight:200">
          <? the_date(); ?>
        </span>
      </p>
		<p class="is-news__page-date">
        Автор:
        <span style="font-weight:200">
          <? the_author(); ?>
        </span>
      </p>
      <div class="is-news__page-content">
        <div>
          <? the_content(); ?>
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
<?
  get_footer();
?>
