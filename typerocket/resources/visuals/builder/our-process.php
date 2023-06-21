
<section class="section-process-home pt--120">
    <?php if(!empty($data['title'])){ ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-10 mx-auto">
                <div class="title-container text-center">
                    <div class="title fs--50 subtitle title-lines mx-auto">
                        <?= wpautop($data['title']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } if(!empty($data['items'])){?>
    <ul class="processes">
        <?php $i=0;
            foreach($data['items'] as $item){
                $i++;
        ?>
        <li class="process">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <?php if( (!empty($item['title'])) || (!empty($item['description'])) ){ ?>
                    <div class="col-lg-7 col-sm-10 mx-lg-0 mx-auto">
                        <div class="content-container d-flex gap--65">
                            <div class="number fs--50 ls--25 color--blue fw-bold">
                                0<?=$i?>.
                            </div>
                            <div class="content">
                                <?php if(!empty($item['title'])){ ?>
                                <div class="heading fs--40 ls--20 fw-bold">
                                    <?= $item['title'] ?>
                                </div>
                                <?php }if(!empty($item['description'])){?>
                                <div class="desc color--gray-desc mt--20">
                                    <?= wpautop($item['description']) ?>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php }if(!empty($item['image'])){ ?>
                    <div class="col-lg-5 col-sm-10 mx-lg-0 mx-auto">
                        <div class="img-container">
                            <img src="<?= wp_get_original_image_url($item['image'],'large')?>" alt="">
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </li>
        <?php } ?>
    </ul>
    <?php }  ?>
</section>