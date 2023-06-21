<?php
if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

$form = tr_form()->useJson()->setGroup($this->getName());
?>

<h1>Theme Options</h1>
<div class="typerocket-container">
    <?php
    echo $form->open();

    // Header
    $header = function () use ($form) {
        echo $form->image('Header Logo')->setHelp('Size : 415x107');
    };

    //Footer
    $footer = function () use ($form) {
        $footer_logo = function () use ($form) {
            echo $form->image('Footer Logo')->setHelp('Size : 415x107');
        };

        $footer_info = function () use ($form) {
            echo $form->editor('Description Info');
            echo $form->repeater('Info List')->setFields([
                $form->image('Icon')->setHelp('Icon size: 22x22'),
                $form->text('URL')
            ])->setHeadline('Info');
        };

        $footer_socials = function () use ($form) {
            echo $form->repeater('Socials List')->setFields([
                $form->image('Icon')->setHelp('Icon size: 35x35'),
                $form->text('Title Social')
            ])->setHeadline('Social');
        };

        $footer_copyright = function () use ($form) {
            echo $form->text('Copyright');
        };

        tr_tabs()
            ->addTab('Logo', $footer_logo)
            ->addTab('Info', $footer_info)
            ->addTab('Socials', $footer_socials)
            ->addTab('Copyright', $footer_copyright)
            ->render();
    };
    $banner  = function () use ($form) {
        $banner_blog = function () use ($form) {
            echo $form->text('Title Blog');
            echo $form->image('Banner Blog')->setHelp('Size : 1920x700');
        };
        $banner_services = function () use ($form) {
            echo $form->text('Title Services');
            echo $form->image('Banner Services')->setHelp('Size : 1920x700');
        };
        $banner_products= function () use ($form) {
            echo $form->image('Products Banner')->setHelp('Banner size: 1920x700');
            echo $form->text('Products Title');
        };
        tr_tabs()
        ->addTab('Banner Blog', $banner_blog)
        ->addTab('Banner Services', $banner_services)
        ->addTab('Banner Products', $banner_products)
        ->render();
    };
    $cf7 = function () use ($form) {
        echo $form->text('Contact Form');
    };
    //404 Page
    $not_found = function () use ($form) {
        echo $form->image('404 Image')->setHelp('Image size: 960x960');
    };

    // Save
    $save = $form->submit('Save');

    // Layout
    tr_tabs()->setSidebar($save)
        ->addTab('Header', $header)
        ->addTab('Footer', $footer)
        ->addTab('Banner', $banner)
        ->addTab('Multiple Step', $cf7)
        ->addTab('404', $not_found)
        ->render('box');
    echo $form->close();
    ?>

</div>