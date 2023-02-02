<div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></div>

<div class="content-main">
    <?php if (!empty($product)) { ?>
        <div class="">
            <?php foreach ($product as $k => $v) {
                /* Lấy hình ảnh con */
                $listPhotoAlbum = $d->rawQuery("select photo from #_gallery where id_parent = ? and com='product' and type = ? and kind='man' and val = ? and find_in_set('hienthi',status) order by numb,id desc", array($v['id'], 'san-pham', 'san-pham'));
            ?>
                <div class="box-product" data-aos="fade-up" data-aos-duration="1000">
                    <div class="row row-box-product">
                        <div class="col-md-6 div-owl-pic-prodict">
                            <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:10" data-sm-items="1:10" data-md-items="1:10" data-lg-items="1:10" data-xlg-items="1:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" data-navcontainer=".control-album-product-<?= $v['id'] ?>">
                                <div class="pic-product">
                                    <a class="text-decoration-none scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                        <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/600x365x1/assets/images/noimage.png';" data-src="<?= WATERMARK ?>/product/600x365x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                                    </a>
                                </div>
                                <?php if (count($listPhotoAlbum)) { ?>
                                    <?php foreach ($listPhotoAlbum as $valbum) { ?>
                                        <div class="pic-product">
                                            <a class="text-decoration-none scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                                <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/600x365x1/assets/images/noimage.png';" data-src="<?= WATERMARK ?>/product/600x365x1/<?= UPLOAD_PRODUCT_L . $valbum['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                                            </a>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                            <div class="control-album-product control-album-product-<?= $v['id'] ?> control-owl transition"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box-product">
                                <h3 class="mb-0"><a class="text-decoration-none text-split name-product" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></h3>
                                <div class="desc-product text-split"><?= $v['desc' . $lang] ?></div>
                                <p class="price-product">
                                    <?php if ($v['discount']) { ?>
                                        <span class="price-new"><?= $func->formatMoney($v['sale_price']) ?></span>
                                        <span class="price-old"><?= $func->formatMoney($v['regular_price']) ?></span>
                                        <span class="price-per"><?= '-' . $v['discount'] . '%' ?></span>
                                    <?php } else { ?>
                                        <span class="price-new"><?= ($v['regular_price']) ? $func->formatMoney($v['regular_price']) : lienhe ?></span>
                                    <?php } ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <div class="alert alert-warning w-100" role="alert">
            <strong><?= khongtimthayketqua ?></strong>
        </div>
    <?php } ?>
    <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
</div>