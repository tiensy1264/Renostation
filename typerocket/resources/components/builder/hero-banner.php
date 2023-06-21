<h1>Hero Banner</h1>
<?php 
echo $form->repeater('Banner')->setFields([
    $form->image('Background')->setHelp('Size : 1920x1082'),
    $form->text('Title'),
    $form->editor('Description'),
    $form->text('Button'),
    $form->text('Button URL'),
]);