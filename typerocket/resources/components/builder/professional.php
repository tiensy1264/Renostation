<h1>Professional</h1>
<?php 
echo $form->row([
    $form->column([
        $form->text('Title'),
        $form->editor('Description'),
        $form->text('Button'),
        $form->text('Button URL'),
    ]),
    $form->column([
        $form->repeater('Items')->setFields([
            $form->color('Color'),
            $form->text('Title'),
            $form->editor('Description'),
            $form->text('Button'),
            $form->text('Button URL'),
            $form->image('Image')->setHelp("Size: 365x300"),
        ]),
    ]),
]);