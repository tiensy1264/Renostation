<?php get_header(); ?>
<div class="section section-static-page pb-12">
    <div class="container">
        <div class="col-lg-8 col-sm-10 mx-auto">
            <?php if (!empty(tr_options_field('theme_options.404_image'))) { ?>
                <div class="box-img children:w-full">
                    <?= wp_get_attachment_image(tr_options_field('theme_options.404_image'), 'full') ?>
                </div>
            <?php } ?>

            <div class="btn-group mt-5 text-center">
                <a class="btn btn-green" href="<?= get_site_url() ?>">
                    BACK TO HOME
                </a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
