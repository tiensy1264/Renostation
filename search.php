<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Statos
 * @since Statos 1.0
 */

/* Template Name: Search Page */

get_header();
?>
<?php if (have_posts()) :
    $post_type = get_post_type();
    ?>
    <section class="search-page" style="margin-top: 20rem">
        <div class="container">
            <div class="inner">
                <div class="search-input search-p">
                    <form role="search" class="search-input" method="get"
                          action="<?php echo esc_url(home_url('/')); ?>">
                        <?php
                        printf('<input type="search" placeholder="Search" class="" name="s" title="%3$s" />', esc_attr__('Search &hellip;', 'Divi'), get_search_query(), esc_attr__('Search for:', 'Divi'));
                        ?>
                    </form>
                </div>
                <div class="search-result-txt">We find
                    <?php
                    global $wp_query;
                    $not_singular = $wp_query->found_posts > 1 ? 'results' : 'result'; // if found posts is greater than one echo results(plural) else echo result (singular)
                    echo $wp_query->found_posts . " $not_singular";
                    ?>
                    that suits "<?= $s ?>"
                </div>

                <div class="results-wrap mt-5">
                    <div class="heading mb-5">EVENTS</div>

                    <?php if ($wp_query->have_posts() && $post_type == 'tr_event') { ?>
                        <div class="events-list mt-5">
                            <?php while ($wp_query->have_posts()) :
                                $wp_query->the_post();
                                global $post; ?>
                                <?php get_template_part('template-parts/content-post'); ?>
                            <?php endwhile; ?>
                        </div>
                        <nav class="pagination-wrap" aria-label="Page navigation">
                            <?php
                            echo '<pre>';
                            print_r();
                            echo '</pre>';
                            $big = 999999999;
                            $get_link = get_template_directory_uri();
                            echo paginate_links(array(
                                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                'format' => '?paged=%#%',
                                'prev_text' => ('
                        <img src="' . get_template_directory_uri() . '/assets/icons/icon_PrevBox-inactive.png" alt="">
                        <img src="' . get_template_directory_uri() . '/assets/icons/icon_PrevBox-active.png" alt="">
                        '),
                                'next_text' => ('
                        <img src="' . get_template_directory_uri() . '/assets/icons/icon_NextBox-inactive.png" alt="">
                        <img src="' . get_template_directory_uri() . '/assets/icons/icon_NextBox-active.png" alt="">
                        '),
                                'current' => max(1, get_query_var('paged')),
                                'total' => $wp_query->max_num_pages
                            )); ?>
                        </nav>
                        <?php wp_reset_postdata();
                    } else { ?>
                        <div class="col-12">
                            <p>No posts matching the keyword</p>
                        </div>
                    <?php } ?>
                </div>

                <div class="results-wrap mt-5">
                    <div class="heading mb-5">NEWS</div>
                    <?php if ($wp_query->have_posts() && $post_type == 'post') { ?>
                        <div class="events-list mt-5">
                            <?php while ($wp_query->have_posts()) :
                                $wp_query->the_post();
                                global $post; ?>
                                <?php get_template_part('template-parts/content-post'); ?>
                            <?php endwhile; ?>
                        </div>
                        <nav class="pagination-wrap" aria-label="Page navigation">
                            <?php
                            $big = 999999999;
                            $get_link = get_template_directory_uri();
                            echo paginate_links(array(
                                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                'format' => '?paged=%#%',
                                'prev_text' => ('
                        <img src="' . get_template_directory_uri() . '/assets/icons/icon_PrevBox-inactive.png" alt="">
                        <img src="' . get_template_directory_uri() . '/assets/icons/icon_PrevBox-active.png" alt="">
                        '),
                                'next_text' => ('
                        <img src="' . get_template_directory_uri() . '/assets/icons/icon_NextBox-inactive.png" alt="">
                        <img src="' . get_template_directory_uri() . '/assets/icons/icon_NextBox-active.png" alt="">
                        '),
                                'current' => max(1, get_query_var('paged')),
                                'total' => $wp_query->max_num_pages
                            )); ?>
                        </nav>
                        <?php wp_reset_postdata();
                    } else { ?>
                        <div class="col-12">
                            <p>No posts matching the keyword</p>
                        </div>
                    <?php } ?>
                </div>

                <div class="results-wrap mt-5">
                    <div class="heading mb-5">PRODUCTS</div>

                    <?php if ($wp_query->have_posts() && $post_type == 'tr_product') { ?>
                        <div class="events-list mt-5">
                            <?php while ($wp_query->have_posts()) :
                                $wp_query->the_post();
                                global $post; ?>
                                <?php get_template_part('template-parts/content-post'); ?>
                            <?php endwhile; ?>
                        </div>
                        <nav class="pagination-wrap" aria-label="Page navigation">
                            <?php
                            $big = 999999999;
                            $get_link = get_template_directory_uri();
                            echo paginate_links(array(
                                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                'format' => '?paged=%#%',
                                'prev_text' => ('
                        <img src="' . get_template_directory_uri() . '/assets/icons/icon_PrevBox-inactive.png" alt="">
                        <img src="' . get_template_directory_uri() . '/assets/icons/icon_PrevBox-active.png" alt="">
                        '),
                                'next_text' => ('
                        <img src="' . get_template_directory_uri() . '/assets/icons/icon_NextBox-inactive.png" alt="">
                        <img src="' . get_template_directory_uri() . '/assets/icons/icon_NextBox-active.png" alt="">
                        '),
                                'current' => max(1, get_query_var('paged')),
                                'total' => $wp_query->max_num_pages
                            )); ?>
                        </nav>
                        <?php wp_reset_postdata();
                    } else { ?>
                        <div class="col-12">
                            <p>No posts matching the keyword</p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php else : ?>
    <section class="search-page">
        <div class="container">
            <div class="inner">
                <div class="">
                    <form role="search" class="form-search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                        <?php
                        printf('<input type="search" class="" placeholder="what do you look for?" placeholder="%2$s" name="s" title="%3$s" />', esc_attr__('Search &hellip;', 'Divi'), get_search_query(), esc_attr__('Search for:', 'Divi'));
                        ?>
                        <div class="search-icon"><img
                                    src="<?= get_template_directory_uri() ?>/assets/img/nav/search.png" alt="search">
                        </div>
                        <button type="submit" class="search-btn">Search</button>
                    </form>
                </div>
                <div class="search-result-txt">We find
                    <?php
                    global $wp_query;
                    $not_singular = $wp_query->found_posts > 1 ? 'results' : 'result'; // if found posts is greater than one echo results(plural) else echo result (singular)
                    echo $wp_query->found_posts . " $not_singular";
                    ?>
                    that suits you
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php
get_footer();
