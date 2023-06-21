<?php
get_header();
while (have_posts()) : the_post(); ?>

    <section class="section-blog-details">
        <div class="container">
            <div class="img-wrapper--cover radius--10 overflow-hidden aspect--16-9">
            <?= wp_get_attachment_image(get_post_thumbnail_id(), 'full') ?>
            </div>
            <div class="metadata fs--24 color--blue mt--50 text-lg-start text-center">
                <span class="date"><?=get_the_date('d F Y')?></span>
                <span class="separator">/</span>
                <span class="category fw-bold">Tips</span>
            </div>
            <div class="title fs--50 title-lines title-lines-lg--left mx-lg-0 mx-auto mt--30 text-lg-start text-center">
            <?php the_title() ?>
            </div>
            <div class="desc default-style mt--50 gap--20">
                <?= wpautop(tr_posts_field('content')) ?>
            </div>
        </div>
    </section>
    <section class="section-related-blogs bg--light-blue pt--80 pb--180">
        <div class="container">
            <div class="title fs--50 title-lines mx-auto text-center">
                You May Also Like
            </div>
           
            <div class="row mt--50">
                <div class="col-lg-12 col-sm-10 col-8 mx-auto">
                    <div class="slider position-relative swiper-navigation--outside">
                        <div class="swiper-container overflow-hidden">
                            <div class="swiper-wrapper">
                            <?php
                                $id = get_the_ID();
                                $current_post_type = get_post_type($id);
                                $related = get_posts(array('category__in' => wp_get_post_categories($id), 'post_type' => $current_post_type, 'numberposts' => 4, 'post__not_in' => array($id)));
                                if ($related) foreach ($related as $post) {
                            
                                setup_postdata($post); 
                                ?>
                                <div class="swiper-slide">
                                    <div class="blog hover--scale">
                                        <a href="<?php get_the_permalink() ?>">
                                            <div class="img-wrapper--cover radius--10 overflow-hidden aspect--4-3">
                                            <?= wp_get_attachment_image(get_post_thumbnail_id(), 'large') ?>
                                            </div>
                                            <div class="heading fs--30 ls--15 fw-bold mt--30 line-limit--2">
                                            <?php the_title() ?>
                                            </div>
                                            <div class="metadata fs--22 color--gray-desc mt--18">
                                            <span class="date"><?=get_the_date('d F Y')?></span>
                                                <span class="separator">/</span>
                                                <span class="category">Tips</span>
                                            </div>
                                        </a>
                                        <a href="<?php get_the_permalink() ?>" class="btn-link--orange mt--30">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                                <?php }
                                    wp_reset_postdata(); ?>
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
    </section>
<?php endwhile; ?>

<?php get_footer(); ?>