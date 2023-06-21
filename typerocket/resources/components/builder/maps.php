<h1>Maps</h1>
<?php 
echo $form->row([
    $form->column([
        $form->editor("Map"),
    ]),
    $form->column([
        $form->text('Title'),
        $form->repeater('Items')->setFields([
            $form->text('Title'),
            $form->editor('Description'),
        ]),
    ]),
]);