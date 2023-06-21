<?php
get_header();

?>
<?php if( (!empty(tr_options_field('theme_options.title_blog'))) || (!empty(tr_options_field('theme_options.banner_blog'))) ){ ?>
<section class="section-banner">
    <div class="banner" style="background: url(<?= wp_get_original_image_url(tr_options_field('theme_options.banner_blog'),'full')?>) no-repeat center; background-size: cover;">
        <div class="content position-relative z-index--2">
            <div class="title ls--150 text-white text-center title-lines mx-auto" data-aos="fade-up">
                <?= tr_options_field('theme_options.title_blog') ?>
            </div>
        </div>
    </div>
</section>
<style>
    .section-banner::after {
        background: url('<?= get_template_directory_uri() ?>/assets/images/1.0.Homepage/bg_WaveWhite.png') no-repeat bottom;
        background-size: contain;
    }
</style>
<?php } ?>
<?php if (have_posts()) {?>
<section class="section-blogs pt-lg-0 pt--50 pb--180">
    <div class="container">
        <div class="order-container mb-0 text--right">
        <select class="orderby" name="sort-posts" id="sortbox" onchange="document.location.search=this.options[this.selectedIndex].value;">
              <option value="?">View All</option>
              <option <?php if( isset($_GET["orderby"]) && trim($_GET["orderby"]) == 'date' && isset($_GET["order"]) && trim($_GET["order"]) == 'DESC' ){ echo 'selected'; } ?> value="?orderby=date&order=DESC">Newest</option>
              <option <?php if( isset($_GET["orderby"]) && trim($_GET["orderby"]) == 'date' && isset($_GET["order"]) && trim($_GET["order"]) == 'ASC' ){ echo 'selected'; } ?>  value="?orderby=date&order=ASC">Oldest</option>
              <option <?php if( isset($_GET["orderby"]) && trim($_GET["orderby"]) == 'title' && isset($_GET["order"]) && trim($_GET["order"]) == 'ASC' ){ echo 'selected'; } ?> value="?orderby=date&order=DESC" value="?orderby=title&order=ASC">A-Z Asc</option>
              <option <?php if( isset($_GET["orderby"]) && trim($_GET["orderby"]) == 'title' && isset($_GET["order"]) && trim($_GET["order"]) == 'DESC' ){ echo 'selected'; } ?>  value="?orderby=title&order=DESC">A-Z Desc</option>
              <option <?php if( isset($_GET["orderby"]) && trim($_GET["orderby"]) == 'views' && isset($_GET["order"]) && trim($_GET["order"]) == 'ASC' ){ echo 'selected'; } ?> value="?orderby=views&order=ASC">Views Asc</option>
              <option <?php if( isset($_GET["orderby"]) && trim($_GET["orderby"]) == 'views' && isset($_GET["order"]) && trim($_GET["order"]) == 'DESC' ){ echo 'selected'; } ?> value="?orderby=views&order=DESC">Views Desc</option>
          </select>
        </div>

        <div class="blogs mt--70">
            <div class="row" style="row-gap: 3rem;">
            <?php while (have_posts()) {
                the_post();?>
                <div class="col-lg-4 col-sm-6">
                    <div class="blog hover--scale">
                        <a href="<?=  get_the_permalink() ?>">
                            <div class="img-wrapper--cover radius--10 overflow-hidden aspect--4-3">
                            <?= wp_get_attachment_image(get_post_thumbnail_id(), 'large') ?>
                            </div>
                            <div class="heading fs--30 ls--15 fw-bold mt--30 line-limit--2">
                            <?=  get_the_title() ?>
                            </div>
                            <div class="metadata fs--22 color--gray-desc mt--18">
                                <span class="date"><?=  get_the_date('d F Y')?></span>
                                <span class="separator">/</span>
                                <span class="category">Tips</span>
                            </div>
                        </a>
                        <a href="<?=  get_the_permalink() ?>" class="btn-link--orange mt--30">
                            Read More
                        </a>
                    </div>
                </div>
            <?php } 
            wp_reset_postdata();
            ?>
            </div>
        </div>

        <div class="btn-wrapper mt--50 text-center">
            <?php pagination_tdc(); ?>
        </div>
    </div>
</section>
<?php } ?>
<?php get_footer() ?>