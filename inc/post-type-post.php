<?php
$argsSupport = array('title', 'thumbnail');
$custom_post = tr_post_type('Post');
$custom_post->setSupports($argsSupport);
$custom_post->setTitlePlaceholder('Enter name here');
$custom_post->setRest();
$custom_post->setArchivePostsPerPage(-1);
$custom_post->setEditorForm(function () {
    $form = tr_form();
    echo  $form->wpEditor('Content')->setSetting('options', [
        'teeny' => false,
        'media_buttons' => true,
        'tinymce' => true,
    ])->setHelp("<span style='color: red'>If you can't fill it out, please save and try again</span><br>
    <strong style='color: green'>
    If you use image, please let it in div have style 'display:flex; justify-content: space-between;'
    </strong>
    ");
});