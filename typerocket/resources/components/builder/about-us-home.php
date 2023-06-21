<h1>About Us</h1>
<?php 
echo $form->row([
    $form->column([
        $form->image('Image')->setHelp('Size : 786x590'),
    ]),
    $form->column([
        $form->text('Title'),
        $form->editor('Description'),
        $form->text('Button'),
        $form->text('Button URL'),
    ]),
]);