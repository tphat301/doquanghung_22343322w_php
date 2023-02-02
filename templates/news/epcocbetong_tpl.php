<div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></div>
<?php if ($com == 'tim-kiem') { ?>
    <div class="div_kq_search mb-4"><?= $titleMain ?> (<?= $total ?>): <span>"<?php echo $tukhoa_show; ?>"</span></div>
<?php } ?>

<div class="row-epcoc row">
    <?php if (isset($news) && count($news) > 0) { ?>
        <?php foreach ($news as $k => $v) { ?>
            <div class="col-service col-md-4 col-sm-6 col-6">
                <div class="service-item">
                    <a href="<?= $v[$sluglang] ?>" class="service-img-link d-block">
                        <img class="lazy w-100 service-img-main" onerror="this.src='<?= THUMBS ?>/388x251x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/388x251x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                    </a>
                    <a class="service-name text-split text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
        <div class="col-12">
            <div class="alert alert-warning w-100" role="alert">
                <strong><?= khongtimthayketqua ?></strong>
            </div>
        </div>
    <?php } ?>
    <div class="col-12">
        <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
    </div>
</div>