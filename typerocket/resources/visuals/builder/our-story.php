<section class="section-story-about pt--60">
    <div class="container">
        <div class="row justify-content-center">
            <?php if(!empty($data['title'])){ ?>
            <div class="col-lg-5">
                <div class="title fs--50 title-lines title-lines-lg--left mx-lg-0 mx-auto">
                    <?= wpautop($data['title']) ?>
                </div>
            </div>
            <?php }if(!empty($data['description'])){ ?>
            <div class="col-lg-7 col-sm-10 mx-auto mt-lg-0 mt--40">
                <div class="desc color--gray-desc text-lg-start text-center">
                    <?= wpautop($data['description']) ?>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php if(!empty($data['image'])){ ?>
        <div class="img-container radius--10 overflow-hidden mt--50">
        <?= wp_get_attachment_image($data['image'], 'full') ?>
        </div>
        <?php } ?>
    </div>
</section>