<?
  /* Template name: Услуга */

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
              <a href="/services">
                Услуги компании
              </a>
            </li>
            <li class="breadcrumb-item active">
              <? the_title(); ?>
            </li>
          </ol>
        </nav>
      </div>
      <h2>
        <? the_title(); ?>
      </h2>
    </div>
    <div class="row is-services-item-advantage">
      <div class="col-md-6 is-services-item-advantage__descr">
        <h3>
          <? echo get_field('advantages_title'); ?>
        </h3>
        <ul class="is-services-item-advantage__list">
          <?php while ( have_rows('advantages_list') ) : the_row(); ?>
          <li>
            <? echo get_sub_field('advantages_list_item'); ?>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
      <div class="col-md-6 is-services-item-advantage__img" style="background:url(<? echo get_field('advantages_bg'); ?>);"></div>
    </div>
    <div class="container is-services-item__results">
      <div class="row">
        <h3>
          <? echo get_field('forwho_title'); ?>
        </h3>
        <div class="col-md-12">
          <ul class="is-services-item__results-list">
            <?php while ( have_rows('forwho_list') ) : the_row(); ?>
            <li>
              <? echo get_sub_field('forwho_list_item'); ?>
            </li>
            <?php endwhile; ?>
          </ul>
        </div>
      </div>
      <div class="row">
        <h3 style="margin-top:2.8125rem">
          <? echo get_field('results_title'); ?>
        </h3>
        <div class="col-md-12">
          <ul class="is-services-item__results-list">
            <?php while ( have_rows('results_list') ) : the_row(); ?>
            <li>
              <? echo get_sub_field('results_list_item'); ?>
            </li>
            <?php endwhile; ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="row is-services-item-sphere">
      <div class="col-md-6 is-services-item-sphere__img" style="background:url(<? echo get_field('sphere_bg'); ?>);"></div>
      <div class="col-md-6 is-services-item-sphere__descr">
        <h3>
          <? echo get_field('sphere_title'); ?>
        </h3>
        <ul class="is-services-item-sphere__list">
          <?php while ( have_rows('sphere_list') ) : the_row(); ?>
          <li>
            <? echo get_sub_field('sphere_list_item'); ?>
          </li>
          <?php endwhile; ?>
        </ul>
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
