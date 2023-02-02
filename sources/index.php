<?php
    if (!defined('SOURCES')) die("Error");
    /* static */
    $banner_seo_home = $cache->get("select id, photo, options from #_photo where type = ? and act = ? limit 0,1", array('banner-seo-home', 'photo_static'), 'fetch', 7200);
    $popup = $cache->get("select name$lang, photo, link from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('popup', 'photo_static'), 'fetch', 7200);
    $BannerQC = $cache->get("select name$lang, photo, link from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('banner-quangcao', 'photo_static'), 'fetch', 7200);
    $veChungToi = $cache->get("select name$lang, desc$lang, photo from #_static where type = ? limit 0,1", array('ve-chung-toi'), 'fetch', 7200);


    /* multi */
    $slider = $cache->get("select name$lang, desc$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb asc", array('slide'), 'result', 7200);
    $brand = $cache->get("select name$lang, slugvi, slugen, id, photo from #_product_brand where type = ? and find_in_set('hienthi',status) order by numb asc", array('san-pham'), 'result', 7200);
    $pronb = $cache->get("select name$lang, slugvi, slugen, id, photo, regular_price, sale_price, discount, type from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by id desc", array('san-pham'), 'result', 7200);
    $splistnb = $cache->get("select name$lang, slugvi, slugen, id from #_product_list where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb asc", array('san-pham'), 'result', 7200);
    $thuVienAnh = $cache->get("select photo, slugvi, name$lang from #_product where type = ? and find_in_set('hienthi',status) order by numb asc", array('thu-vien-anh'), 'result', 7200);
    $newsnb = $d->rawQuery("select name$lang, slugvi, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by id desc", array('tin-tuc'));

    $tieuChi = $cache->get("select name$lang, quantity, photo from #_photo where type = ? and find_in_set('hienthi',status) order by numb asc", array('tieu-chi'), 'result', 7200);

    $epCocBeTongNB = $cache->get("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb asc", array('ep-coc-be-tong'), 'result', 7200);
    $videonb = $cache->get("select id,name$lang,link_video from #_photo where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb asc", array('video'), 'result', 7200);
    $partner = $cache->get("select name$lang, link, photo from #_photo where type = ? and find_in_set('hienthi',status) order by numb asc", array('doitac'), 'result', 7200);
    $quangcao = $cache->get("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb asc", array('quang-cao'), 'result', 7200);

    /* SEO */
    $seoDB = $seo->getOnDB(0, 'setting', 'update', 'setting');
    if (!empty($seoDB['title' . $seolang])) $seo->set('h1', $seoDB['title' . $seolang]);
    if (!empty($seoDB['title' . $seolang])) $seo->set('title', $seoDB['title' . $seolang]);
    if (!empty($seoDB['keywords' . $seolang])) $seo->set('keywords', $seoDB['keywords' . $seolang]);
    if (!empty($seoDB['description' . $seolang])) $seo->set('description', $seoDB['description' . $seolang]);
    $seo->set('url', $func->getPageURL());
    $imgJson = (!empty($banner_seo_home['options'])) ? json_decode($banner_seo_home['options'], true) : null;
    if (empty($imgJson) || ($imgJson['p'] != $banner_seo_home['photo'])) {
        $imgJson = $func->getImgSize($banner_seo_home['photo'], UPLOAD_PHOTO_L . $banner_seo_home['photo']);
        $seo->updateSeoDB(json_encode($imgJson), 'photo', $banner_seo_home['id']);
    }
    if (!empty($imgJson)) {
        $seo->set('photo', $configBase . THUMBS . '/' . $imgJson['w'] . 'x' . $imgJson['h'] . 'x2/' . UPLOAD_PHOTO_L . $banner_seo_home['photo']);
        $seo->set('photo:width', $imgJson['w']);
        $seo->set('photo:height', $imgJson['h']);
        $seo->set('photo:type', $imgJson['m']);
    }
?>