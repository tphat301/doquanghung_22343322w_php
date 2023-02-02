<?php
    /* Bảng giá */
    $nametype = "bang-gia";
    $config['news'][$nametype]['title_main'] = "Bảng giá";
    $config['news'][$nametype]['item'] = false;
    $config['news'][$nametype]['sub'] = false;
    $config['news'][$nametype]['tags'] = false;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['office'] = false;/*chuc vu*/
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['gallery'] = array();
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 576;
    $config['news'][$nametype]['height'] = 432;
    $config['news'][$nametype]['thumb'] = '100x100x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Ép cọc bê tông */
    $nametype = "ep-coc-be-tong";
    $config['news'][$nametype]['title_main'] = "Ép cọc bê tông";
    $config['news'][$nametype]['dropdown'] = true;
    $config['news'][$nametype]['list'] = true;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['office'] = false;/*chuc vu*/
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['gallery'] = array();
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 388;
    $config['news'][$nametype]['height'] = 251;
    $config['news'][$nametype]['thumb'] = '100x100x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Ép cọc bê tông (List) */
    $config['news'][$nametype]['title_main_list'] = "danh mục cấp 1";
    $config['news'][$nametype]['images_list'] = false;
    $config['news'][$nametype]['show_images_list'] = false;
    $config['news'][$nametype]['slug_list'] = true;
    $config['news'][$nametype]['check_list'] = array("hienthi" => "Hiển thị");
    $config['news'][$nametype]['gallery_list'] = array();
    $config['news'][$nametype]['desc_list'] = false;
    $config['news'][$nametype]['desc_cke_list'] = false;
    $config['news'][$nametype]['content_list'] = false;
    $config['news'][$nametype]['seo_list'] = true;
    // $config['news'][$nametype]['width_list'] = 388;
    // $config['news'][$nametype]['height_list'] = 251;
    // $config['news'][$nametype]['thumb_list'] = '388x251x1';
    // $config['news'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif';
    
    
    /* Tin tức */
    $nametype = "tin-tuc";
    $config['news'][$nametype]['title_main'] = "Tin tức";
    $config['news'][$nametype]['dropdown'] = false;
    $config['news'][$nametype]['list'] = false;
    $config['news'][$nametype]['cat'] = false;
    $config['news'][$nametype]['item'] = false;
    $config['news'][$nametype]['sub'] = false;
    $config['news'][$nametype]['tags'] = true;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['office'] = false;/*chuc vu*/
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['gallery'] = array();
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 576;
    $config['news'][$nametype]['height'] = 432;
    $config['news'][$nametype]['thumb'] = '100x100x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Chính sách */
    $nametype = "chinh-sach";
    $config['news'][$nametype]['title_main'] = "Chính sách";
    $config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 576;
    $config['news'][$nametype]['height'] = 432;
    $config['news'][$nametype]['thumb'] = '100x100x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Quản lý mục (Không cấp) */
    if(isset($config['news']))
    {
        foreach($config['news'] as $key => $value)
        {
            if(!isset($value['dropdown']) || (isset($value['dropdown']) && $value['dropdown'] == false))
            { 
                $config['shownews'] = 1;
                break;
            }
        }
    }
?>