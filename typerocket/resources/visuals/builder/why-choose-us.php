<section class="section-why-home pt--150">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <?php if( (!empty($data['title'])) || (!empty($data['items'])) ){ ?>
            <div class="col-lg-6 col-sm-10 mx-lg-0 mx-auto">
                <?php if(!empty($data['title'])){ ?>
                <div class="content">
                    <div class="title fs--50 title-lines mx-auto text-center">
                        <?= $data['title'] ?>
                    </div>
                </div>
                <?php }if(!empty($data['items'])){ ?>
                <div class="row mt--50">
                    <?php foreach($data['items'] as $item){ ?>
                    <div class="col-4">
                        <div class="reason">
                            <?php if(!empty($item['icon'])){ ?>
                            <div class="icon">
                                <img src="<?= wp_get_original_image_url($item['icon'],'medium')?>" alt="">
                            </div>
                            <?php }if(!empty($item['title'])){ ?>
                            <div class="fs--30 ls--15 mt--25 text-center">
                                <?= $item['title'] ?>
                            </div>
                            <?php }  ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
            <?php }if(!empty($data['image'])){ ?>
            <div class="col-lg-4 col-sm-10 mx-auto mt-lg-0 mt--60">
                <div class="img-container">
                    <?= wp_get_attachment_image($data['image'], 'large') ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>