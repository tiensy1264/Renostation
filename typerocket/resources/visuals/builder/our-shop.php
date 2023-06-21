<?php if(!empty($data['search_products'])){ ?>
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
                        <?php foreach ($data['search_products'] as $item) :
                            $post_object = get_post($item);
                            setup_postdata($GLOBALS['post'] = &$post_object);
                            ?>
                            <div class="swiper-slide">
                            <?php
                                    /**
                                     * Hook: woocommerce_shop_loop.
                                     */
                                    do_action('woocommerce_shop_loop');

                                    wc_get_template_part('content', 'product'); ?>
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
            <a href="<?= home_url().'/shop' ?>" class="btn">
                <?= $data['button'] ?>
            </a>
        </div>
        <?php } ?>
    </div>
</section>
<?php } ?>