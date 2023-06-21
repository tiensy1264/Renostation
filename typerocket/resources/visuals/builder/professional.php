<section class="section-cards section-professionals-home pt-lg--120">
    <div class="container">
        <div class="row">
            <?php if( (!empty($data['title'])) || (!empty($data['description'])) || (!empty($data['button'])) ){ ?>
            <div class="col-lg-3 col-sm-8 mx-lg-0 mx-auto">
                <div class="content">
                    <div class="content text-lg-start text-center">
                        <?php if(!empty($data['title'])){ ?>
                        <div class="title fs--50 title-lines title-lines-lg--left mx-lg-0 mx-auto">
                            <?= $data['title'] ?>
                        </div>
                        <?php }if(!empty($data['description'])){ ?>
                        <div class="desc color--gray-desc mt--20">
                            <?= wpautop($data['description']) ?>
                        </div>
                        <?php }if(!empty($data['button'])){ ?>
                        <div class="btn-wrapper mt--30">
                            <a href="<?= $data['button_url'] ?>" class="btn">
                                <?= $data['button'] ?>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php }if(!empty($data['items'])){ ?>
            <div class="col-lg-9 col-sm-10 col-8 mx-lg-0 mx-auto mt-lg-0 mt--60">
                <div class="slider position-relative swiper-navigation--outside">
                    <div class="swiper-container overflow-hidden">
                        <div class="swiper-wrapper">
                            <?php foreach($data['items'] as $value){ ?>
                            <div class="swiper-slide">
                                <div class="card-container radius--10 overflow-hidden" style="background-color: <?=$value['color'] ?>;">
                                    <div class="card__content text-white p--50 pb-0">
                                        <?php if(!empty($value['title'])){ ?>
                                        <div class="heading fs--30 ls--15 fw-bold">
                                            <?= $value['title'] ?>
                                        </div>
                                        <?php }if(!empty($value['description'])){ ?>
                                        <div class="desc color--white-desc mt--10 line-limit--2">
                                           <?= wpautop($value['description']) ?>
                                        </div>
                                        <?php }if(!empty($value['button'])){ ?>
                                        <a href="<?= $value['button_url'] ?>" class="btn-link--white mt--30">
                                            <?= $value['button'] ?>
                                        </a>
                                        <?php } ?>
                                    </div>
                                    <div class="card__bg">
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/2.0.AboutUs/bg_WhyImg-1.png" alt="">
                                    </div>
                                    <div class="card__img">
                                        <img src="<?= wp_get_original_image_url($value['image'],'large')?>" alt="">
                                    </div>
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
            <?php } ?>
        </div>
    </div>
</section>