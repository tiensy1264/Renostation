<?php
while (have_posts()) :
    the_post();

endwhile;
get_header();
?>
<section class="section-request services-detail pt--120 pb--200">
    <div class="container">
        <div class="title title-lines fs--50 mx-auto text-center">
            <?= get_the_title() ?>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-sm-10 offset-sm-1">
                <div class="form-container mt--70">
                    <?= do_shortcode(tr_options_field('theme_options.contact_form')) ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>