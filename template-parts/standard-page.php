<?php get_header();

if (is_cart() || is_checkout() || (is_account_page() && !is_user_logged_in())) {
    the_content();
} else { ?>
    <section class="standard-page pt--120 pb--200">
        <div class="container">
            <?php
            $url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            if (!str_contains($url, 'wishlist')) { ?>
                <div class="title fs--50 title-lines mx-auto text-center">
                    <?php the_title() ?>
                </div>
            <?php } ?>

            <div class="content mt--70">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

<?php }
get_footer();
