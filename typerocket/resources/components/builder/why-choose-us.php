<h1>Why Choose Us</h1>
<?php 
echo $form->row([
    $form->column([
        $form->text('Title'),
        $form->repeater('Items')->setFields([
            $form->image('Icon')->setHelp('Size : 60x60'),
            $form->text('Title'),
        ]),
    ]),
    $form->column([
        $form->image('Image')->setHelp('Size : 527x463'),
    ]),
]);