<div class="title-main"><span><?=$rowDetail['name'.$lang]?></span></div>
<div class="content-main album-gallery">
    <?php if(isset($rowDetailPhoto) && count($rowDetailPhoto) > 0) { ?>
        <div class="row flex-cus">
            <?php foreach($rowDetailPhoto as $k => $v) { ?>
                <div class="pb-4 col-6 col-md-3 col-sm-4 mg-cus">
                    <div data-aos="fade-up" data-aos-duration="1000">
                        <a class="album-image scale-img mb-0" rel="album-<?=$rowDetail['id']?>" href="<?=ASSET.UPLOAD_PRODUCT_L.$v['photo']?>" title="<?=$rowDetail['name'.$lang]?>">
                            <img class="lazy w-100" onerror="this.src='<?=THUMBS?>/480x360x1/assets/images/noimage.png';" data-src="<?=THUMBS?>/480x360x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$rowDetail['name'.$lang]?>" title="<?=$rowDetail['name'.$lang]?>"/>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</div>