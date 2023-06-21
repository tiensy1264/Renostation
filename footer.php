</main>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-4 col-10 mx-sm-0 mx-auto">
                <div class="footer__info text-sm-start text-center">
                    <?php if(!empty(tr_options_field('theme_options.footer_logo'))){ ?>
                    <div class="footer__logo">
                        <a href="<?= get_site_url() ?>">
                        
                            <?= wp_get_attachment_image(tr_options_field('theme_options.footer_logo'), 'large') ?>
                        </a>
                    </div>
                    <?php }if(!empty(tr_options_field('theme_options.description_info'))){ ?>
                    <div class="footer__desc mt--20">
                        <?= wpautop(tr_options_field('theme_options.description_info')) ?>
                    </div>
                    <?php }if(!empty(tr_options_field('theme_options.info_list'))){ ?>
                    <div class="footer__social d-flex justify-content-sm-start justify-content-center align-content-center gap--15 mt--30">
                        <?php foreach(tr_options_field('theme_options.info_list') as $info){ ?>
                        <div class="social__icon hover--opacity">
                            <a href="<?= $info['url'] ?>">
                               <img src=" <?= wp_get_original_image_url($info['icon'], 'medium') ?>" alt="">
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-3 col-sm-3 offset-sm-1 mt-sm-0 mt--40">
                <div class="footer__quicklinks pt--40">
                    <div class="footer__title fs--30 ls--15 fw-bold text-uppercase text-sm-start text-center">
                        Company
                    </div>
                    <?php
                    $MenuQuickLinks = get_menu_by_location('quick-links');
                    $menu_quick_links = recursive_mitems_to_array($MenuQuickLinks);

                    global $wp;
                    $urlCurrent = home_url($wp->request) . '/';

                    if (!empty($menu_quick_links)) { ?>
                        <ul class="quicklinks__list d-flex flex-column align-items-sm-start align-items-center gap--25 mt--60">
                            <?php foreach ($menu_quick_links as $item) { ?>
                            <li class="quicklinks__item">
                                <a href="<?= $item['item']->url ?>" class="quicklink px--5">
                                <?= $item['item']->title ?>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4 col-8 mx-sm-0 mx-auto mt-sm-0 mt--40">
                <div class="footer__contact pt--40">
                    <div class="footer__title fs--30 ls--15 fw-bold text-uppercase text-sm-start text-center">
                        CONTACT US
                    </div>
                    <?php if(!empty(tr_options_field('theme_options.socials_list'))){ ?>
                        <ul class="contact__list d-flex flex-column gap--30 mt--60">
                            <?php foreach(tr_options_field('theme_options.socials_list') as $social){ ?>
                                <li class="contact__item d-flex align-items-center gap--20">
                                    <?php if(!empty($social['icon'])){ ?>
                                        <div class="contact__icon max-w--20">
                                            <?= wp_get_attachment_image($social['icon'], 'small') ?>
                                        </div>
                                    <?php }if(!empty($social['title_social'])){ ?>
                                        <div class="contact__info link--underline">
                                            <?= wpautop($social['title_social']) ?>
                                        </div>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php if(!empty(tr_options_field('theme_options.copyright'))){ ?>
        <div class="footer__copyright mt--90">
            <div class="copyright"><?= tr_options_field('theme_options.copyright') ?></div>
        </div>
        <?php } ?>
    </div>
</footer>



<?php wp_footer(); ?>

</body>

</html>