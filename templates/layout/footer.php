<div class="footer">
    <div class="footer-article padding-top-bottom">
        <div class="wrap-content d-flex flex-wrap align-items-start justify-content-between">
            <div class="footer-news">
                <p class="name-company-footer"><?= $footer['name' . $lang] ?></p>
                <div class="footer-info">
                    <?= htmlspecialchars_decode($footer['content' . $lang]) ?>
                </div>
                <?php if (count($social_follow)) { ?>
                    <div class="social social-fl social-footer d-flex align-items-center">
                        <p class="title-fl-us">Follow us:</p>
                        <?php foreach ($social_follow as $k => $v) { ?>
                            <a href="<?= $v['link'] ?>" target="_blank" class="text-decoration-none">
                                <img class="lazy" data-src="<?= THUMBS ?>/30x30x2/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>">
                            </a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <div class="footer-news">
                <p class="footer-title"><?= chinhsach ?></p>
                <ul class="footer-ul">
                    <?php foreach ($policy as $v) { ?>
                        <li>
                            <img src="assets/images/photo/icon-mui-ten-chu-thich.png" alt="">
                            <a href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="footer-news">
                <p class="footer-title">Fanpage</p>
                <?= $addons->set('fanpage-facebook', 'fanpage-facebook', 2); ?>
            </div>
        </div>
    </div>
    <div class="footer-powered">
        <div class="wrap-content d-flex flex-wrap align-items-center justify-content-between">
            <div class="copyright">Copyright <?= $copyright['name' . $lang] ?>. Web Design by Nina.vn</div>
            <div class="statistic">
                <span><?= dangonline ?>: <?= $online ?></span>
                <span><?= trongtuan ?>: <?= $counter['week'] ?></span>
                <span><?= trongthang ?>: <?= $counter['month'] ?></span>
                <span><?= tongtruycap ?>: <?= $counter['total'] ?></span>
            </div>
        </div>
    </div>
    <?= $addons->set('footer-map', 'footer-map', 6); ?>
    <?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img data-src="assets/images/zl.png" alt="zalo" class="lazy"></i>
</a>
<a class="btn-phone btn-frame text-decoration-none" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><img data-src="assets/images/hl.png" alt="Hotline" class="lazy"></i>
</a>