<?php
/* Template name: Главная
*/

get_header();
?>
  <section id="slider" class="is-slider">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div uk-slider="center: false">
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                <ul class="uk-slider-items uk-child-width-1 uk-grid">
                  <?php while ( have_rows('slides') ) : the_row(); ?>
                    <li>
                        <div class="uk-card uk-card-default" style="background:none;box-shadow:none;">
                            <div class="uk-card-body">
                              <div class="is-carousel-item">
                                  <div class="row" style="margin-left:0;margin-right:0;">
                                    <div class="col-md-6">
                                      <div class="is-carousel-item__content">
                                        <div class="is-slider__text">
                                          <h2>
                                            <? echo get_sub_field('slide_title'); ?>
                                          </h2>
                                          <p>
                                            <? echo get_sub_field('slide_description'); ?>
                                          </p>
                                          <a class="btn is-btn-out" target="_blank" href="<? echo get_sub_field('slide_link'); ?>">
                                            Подробнее об акции
                                            <i class="fas fa-chevron-right"></i>
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <img src="<? echo get_sub_field('slide_img'); ?>" alt="slide.slide_title" class="img-fluid">
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </li>
                  <?php endwhile; ?>
                </ul>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="services" class="is-services">
    <div class="container">
      <div class="row">
        <h2>
          Услуги компании
        </h2>
      </div>
      <div class="row is-services__items">
        <?
          $args = array(
            'posts_per_page' => 9,
            'cat' => '3'
          );

          $query_services = new WP_Query( $args );
          if ( $query_services->have_posts() ) {
            while ( $query_services->have_posts() ) {
              $query_services->the_post();
              ?>
              <div class="col-md-6 col-lg-4">
                <div class="is-services__item card">
                  <div class="is-services__item-content">
                    <img src="<? echo get_template_directory_uri() . '/assets/img/servicesIcon1.svg' ?>" alt="<? the_title();?>">
                    <div>
                      <p>
                        <? the_title();?>
                      </p>
                      <p class="is-services__item-chevron">
                        <i class="fas fa-chevron-right"></i>
                      </p>
                      <a href="<? the_permalink();?>" class="btn is-btn is-router-link-to">
                        Подробнее об услуге
                      </a>
                    </div>
                    <p class="is-services__item-description">
                      <? echo get_field('service_longtitle');?>
                    </p>
                  </div>
                </div>
                <div class="is-services__item-bg"></div>
              </div>
              <?;
            }
          } else {
          }
          wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>
  <section id="about" class="is-about">
    <div class="row is-about__row" >
      <div class="col-md-9 col-lg-6 is-about__text">
        <h2>О компании</h2>
        <p><? echo get_field('home_about'); ?></p>
        <div class="is-home__about-block">
          <a class="btn is-btn-more is-router-link-to" href="/about">
            <div style="margin-right:.5em;" class="">
              <img src="<? echo get_template_directory_uri() . '/assets/img/btnMore.svg' ?>" alt="">
            </div>
            <div style="white-space: pre-wrap;line-height:1;padding-top:.4em" class="">Читать подробнее
<span>о компании</span>
            </div>
          </a>
          <a class="btn is-btn-video" data-fancybox href="<? echo get_field('home_about_video'); ?>">
            <div style="margin-right:.5em;" class="">
              <img src="<? echo get_template_directory_uri() . '/assets/img/btnVideo.svg' ?>" alt="">
            </div>
            <div style="white-space: pre-wrap;line-height:1;padding-top:.4em" class="">Смотреть видео
<span>о компании</span>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-3 col-lg-6 is-about__img" style="background:url(<? echo get_template_directory_uri().'/assets/img/homeAboutImg.webp'; ?>)">
      </div>
    </div>
  </section>
  <section id="certifs" class="is-certifs">
    <div class="container">
      <div class="row" style="background: rgba(0, 0, 0, 0) url(<? echo get_template_directory_uri().'/assets/img/homeCertifsImg.webp';?>);background-position:-30% 30%;background-repeat:no-repeat;">
        <div class="col-md-12 col-lg-4">
        </div>
        <div class="col-md-12 col-lg-8">
          <h2 class="is-certifs-title">
            Дипломы и сертификаты
          </h2>
          <div class="row">
            <?php while ( have_rows('certifs') ) : the_row(); ?>
              <div class="col-md-6 is-certifs-item">
                <div
                  data-fancybox="gallery"
                  href="<? echo get_sub_field('certifs_img'); ?>"
                  class="is-certifs-item-block"
                >
                  <img src="<? echo get_sub_field('certifs_img'); ?>" alt="<? echo get_sub_field('certifs_description'); ?>" class="img-fluid">
                  <div class="is-certifs-hover-bg">
                  </div>
                  <img class="is-certif-fullscreen-btn" src="<? echo get_template_directory_uri() . '/assets/img/arrows-fullscreen.svg' ?>" alt="Во весь экран">
                </div>
                <p class="is-certifs-item-text">
                  <? echo get_sub_field('certifs_description'); ?>
                </p>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="feedback" class="is-feedback" style="background:url(<? echo get_template_directory_uri(). '/assets/img/feedbackBg.webp';?>)">
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
