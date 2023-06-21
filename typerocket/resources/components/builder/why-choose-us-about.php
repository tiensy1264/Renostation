<h1>Why Choose Us About</h1>
<?php 
echo $form->text('Title');
echo $form->repeater('items')->setFields([
    $form->color('Color'),
    $form->text('Title'),
    $form->editor('Description'),
    $form->text('Button'),
    $form->text('Button URL'),
    $form->image('Image')->setHelp('Size: 527x463'),
]) ;