<section class="section-request pt--120 pb--200">
    <div class="container">
        <?php if(!empty($data['title'])){?>
        <div class="title title-lines fs--50 mx-auto text-center">
            <?= $data['title'] ?>
        </div>
        <?php } ?>
        <div class="form-container mt--70">
            <?= do_shortcode($data['contact_form']) ?>
        </div>
    </div>
</section>
