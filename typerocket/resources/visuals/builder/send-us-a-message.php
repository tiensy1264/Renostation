<section class="section-form-home pt--100 pb--150">
    <div class="container">
        <?php if(!empty($data['title'])){ ?>
        <div class="row ">
            <div class="col-lg-6 col-sm-10 mx-lg-0 mx-auto">
                <div class="content text-lg-start text-center">
                    <div class="title fs--50 subtitle title-lines title-lines-lg--left mx-lg-0 mx-auto">
                        <?= wpautop($data['title']) ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="row justify-content-between align-items-center mt--50">
            <?php if(!empty($data['image'])){ ?>
            <div class="col-lg-5 col-sm-8 mx-lg-0 mx-auto">
                <div class="img-container">
                    <img src="<?= wp_get_original_image_url($data['image'],'large')?>" alt="">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/1.0.Homepage/bg_Contact.png" alt="" class="img__bg">
                </div>
            </div>
            <?php }if(!empty($data['form_contact'])){ ?>
            <div class="col-lg-6 col-sm-10 mx-lg-0 mx-auto mt-lg-0 mt--60">
                <?= do_shortcode($data['form_contact']) ?>
            </div>
            <?php } ?>
        </div>
    </div>
</section>