<?php
/* Template name: О компании
*/

get_header();
?>
  <section id="aboutPage" class="is-about container" style="background:none;">
      <div class="is-breadcrumb-list">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/">
                Главная
              </a>
            </li>
            <li class="breadcrumb-item active">
              О компании
            </li>
          </ol>
        </nav>
      </div>
    <div class="row is-contacts__info">
      <div class="col-md-12">
        <h2  v-if="aboutPageInfo.title" >
          <? the_title(); ?>
        </h2>
      </div>
      <div class="col-md-12 is-contacts__info-details">
        <? the_content(); ?>
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
