<section class="section-mission-about pt--60 pb--220">
    <div class="container">
        <div class="row align-items-lg-end align-items-center justify-content-between">
            <?php if( (!empty($data['title'])) || (!empty($data['description'])) ){ ?>
            <div class="col-lg-5 col-sm-10 mx-lg-0 mx-auto">
                <div class="content">
                    <?php if(!empty($data['title'])){ ?>
                    <div class="title fs--50 title-lines title-lines-lg--left text-lg-start text-center mx-lg-0 mx-auto">
                        <?= $data['title'] ?>
                    </div>
                    <?php }if(!empty($data['description'])){ ?>
                    <div class="desc color--gray-desc mt--20 text-lg-start text-center">
                        <?= wpautop($data['description']) ?>
                    </div>
                    <?php } ?>
                </div>
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