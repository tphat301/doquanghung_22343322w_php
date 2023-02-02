<div class="w-menu">
    <div class="menu">
        <div class="wrap-content">
            <div class="d-flex position-relative box-logo">
                <a href="" class="link-logo d-block bg-white position-absolute bottom-132">
                    <img data-src="<?= THUMBS ?>/92x155x1/<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" class="img-logo bg-white lazy" alt="logo">
                </a>
            </div>
            <ul class="d-flex align-items-center justify-content-between">
                <li class="ml-0"><a class="<?php if ($com == '' || $com == 'index') echo 'active'; ?> transition" href="" title="<?= trangchu ?>"><?= trangchu ?></a></li>
                <li><a class="<?php if ($com == 've-chung-toi') echo 'active'; ?> transition" href="ve-chung-toi" title="<?= vechungtoi ?>"><?= vechungtoi ?></a></li>
                <li>
                    <a class="has-child <?php if ($com == 'ep-coc-be-tong') echo 'active'; ?> transition" href="ep-coc-be-tong" title="<?= epcocbetong ?>"><?= epcocbetong ?></a>
                    <?php if (count($splist)) { ?>
                        <ul class="ml-0">
                            <?php foreach ($splist as $klist => $vlist) {
                                $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                                <li>
                                    <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                                    <?php if (!empty($spcat)) { ?>
                                        <ul class="ml-0">
                                            <?php foreach ($spcat as $kcat => $vcat) {
                                                $spitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>
                                                <li>
                                                    <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>
                                                    <?php if (!empty($spitem)) { ?>
                                                        <ul>
                                                            <?php foreach ($spitem as $kitem => $vitem) {
                                                                $spsub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc", array($vitem['id'])); ?>
                                                                <li>
                                                                    <a class="has-child transition" title="<?= $vitem['name' . $lang] ?>" href="<?= $vitem[$sluglang] ?>"><?= $vitem['name' . $lang] ?></a>
                                                                    <?php if (!empty($spsub)) { ?>
                                                                        <ul>
                                                                            <?php foreach ($spsub as $ksub => $vsub) { ?>
                                                                                <li>
                                                                                    <a class="transition" title="<?= $vsub['name' . $lang] ?>" href="<?= $vsub[$sluglang] ?>"><?= $vsub['name' . $lang] ?></a>
                                                                                </li>
                                                                            <?php } ?>
                                                                        </ul>
                                                                    <?php } ?>
                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    <?php } ?>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </li>
                <li>
                    <a class="has-child <?php if ($com == 'bang-gia') echo 'active'; ?> transition" href="bang-gia" title="<?= banggia ?>"><?= banggia ?></a>
                </li>
                <li>
                    <a class="has-child <?php if ($com == 'san-pham') echo 'active'; ?> transition" href="san-pham" title="<?= sanpham ?>"><?= sanpham ?></a>
                    <?php if (count($splist)) { ?>
                        <ul class="ml-0">
                            <?php foreach ($splist as $klist => $vlist) {
                                $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                                <li>
                                    <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                                    <?php if (!empty($spcat)) { ?>
                                        <ul class="ml-0">
                                            <?php foreach ($spcat as $kcat => $vcat) {
                                                $spitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>
                                                <li>
                                                    <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>
                                                    <?php if (!empty($spitem)) { ?>
                                                        <ul>
                                                            <?php foreach ($spitem as $kitem => $vitem) {
                                                                $spsub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc", array($vitem['id'])); ?>
                                                                <li>
                                                                    <a class="has-child transition" title="<?= $vitem['name' . $lang] ?>" href="<?= $vitem[$sluglang] ?>"><?= $vitem['name' . $lang] ?></a>
                                                                    <?php if (!empty($spsub)) { ?>
                                                                        <ul>
                                                                            <?php foreach ($spsub as $ksub => $vsub) { ?>
                                                                                <li>
                                                                                    <a class="transition" title="<?= $vsub['name' . $lang] ?>" href="<?= $vsub[$sluglang] ?>"><?= $vsub['name' . $lang] ?></a>
                                                                                </li>
                                                                            <?php } ?>
                                                                        </ul>
                                                                    <?php } ?>
                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    <?php } ?>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </li>
                <li>
                    <a class="has-child <?php if ($com == 'tin-tuc') echo 'active'; ?> transition" href="tin-tuc" title="<?= tintuc ?>"><?= tintuc ?></a>
                    <?php if (count($ttlist)) { ?>
                        <ul>
                            <?php foreach ($ttlist as $klist => $vlist) {
                                $ttcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($vlist['id'])); ?>
                                <li>
                                    <a class="has-child transition" title="<?= $vlist['name' . $lang] ?>" href="<?= $vlist[$sluglang] ?>"><?= $vlist['name' . $lang] ?></a>
                                    <?php if (!empty($ttcat)) { ?>
                                        <ul>
                                            <?php foreach ($ttcat as $kcat => $vcat) {
                                                $ttitem = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($vcat['id'])); ?>
                                                <li>
                                                    <a class="has-child transition" title="<?= $vcat['name' . $lang] ?>" href="<?= $vcat[$sluglang] ?>"><?= $vcat['name' . $lang] ?></a>
                                                    <?php if (!empty($ttitem)) { ?>
                                                        <ul>
                                                            <?php foreach ($ttitem as $kitem => $vitem) {
                                                                $ttsub = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_sub where id_item = ? and find_in_set('hienthi',status) order by numb,id desc", array($vitem['id'])); ?>
                                                                <li>
                                                                    <a class="has-child transition" title="<?= $vitem['name' . $lang] ?>" href="<?= $vitem[$sluglang] ?>"><?= $vitem['name' . $lang] ?></a>
                                                                    <?php if (!empty($ttsub)) { ?>
                                                                        <ul>
                                                                            <?php foreach ($ttsub as $ksub => $vsub) { ?>
                                                                                <li>
                                                                                    <a class="transition" title="<?= $vsub['name' . $lang] ?>" href="<?= $vsub[$sluglang] ?>"><?= $vsub['name' . $lang] ?></a>
                                                                                </li>
                                                                            <?php } ?>
                                                                        </ul>
                                                                    <?php } ?>
                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    <?php } ?>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </li>
                <li><a class="<?php if ($com == 'thu-vien-anh') echo 'active'; ?> transition" href="thu-vien-anh" title="<?= thuvienanh ?>"><?= thuvienanh ?></a></li>
                <li class="li-search">
                    <div id="search">
                        <a class="search" href="javascript:void();"><i class="bi bi-search"></i></a>
                        <input type="text" name="keyword" class="an" id="keyword" placeholder="<?= nhaptukhoatimkiem ?>" onkeypress="doEnter(event,'keyword');" value="<?php if (!empty($_GET['keyword'])) {
                                                                                                                                                                            echo $_GET['keyword'];
                                                                                                                                                                        } ?>">
                        <input type="hidden" onclick="onSearch('keyword');">
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <?php include TEMPLATE . LAYOUT . "mmenu.php"; ?>
</div>