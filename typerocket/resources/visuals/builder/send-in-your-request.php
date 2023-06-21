<section class="section-form-contact pt--120 pb--80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-10 mx-auto">
                <?php if(!empty($data['title'])){ ?>
                <div class="title title-lines fs--50 mx-auto text-center">
                    <?= $data['title'] ?>
                </div>
                <?php }if(!empty($data['form_contact'])){ ?>
                <div class="form-container mt--50">
                    <?= do_shortcode($data['form_contact']) ?>
                </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>