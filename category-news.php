<?
  /* Template Name: Категория Новости */

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
                Новости компании
              </li>
            </ol>
          </nav>
        </div>
      <div id="services" class="is-services container">
        <div class="row">
          <h2>
            <?php single_cat_title(); ?>
          </h2>
        </div>
        <div class="container">
          <p>
            <?php echo category_description(); ?>
          </p>
        </div>
        <div class="row is-services__items">
          <?
            $args = array(
              'posts_per_page' => 10,
              'cat' => '2'
            );

            $query_services = new WP_Query( $args );
            if ( $query_services->have_posts() ) {
              while ( $query_services->have_posts() ) {
                $query_services->the_post();
                ?>
                <div class="col-md-6">
                  <div class="is-news__item card">
                    <div class="is-news__item-content">
                      <img src="<? echo get_template_directory_uri() . '/assets/img/servicesIcon1.svg' ?>" alt="<? the_title();?>">
                      <div>
                        <p>
                          <? the_title();?>
                        </p>
                        <p class="is-news__item-chevron">
                          <i class="fas fa-chevron-right"></i>
                        </p>
                        <a href="<? the_permalink();?>" class="btn is-btn is-router-link-to">
                          Подробнее
                        </a>
                      </div>
                      <div class="is-news__item-description">
                        <? the_excerpt(); ?>
                      </div>
                    </div>
                  </div>
                  <div class="is-news__item-bg"></div>
                </div>
                <?;
              }
            } else {
            }
            wp_reset_postdata();
          ?>
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
