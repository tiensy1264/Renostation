
<section class="section-map-info bg--light-blue pt--100 pb--120">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <?php if(!empty($data['map'])){ ?>
            <div class="col-lg-7">
                <div class="map-wrapper aspect--4-3">
                    <?= $data['map'] ?>
                </div>
            </div>
            <?php }if(!empty($data['items'])){  ?>
            <div class="col-lg-4 col-sm-8 mx-lg-0 mx-auto mt-lg-0 mt--60">
                <div class="content">
                    <?php if(!empty($data['title'])){ ?>
                    <div class="title title-lines title-lines-lg--left fs--50 mx-lg-0 mx-auto text-lg-start text-center">
                        <?= $data['title'] ?>
                    </div>
                    <?php } ?>
                    <ul class="info-list mt--50">
                        <?php foreach($data['items'] as $item){ ?>
                        <li class="info-item">
                            <?php if(!empty($item['title'])){ ?>
                            <div class="fs--22 color--blue fw-bold text-uppercase">
                                <?= $item['title'] ?>
                            </div>
                            <?php }if(!empty($item['description'])){?>
                            <div class="mt--15">
                            <?= wpautop($item['description']) ?>
                            </div>
                            <?php } ?>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>