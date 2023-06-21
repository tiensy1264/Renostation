<?php if(!empty($data['banner'])){ ?>
<section class="section-hero-banner">
    <div class="slider swiper-navigation--inside">
        <div class="swiper-container overflow-hidden">
            <div class="swiper-wrapper">
                <?php foreach($data['banner'] as $value){ ?>
                    <div class="swiper-slide">
                        <div class="hero-banner" style="background: url(<?= wp_get_original_image_url($value['background'],'full')?>) no-repeat center; background-size: cover;">
                            <div class="container">
                                <div class="content position-relative z-index--2 text-white text-lg-start text-center">
                                    <?php if(!empty($value['title'])){ ?>
                                    <div class="title ls--150 text-lg-start text-center title-lines title-lines-lg--left mx-lg-0 mx-auto" data-aos="fade-up">
                                        <?= $value['title'] ?>
                                    </div>
                                    <?php }if(!empty($value['description'])){ ?>
                                    <div class="desc mt--20 max-w--400 text-lg-start text-center mx-lg-0 mx-auto" data-aos="fade-up" data-aos-delay="400">
                                       <?= wpautop($value['description']) ?>
                                    </div>
                                    <?php }if((!empty($value['button'])) || !empty($value['button_url'])){ ?>
                                    <a href="<?= $value['button_url'] ?>" class="btn mt--40" data-aos="fade-up" data-aos-delay="800">
                                        <?= $value['button'] ?>
                                    </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="swiper-prev">
            <img src="<?= get_template_directory_uri() ?>/assets/icons/icon_ArrowLeftBlack.png" alt="swiper-prev">
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-next">
            <img src="<?= get_template_directory_uri() ?>/assets/icons/icon_ArrowRightBlack.png" alt="swiper-next">
        </div>
    </div>
</section>
<?php } ?>