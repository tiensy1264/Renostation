<section class="section-about-home py--120">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <?php if(!empty($data['image'])){ ?>
            <div class="col-lg-6 col-sm-10 mx-lg-0 mx-auto">
                <div class="img-container overflow-hidden radius--10">
                    <img src="<?= wp_get_original_image_url($data['image'],'large')?>" alt="">
                </div>
            </div>
            <?php }if((!empty($data['title'])) || (!empty($data['description']))){ ?>
            <div class="col-lg-5 col-sm-8 mx-lg-0 mx-auto mt-lg-0 mt--60">
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
            <?php } ?>
        </div>
    </div>
</section>