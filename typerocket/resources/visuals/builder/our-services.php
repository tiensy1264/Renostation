<?php if(!empty($data['search_post'])){ ?>
<section class="section-services-home bg--light-blue py--50">
    <div class="container">
        <?php if(!empty($data['title'])){ ?>
        <div class="row">
            <div class="col-lg-6 col-sm-10 mx-lg-0 mx-auto">
                <div class="content text-lg-start text-center">
                    <div class="title fs--50 subtitle title-lines title-lines-lg--left mx-lg-0 mx-auto">
                        <?= wpautop($data['title']) ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="row mt--50">
            <div class="col-lg-12 col-sm-10 col-8 mx-auto">
                <div class="slider position-relative swiper-navigation--outside">
                    <div class="swiper-container overflow-hidden">
                        <div class="swiper-wrapper">
                        <?php foreach ($data['search_post'] as $item) :
                           
                            ?>
                            <div class="swiper-slide">
                            <div class="service accordion-custom">
                            <div class="img-wrapper--cover radius--10 overflow-hidden aspect--16-9">
                            <?= wp_get_attachment_image(get_post_thumbnail_id($item), 'large') ?>
                            </div>
                            <div class="heading d-flex align-items-center justify-content-between mt--30"
                                data-bs-toggle="collapse" data-bs-target="#service-<?=$item?>" aria-expanded="true"
                                aria-controls="service-<?=$item?>">
                                <div class="fs--30 ls--20 fw-bold ">
                                    <?= get_the_title($item) ?>
                                </div>
                            </div>
                            <div id="service-<?=$item?>" class="content collapse show" data-bs-parent="#service-<?=$item?>">
                                <div class="desc color--gray-desc mt--20 pt--30 bt--gray line-limit--4">
                                <?= wpautop(tr_posts_field('content',$item)) ?>
                                </div>
                                <div class="btn-wrapper mt--30">
                                    <a href="<?=get_the_permalink($item)?>" class="btn">
                                        Request A Quote
                                    </a>
                                </div>
                            </div>
                        </div>
                            </div>
                            <?php endforeach;  wp_reset_query(); ?>
                        </div>
                    </div>
                    <div class="swiper-prev">
                        <img src="<?= get_template_directory_uri() ?>/assets/icons/icon_ArrowLeftBlack.png" alt="swiper-prev">
                    </div>
                    <div class="swiper-next">
                        <img src="<?= get_template_directory_uri() ?>/assets/icons/icon_ArrowRightBlack.png" alt="swiper-next">
                    </div>
                </div>
            </div>
        </div>
        <?php if(!empty($data['button'])){ ?>
        <div class="btn-wrapper mt--50 text-center">
            <a href="<?= home_url().'/services' ?>" class="btn">
                <?= $data['button'] ?>
            </a>
        </div>
        <?php } ?>
    </div>
</section>
<?php } ?>