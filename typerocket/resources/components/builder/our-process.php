<h1>Our Process</h1>
<?php 
echo $form->editor('Title');
echo $form->repeater('Items')->setFields([
    $form->row([
        $form->column([
            $form->text('Title'),
            $form->editor('Description'),
        ]),
        $form->column([
            $form->image('Image')->setHelp('Size: 622x456'),
        ]),
    ]),
]);