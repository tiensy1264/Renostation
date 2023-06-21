<h1>Our Mission</h1>
<?php 
echo $form->row([
    $form->column([
        $form->text('Title'),
        $form->editor('Description'),
    ]),
    $form->column([
        $form->image('Image')->setHelp('Size: 527x463'),
    ]),
]);