<?php if(!empty($data['title'])){ ?>
<section class="section-banner">
    <div class="banner" style="background: url(<?= wp_get_original_image_url($data['background'],'full')?>) no-repeat center; background-size: cover;">
        <div class="content position-relative z-index--2">
            <div class="title ls--150 text-white text-center title-lines mx-auto" data-aos="fade-up">
                <?= $data['title'] ?>
            </div>
        </div>
    </div>
</section>
<style>
    .section-banner::after {
        background: url('<?= get_template_directory_uri() ?>/assets/images/1.0.Homepage/bg_WaveLightBlue.png') no-repeat bottom;
        background-size: contain;
    }
</style>
<?php } ?>