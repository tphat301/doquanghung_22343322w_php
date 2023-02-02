<div class="grid-pro-detail d-flex flex-wrap justify-content-between align-items-start">
    <div class="left-pro-detail">
        <a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?= ASSET . WATERMARK ?>/product/540x540x1/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>" title="<?= $rowDetail['name' . $lang] ?>">
            <img class="w-100" onerror="this.src='<?= THUMBS ?>/540x540x1/assets/images/noimage.png';" src="<?= WATERMARK ?>/product/540x540x2/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>" alt="<?= $rowDetail['name' . $lang] ?>" title="<?= $rowDetail['name' . $lang] ?>" />
        </a>
        <?php if ($rowDetailPhoto) {
            if (count($rowDetailPhoto) > 0) { ?>
                <div class="gallery-thumb-pro">
                    <div class="owl-page owl-carousel owl-theme owl-pro-detail" data-xsm-items="3:10" data-sm-items="4:10" data-md-items="5:10" data-lg-items="5:10" data-xlg-items="5:10" data-nav="1" data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" data-navcontainer=".control-pro-detail">
                        <div>
                            <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= ASSET . WATERMARK ?>/product/540x540x1/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>" title="<?= $rowDetail['name' . $lang] ?>">
                                <img class="w-100" onerror="this.src='<?= THUMBS ?>/540x540x1/assets/images/noimage.png';" src="<?= WATERMARK ?>/product/540x540x2/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>" alt="<?= $rowDetail['name' . $lang] ?>" title="<?= $rowDetail['name' . $lang] ?>" />
                            </a>
                        </div>
                        <?php foreach ($rowDetailPhoto as $v) { ?>
                            <div>
                                <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= ASSET . WATERMARK ?>/product/540x540x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" title="<?= $rowDetail['name' . $lang] ?>">
                                    <img class="w-100" onerror="this.src='<?= THUMBS ?>/540x540x1/assets/images/noimage.png';" src="<?= WATERMARK ?>/product/540x540x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $rowDetail['name' . $lang] ?>" title="<?= $rowDetail['name' . $lang] ?>" />
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="control-pro-detail control-owl transition"></div>
                </div>
        <?php }
        } ?>
    </div>

    <div class="right-pro-detail">
        <p class="title-pro-detail mb-2"><?= $rowDetail['name' . $lang] ?></p>
        <div class="social-plugin social-plugin-pro-detail w-clear">
            <?php
            $params = array();
            $params['oaid'] = $optsetting['oaidzalo'];
            echo $func->markdown('social/share', $params);
            ?>
        </div>

        <ul class="attr-pro-detail">
            <li class="w-clear">
                <label class="attr-label-pro-detail"><?= gia ?>:</label>
                <div class="attr-content-pro-detail">
                    <?php if ($rowDetail['sale_price']) { ?>
                        <span class="price-new-pro-detail"><?= $func->formatMoney($rowDetail['sale_price']) ?></span>
                        <span class="price-old-pro-detail"><?= $func->formatMoney($rowDetail['regular_price']) ?></span>
                    <?php } else { ?>
                        <span class="price-new-pro-detail"><?= ($rowDetail['regular_price']) ? $func->formatMoney($rowDetail['regular_price']) : lienhe ?></span>
                    <?php } ?>
                </div>
            </li>
            <?php if (!empty($rowDetail['code'])) { ?>
                <li class="w-clear">
                    <label class="attr-label-pro-detail"><?= masp ?>:</label>
                    <div class="attr-content-pro-detail"><?= $rowDetail['code'] ?></div>
                </li>
            <?php } ?>
            <li class="w-clear">
                <label class="attr-label-pro-detail"><?= luotxem ?>:</label>
                <div class="attr-content-pro-detail"><?= $rowDetail['view'] ?></div>
            </li>
            <?php if (!empty($productBrand['id'])) { ?>
                <li class="w-clear">
                    <label class="attr-label-pro-detail"><?= thuonghieu ?>:</label>
                    <div class="attr-content-pro-detail brand-pro-detail">
                        <a class="text-decoration-none" href="<?= $productBrand[$sluglang] ?>" title="<?= $productBrand['name' . $lang] ?>"><?= $productBrand['name' . $lang] ?></a>
                    </div>
                </li>
            <?php } ?>



        </ul>
        <div class="desc-pro-detail content-text"><?= (!empty($rowDetail['desc' . $lang])) ? nl2br(htmlspecialchars_decode($rowDetail['desc' . $lang])) : '' ?></div>

    </div>
</div>
<?php if (empty($quickview)) { ?>
    <div class="tags-pro-detail w-clear">
        <?php if (!empty($rowTags)) {
            foreach ($rowTags as $v) { ?>
                <a class="btn btn-sm btn-danger rounded" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><i class="fas fa-tags"></i><?= $v['name' . $lang] ?></a>
        <?php }
        } ?>
    </div>

    <div class="tabs-pro-detail">
        <ul class="nav nav-tabs" id="tabsProDetail" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="info-pro-detail-tab" data-toggle="tab" href="#info-pro-detail" role="tab"><?= thongtinsanpham ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="commentfb-pro-detail-tab" data-toggle="tab" href="#commentfb-pro-detail" role="tab"><?= binhluan ?></a>
            </li>
        </ul>
        <div class="tab-content pt-4 pb-4" id="tabsProDetailContent">
            <div class="tab-pane fade show active content-text" id="info-pro-detail" role="tabpanel">
                <?= htmlspecialchars_decode($rowDetail['content' . $lang]) ?>
            </div>
            <div class="tab-pane fade" id="commentfb-pro-detail" role="tabpanel">
                <div class="fb-comments" data-href="<?= $func->getCurrentPageURL() ?>" data-numposts="3" data-colorscheme="light" data-width="100%"></div>
            </div>
        </div>
    </div>

    <div class="title-main"><span><?= sanphamcungloai ?></span></div>
    <?php if (count($product)) { ?>
        <div class="content-main">
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
            <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
        </div>
    <?php } ?>
<?php } ?>