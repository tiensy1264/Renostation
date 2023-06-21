<?php 
$services = tr_post_type('Services','Services');
$services->setId('tr_services');
$services->setIcon('book');
$services->setTitlePlaceholder('Enter title here');
$services->setArgument( 'supports', [ 'title', 'thumbnail'] );

$services->setEditorForm(function () {
    $form = tr_form();
    echo  $form->wpEditor('Content')->setSetting('options', [
        'teeny' => false,
        'media_buttons' => true,
        'tinymce' => true,
    ])->setHelp("<span style='color: red'>If you can't fill it out, please save and try again</span>");
});

$services_cat = tr_taxonomy('Category Services','Categories Services'); 
$services_cat->setHierarchical();
$services_cat->apply($services);