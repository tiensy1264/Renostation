<h1>Send Us A Message</h1>
<?php 
echo $form->text('Title');
echo $form->row([
    $form->column([
        $form->image('Image')->setHelp('Size: 655x874'),
    ]),
    $form->column([
        $form->text('Form Contact'),
    ]),
]);