<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

do_action('woocommerce_before_customer_login_form'); ?>

<section class="section-my-account pt--120 pb--200" id="customer_login">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-8 mx-auto">
                <div class="content-container my-tabs">
                    <div class="title-container tab-container">
                        <div class="tab1 tab-content">
                            <div class="title fs--50 title-lines mx-auto">
                                Login
                            </div>
                        </div>
                        <div class="tab2 tab-content">
                            <div class="title fs--50 title-lines mx-auto">
                                Register
                            </div>
                        </div>
                    </div>
                    <ul class="tabs-nav d-flex mt--70">
                        <li class="tab-item fs--30 fw-bold text-uppercase w-100 text-center"
                            data-tab="tab1">
                            Login
                        </li>
                        <li class="tab-item fs--30 fw-bold text-uppercase w-100 text-center"
                            data-tab="tab2">
                            Register
                        </li>
                    </ul>
                    <div class="form-container tab-container mt--70">
                        <div class="tab1 tab-content">
                            <form class="woocommerce-form woocommerce-form-login login" method="post">

                                <?php do_action('woocommerce_login_form_start'); ?>

                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="username"><?php esc_html_e('Username', 'woocommerce'); ?>
                                        &nbsp;<span
                                                class="required">*</span></label>
                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text"
                                           name="username"
                                           id="username" autocomplete="username" placeholder="Enter your username…"
                                           value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>"/><?php // @codingStandardsIgnoreLine ?>
                                </p>
                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="password"><?php esc_html_e('Password', 'woocommerce'); ?>&nbsp;<span
                                                class="required">*</span></label>
                                    <input class="woocommerce-Input woocommerce-Input--text input-text"
                                           type="password" name="password" placeholder="Enter your password…"
                                           id="password" autocomplete="current-password"/>
                                </p>

                                <?php do_action('woocommerce_login_form'); ?>

                                <p class="form-row">
                                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                        <input class="woocommerce-form__input woocommerce-form__input-checkbox"
                                               name="rememberme"
                                               type="checkbox" id="rememberme" value="forever"/>
                                        <span><?php esc_html_e('Remember me', 'woocommerce'); ?></span>
                                    </label>
                                    <?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
                                    <button type="submit"
                                            class="woocommerce-button button woocommerce-form-login__submit<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"
                                            name="login"
                                            value="<?php esc_attr_e('Log in', 'woocommerce'); ?>"><?php esc_html_e('Log in', 'woocommerce'); ?></button>
                                </p>
                                <p class="woocommerce-LostPassword lost_password mt--30">
                                    <a class="btn-underline btn-underline--blue fw-bold"
                                       href="<?php echo esc_url(wp_lostpassword_url()); ?>"><?php esc_html_e('Lost your password?', 'woocommerce'); ?></a>
                                </p>

                                <?php do_action('woocommerce_login_form_end'); ?>

                            </form>
                        </div>
                        <div class="tab2 tab-content">
                            <form method="post"
                                  class="woocommerce-form woocommerce-form-register register" <?php do_action('woocommerce_register_form_tag'); ?> >

                                <?php do_action('woocommerce_register_form_start'); ?>

                                <?php if ('no' === get_option('woocommerce_registration_generate_username')) : ?>

                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="reg_username"><?php esc_html_e('Username', 'woocommerce'); ?>
                                            &nbsp;<span
                                                    class="required">*</span></label>
                                        <input type="text"
                                               class="woocommerce-Input woocommerce-Input--text input-text"
                                               name="username"
                                               id="reg_username" autocomplete="username"
                                               placeholder="Enter your username…"
                                               value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>"/><?php // @codingStandardsIgnoreLine ?>
                                    </p>

                                <?php endif; ?>

                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="reg_email"><?php esc_html_e('Email', 'woocommerce'); ?>
                                        &nbsp;<span
                                                class="required">*</span></label>
                                    <input type="email" class="woocommerce-Input woocommerce-Input--text input-text"
                                           name="email" id="reg_email"
                                           autocomplete="email" placeholder="Enter your email…"
                                           value="<?php echo (!empty($_POST['email'])) ? esc_attr(wp_unslash($_POST['email'])) : ''; ?>"/><?php // @codingStandardsIgnoreLine ?>
                                </p>

                                <p
                                        class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="reg_first_name">
                                        <?php esc_html_e('First Name', 'woocommerce'); ?>
                                        &nbsp;<span class="required">*</span>
                                    </label>
                                    <input type="text"
                                           class="woocommerce-Input woocommerce-Input--text input-text"
                                           name="first_name" id="reg_first_name"
                                           placeholder="Enter your first name..." autocomplete="first_name"
                                           value="<?php echo (!empty($_POST['first_name'])) ? esc_attr(wp_unslash($_POST['first_name'])) : ''; ?>">
                                </p>

                                <p
                                        class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                    <label for="reg_last_name">
                                        <?php esc_html_e('Last Name', 'woocommerce'); ?>
                                        &nbsp;<span class="required">*</span>
                                    </label>
                                    <input type="text"
                                           class="woocommerce-Input woocommerce-Input--text input-text"
                                           name="last_name" id="reg_last_name"
                                           placeholder="Enter your last name..." autocomplete="last_name"
                                           value="<?php echo (!empty($_POST['last_name'])) ? esc_attr(wp_unslash($_POST['last_name'])) : ''; ?>">
                                </p>

                                <?php if ('no' === get_option('woocommerce_registration_generate_password')) : ?>

                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="reg_password"><?php esc_html_e('Password', 'woocommerce'); ?>
                                            &nbsp;<span
                                                    class="required">*</span></label>
                                        <input type="password"
                                               class="woocommerce-Input woocommerce-Input--text input-text"
                                               name="password" placeholder="Enter your password…"
                                               id="reg_password" autocomplete="new-password"/>
                                    </p>
                                    <p
                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="reg_password_again">
                                            <?php esc_html_e('Password Again', 'woocommerce'); ?>
                                            &nbsp;<span
                                                    class="required">*</span>
                                        </label>
                                        <span class="password-input">
                                                    <input type="password"
                                                           class="woocommerce-Input woocommerce-Input--text input-text"
                                                           name="password" id="reg_password_again"
                                                           autocomplete="new-password-again"
                                                           placeholder="Enter your password again…">
                                                    <span class="show-password-again-input"></span>
                                                </span>
                                    </p>

                                <?php else : ?>

                                    <p><?php esc_html_e('A link to set a new password will be sent to your email address.', 'woocommerce'); ?></p>

                                <?php endif; ?>

                                <?php do_action('woocommerce_register_form'); ?>

                                <p class="woocommerce-form-row form-row">
                                    <?php wp_nonce_field('woocommerce-register', 'woocommerce-register-nonce'); ?>
                                    <button type="submit"
                                            class="woocommerce-Button woocommerce-button button<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?> woocommerce-form-register__submit"
                                            name="register"
                                            value="<?php esc_attr_e('Register', 'woocommerce'); ?>"><?php esc_html_e('Register', 'woocommerce'); ?></button>
                                </p>

                                <?php do_action('woocommerce_register_form_end'); ?>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if ('yes' === get_option('woocommerce_enable_myaccount_registration')) : ?>


<?php endif; ?>

<?php do_action('woocommerce_after_customer_login_form'); ?>
