<h1>Our Story</h1>
<?php 
echo $form->row([
    $form->column([
        $form->editor('Title'),
    ]),
    $form->column([
        $form->editor('Description'),
    ]),
]);
echo $form->image('Image')->setHelp('Size: 1542x600');