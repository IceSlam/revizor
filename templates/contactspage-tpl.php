<?php
/* Template name: Контакты
*/

get_header();
?>
  <section id="contactsPage" class="is-contacts">
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
                Контактная информация
              </li>
            </ol>
          </nav>
        </div>
      <div class="row is-contacts__info">
        <div class="col-md-12">
          <h2>
            <? the_title(); ?>
          </h2>
        </div>
        <div class="col-md-6 is-contacts__info-details">
          <? the_content(); ?>
          <p><i style="background: linear-gradient(225deg,#AB35B4 0,#F99B3B 100%);color: #fff;padding: 10.5px 13px;border-radius: 50%;transition: all .5s;" class="fab fa-instagram fa-2x"></i> <a href="https://instagram.com/revizor_22">revizor_22</a></p>
        </div>
        <div class="col-md-6 is-contacts__info-map">
          <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A732f2fa12e7b689656fd5b3cb5261e24ae104cf430ee81a95f7573bf38065c1c&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
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
