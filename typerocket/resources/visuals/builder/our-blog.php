<section class="section-blogs-home pt--120">
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
        <?php }if(!empty($data['search_blog'])){ ?>
        <div class="row mt--50">
            <div class="col-lg-12 col-sm-10 col-8 mx-auto">
                <div class="slider position-relative swiper-navigation--outside">
                    <div class="swiper-container overflow-hidden">
                        <div class="swiper-wrapper">
                            <?php foreach($data['search_blog'] as $item){ ?>
                            <div class="swiper-slide">
                                <div class="blog hover--scale">
                                    <a href="<?=  get_the_permalink($item) ?>">
                                        <div class="img-wrapper--cover radius--10 overflow-hidden aspect--4-3">
                                        <?= wp_get_attachment_image(get_post_thumbnail_id($item), 'large') ?>
                                        </div>
                                        <div class="heading fs--30 ls--15 fw-bold mt--30 line-limit--2">
                                        <?=  get_the_title($item) ?>
                                        </div>
                                        <div class="metadata fs--22 color--gray-desc mt--18">
                                            <span class="date"><?=  get_the_date('d F Y',$item)?></span>
                                            <span class="separator">/</span>
                                            <span class="category">Tips</span>
                                        </div>
                                    </a>
                                    <a href="<?=  get_the_permalink($item) ?>" class="btn-link--orange mt--30">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <?php } ?>
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
        <?php }if(!empty($data['button'])){ ?>
        <div class="btn-wrapper mt--50 text-center">
            <a href="<?= home_url().'/blog' ?>" class="btn">
                <?= $data['button'] ?>
            </a>
        </div>
        <?php } ?>
    </div>
</section>