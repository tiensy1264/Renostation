<?php
get_header();

?>
<?php if ((!empty(tr_options_field('theme_options.title_services'))) || (!empty(tr_options_field('theme_options.banner_services')))) { ?>
  <section class="section-banner">
    <div class="banner" style="background: url(<?= wp_get_original_image_url(tr_options_field('theme_options.banner_services'), 'full') ?>) no-repeat center; background-size: cover;">
      <div class="content position-relative z-index--2">
        <div class="title ls--150 text-white text-center title-lines mx-auto" data-aos="fade-up">
          <?= tr_options_field('theme_options.title_services') ?>
        </div>
      </div>
    </div>
  </section>
  <style>
    .section-banner::after {
      background: url('<?= get_template_directory_uri() ?>/assets/images/1.0.Homepage/bg_WaveWhite.png') no-repeat bottom;
      background-size: contain;
    }
  </style>
<?php } ?>
<?php if (have_posts()) {
?>
  <section class="section-services pt--120 pb--220">
    <div class="container">
      <div class="row" style="row-gap: 5rem;">
        <?php $i=0;
        while (have_posts()) {
          $i++;
          the_post(); ?>
          <div class="col-sm-6 item-post">
            <div class="service accordion-custom">
              <div class="img-wrapper--cover radius--10 overflow-hidden aspect--16-9">
              <?= wp_get_attachment_image(get_post_thumbnail_id(), 'large') ?>
              </div>
              <div class="heading d-flex align-items-center justify-content-between mt--30" data-bs-toggle="collapse" data-bs-target="#service-<?=$i?>" aria-expanded="false" aria-controls="service-<?=$i?>">
                <div class="fs--40 ls--20 fw-bold line-limit--1">
                  <?=  get_the_title() ?>
                </div>
                <div class="icons">
                  <img src="<?=get_template_directory_uri()?>/assets/icons/icon_PlusBlack.png" alt="">
                  <img src="<?=get_template_directory_uri()?>/assets/icons/icon_MinusBlack.png" alt="">
                </div>
              </div>
              <div id="service-<?=$i?>" class="content collapse" data-bs-parent="#service-<?=$i?>">
                <div class="desc color--gray-desc mt--20 pt--30 bt--gray line-limit--4">
                <?= wpautop(tr_posts_field('content')) ?>
                </div>
                <div class="btn-wrapper mt--30">
                  <a href="<?=get_the_permalink()?>" class="btn">
                    Request A Quote
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php }
        wp_reset_postdata(); ?>
      </div>
      <div class="btn-wrapper mt--50 text-center">
        <?php pagination_tdc(); ?>
      </div>
    </div>
  </section>
<?php } ?>
<?php get_footer(); ?>