<?php if(!empty($data['items'])){ ?>
<section class="section-cards section-why-about py--120">
    <?php if(!empty($data['title'])){ ?>
    <div class="title fs--50 title-lines mx-auto text-center">
        <?= $data['title'] ?>
    </div>
    <?php } ?>
    <div class="cards-container mt--50">
        <div class="bg-wrapper">
            <img src="<?= get_template_directory_uri() ?>/assets/images/2.0.AboutUs/bg_Why.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-10 col-8 mx-lg-0 mx-auto mt-lg-0">
                    <div class="slider position-relative swiper-navigation--outside">
                        <div class="swiper-container overflow-hidden">
                            <div class="swiper-wrapper">
                                <?php $i=0;
                                $count = 0;
                                foreach($data['items'] as $item){
                                    $i++;
                                    if($i % 3 == 1){
                                        $count = '1';
                                    }else if($i % 3 == 2){
                                        $count = '2';
                                    }else{
                                        $count = '3';
                                    }
                                    ?>
                                <div class="swiper-slide">
                                    <div class="card-container radius--10 overflow-hidden" style="background-color: <?= $item['color'] ?>;">
                                        <div class="card__content text-white p--50 pb-0">
                                            <?php if(!empty($item['title'])){ ?>
                                            <div class="heading fs--30 ls--15 fw-bold">
                                                <?= $item['title'] ?>
                                            </div>
                                            <?php }if(!empty($item['description'])){ ?>
                                            <div class="desc color--white-desc mt--10 line-limit--4">
                                               <?= wpautop($item['description']) ?>
                                            </div>
                                            <?php }if(!empty($item['button'])){ ?>
                                            <a href="<?= $item['button_url'] ?>" class="btn-link--white mt--30">
                                                <?= $item['button'] ?>
                                            </a>
                                            <?php } ?>
                                        </div>
                                        <div class="card__bg">
                                            <img src="<?= get_template_directory_uri() ?>/assets/images/2.0.AboutUs/bg_WhyImg-<?=$count?>.png" alt="">
                                        </div>
                                        <?php if(!empty($item['image'])){?>
                                        <div class="card__img">
                                        <?= wp_get_attachment_image($item['image'], 'large') ?>
                                        </div>
                                        <?php } ?>
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
        </div>
    </div>
</section>
<?php } ?>