<?php if (count($brand)) { ?>
    <div class="wrap-brand">
        <div class="wrap-content padding-top-bottom">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="2:10" data-sm-items="5:10" data-md-items="5:10" data-lg-items="6:10" data-xlg-items="7:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" data-navcontainer=".control-brand">
                <?php foreach ($brand as $v) { ?>
                    <div>
                        <a class="brand text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                            <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/150x150x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/150x150x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="control-brand control-owl transition"></div>
        </div>
    </div>
<?php } ?>

<!-- PHẦN TIÊU CHÍ ĐÁNH GIÁ -->
<?php if (count($tieuChi)) { ?>
    <div class="revenue">
        <div class="wrap-content">
            <section class="flex-cus row">
                <?php foreach ($tieuChi as $v) { ?>
                    <div class=" mg-cus col-lg-3 col-md-4 col-sm-6">
                        <div class="item-revenue">
                            <img class="img-revenue lazy d-block" data-src="<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>">
                            <div class="revenue-r">
                                <p class="numb-revenue mb-0"><span class="counter"><?= $v['quantity'] ?></span> +</p>
                                <p class="desc-revenue"><?= $v['name' . $lang] ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </section>
        </div>
    </div>
<?php } ?>


<!-- PHẦN ÉP CỌC BÊ TÔNG -->
<?php if (count($epCocBeTongNB)) { ?>
    <div class="service-us">
        <div class="wrap-content">
            <div class="service-title">
                <?= epcocbetong ?>
            </div>
            <div class="box-rectangle">
                <img src="assets/images/photo/icon-3-hcn.png" class="img-rectangle" alt="">
            </div>
            <div class="list-service row row-service ">
                <?php foreach ($epCocBeTongNB as $v) { ?>
                    <div class="col-service col-md-4 col-sm-6 ">
                        <div class="service-item">
                            <a href="" class="service-img-link d-block">
                                <img class="lazy w-100 service-img-main" style="border-radius: 12px; overflow: hidden;" onerror="this.src='<?= THUMBS ?>/388x251x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/388x251x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                            </a>
                            <a class="service-name text-split text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
<?php
if (count($epCocBeTongNB) > 5) {
    echo "<div class='box-more-ep-coc-be-tong wrap-content'><a href='ep-coc-be-tong' class='more-ep-coc-be-tong'>Xem thêm</a></div>";
}
?>

<!-- PHẦN GIỚI THIỆU -->
<div class="about">
    <div class="about-css wrap-content row align-items-center">
        <div class="col-about-css col-md-12 col-sm-12 col-lg-6">
            <div class="about-left">
                <span class="text-uppercase about-title">
                    <?= $veChungToi['name' . $lang] ?>
                </span>
                <div class="about-desc text-split">
                    <?= htmlspecialchars_decode($veChungToi['desc' . $lang]) ?>
                </div>
                <a href="ve-chung-toi" class="more-about"><?= xemtaca ?></a>
            </div>
        </div>
        <div class="avatar-about col-md-12 col-sm-12 col-lg-6">
            <div class="about-right d-block">
                <img src="<?= UPLOAD_NEWS_L . $veChungToi['photo'] ?>" class="about-thumb w-100" alt="">
            </div>
        </div>
    </div>
</div>

<!-- PHẦN HÌNH ẢNH DỰ ÁN -->
<?php if (count($thuVienAnh)) { ?>
    <div class="service-us">
        <div class="wrap-content pb-59">
            <div class="service-title">
                <?= hinhanhduan ?>
            </div>
            <div class="box-rectangle">
                <img src="assets/images/photo/icon-3-hcn.png" class="img-rectangle" alt="">
            </div>
            <div class="list-service row">
                <div class="col-item-sv-l col-md-4 col-sm-12">
                    <div class="service-item-left">
                        <a href="<?= $thuVienAnh[0][$sluglang] ?>" title="<?= $thuVienAnh[0]['name' . $lang] ?>" class="d-block">
                            <img style="border-radius: 12px; overflow: hidden;" class="lazy w-100" onerror="this.src='<?= THUMBS ?>/285x285x1/assets/images/noimage.png';" data-src="<?= UPLOAD_PRODUCT_L . $thuVienAnh[0]['photo'] ?>" alt="<?= $thuVienAnh[0]['name' . $lang] ?>" title="<?= $thuVienAnh[0]['name' . $lang] ?>" />
                        </a>
                    </div>
                </div>
                <div class="col-item-sv col-md-8 col-sm-12">
                    <div class="row">
                        <?php foreach ($thuVienAnh as $k => $v) {
                            if ($k > 0) { ?>
                                <div class="col-item-sv-r col-6">
                                    <a href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>" class="service-img-link-img d-block">
                                        <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/285x285x1/assets/images/noimage.png';" data-src="<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                                    </a>
                                </div>
                        <?php }
                        } ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- PHẦN ĐĂNG KÝ DỊCH VỤ -->
<div class="register-service">
    <div class="wrap-content">
        <div class="box-title-register-service">
            <span class="title-register-service">Đăng ký dịch vụ</span>
            <p class="description-register-service">Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc</p>
        </div>
        <div class="register-service-main">
            <form class="validation-newsletter form-register-service" novalidate="" method="post" action="" enctype="multipart/form-data">
                <div class="box-fullname-email-tel form-row">
                    <div class="col-sv-main-it col-md-4 col-sm-12">
                        <div class="box-fullname">
                            <input type="text" class="form-control text-sm" id="email-newsletter" name="dataNewsletter[fullname]" placeholder="Họ và tên" required="">
                            <div class="invalid-feedback">Họ và tên</div>
                            <img src="assets/images/photo/person-card.png" class="icon-person-card" alt="">
                        </div>
                    </div>
                    <div class="col-sv-main-it col-md-4 col-sm-12">
                        <div class="box-email">
                            <input type="email" class="form-control text-sm" id="email-newsletter" name="dataNewsletter[email]" placeholder="Email" required="">
                            <div class="invalid-feedback">Email</div>
                            <img src="assets/images/photo/email-res-icon.png" class="icon-email-res" alt="">
                        </div>
                    </div>
                    <div class="col-sv-main-it col-md-4 col-sm-12">
                        <div class="box-tel">
                            <input type="text" class="form-control text-sm" id="email-newsletter" name="dataNewsletter[phone]" placeholder="Số điện thoại" required="">
                            <div class="invalid-feedback">Số điện thoại</div>
                            <img src="assets/images/photo/phone-icon-res.png" class="icon-email-res" alt="">
                        </div>
                    </div>
                </div>
                <div class="box-content">
                    <textarea class="form-control text-sm" id="email-newsletter" name="dataNewsletter[content]" cols="30" rows="4" placeholder="Nội dung"></textarea>
                    <div class="invalid-feedback">Nội dung</div>
                </div>
                <div class="box-form-sub">
                    <div class="form-sub">
                        <img src="assets/images/photo/fly-icon.png" alt="">
                        <input type="submit" name="btn btn-res" value="GỬI THÔNG TIN">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- PHẦN VIDEO VÀ TIN TỨC -->
<?php if (count($newsnb) || count($videonb)) { ?>
    <div class="wrap-intro wrap-content box-video-news d-flex flex-wrap align-items-start justify-content-between">
        <div class="left-intro">
            <p class="title-intro"><span><?= tintuc ?></span></p>
            <div class="flex_ttnb">
                <div class="newshome-scroll">
                    <div class="slick-v-3">
                        <?php foreach ($newsnb as $k => $v) { ?>
                            <div>
                                <div class="news-slick">
                                    <a class="img scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                        <img onerror="this.src='<?= THUMBS ?>/168x129x1/assets/images/noimage.png';" src="<?= THUMBS ?>/168x129x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                                    </a>
                                    <div class="info">
                                        <h3>
                                            <a class="name-newshome text-split text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                                        </h3>
                                        <p class="desc-newshome desc-home-cl text-split"><?= $v['desc' . $lang] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-intro">
            <p class="title-intro"><span><?= video ?></span></p>
            <div class="videohome-intro">
                <?php foreach ($videonb as $k => $v) { ?>
                    <a class="item-video1 pic-video scale-img text-decoration-none" data-fancybox="video" data-src="<?= $v['link_video'] ?>" title="<?= $v['name' . $lang] ?>">
                        <img onerror="this.src='<?= THUMBS ?>/480x360x2/assets/images/noimage.png';" src="https://img.youtube.com/vi/<?= $func->getYoutube($v['link_video']) ?>/0.jpg" alt="<?= $v['name' . $lang] ?>" />
                    </a>
                <?php break;
                } ?>
                <div class="div_hiden">
                    <div class="owl-page owl-carousel owl-theme owl-videorun" data-xsm-items="3:10" data-sm-items="3:10" data-md-items="3:10" data-lg-items="3:10" data-xlg-items="3:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="0" data-navtext="" data-navcontainer="">
                        <?php foreach ($videonb as $k => $v) { ?>
                            <div>
                                <a class="item-video2 pic-video-2 scale-img text-decoration-none" data-fancybox="video" data-src="<?= $v['link_video'] ?>" title="<?= $v['name' . $lang] ?>">
                                    <img onerror="this.src='<?= THUMBS ?>/480x360x2/assets/images/noimage.png';" src="https://img.youtube.com/vi/<?= $func->getYoutube($v['link_video']) ?>/0.jpg" alt="<?= $v['name' . $lang] ?>" />
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- PHẦN ĐỐI TÁC -->
<?php if (count($partner)) { ?>
    <div class="wrap-partner pad-bottom">
        <div class="wrap-content box-partner">
            <div class="owl-page owl-carousel owl-theme" data-xsm-items="3:10" data-sm-items="5:10" data-md-items="5:10" data-lg-items="6:10" data-xlg-items="7:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" data-navcontainer=".control-partner">
                <?php foreach ($partner as $v) { ?>
                    <div>
                        <a class="partner" href="<?= $v['link'] ?>" target="_blank" title="<?= $v['name' . $lang] ?>">
                            <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/184x92x1/assets/images/noimage.png';" data-src="<?= THUMBS ?>/184x92x2/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>