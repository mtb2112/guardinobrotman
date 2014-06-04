<?php

/**
 * Shop Box
 *
 * To override this shortcode in a child theme, copy this file to your child theme's
 * theme_config/extensions/shortcodes/shortcodes/ folder.
 */

function tfuse_shop($atts, $content = null)
{   $out='';
    extract(shortcode_atts(array('number' => '', 'image1' => '', 'link1' => '','name1' => '','image2' => '',
    'link2' => '','name2' => '','image3' => '','link3' => '','name3' => '','store' => '','target' => ''), $atts));
    $out.='<div class="registry-shop-wrap"><div class="row">';
    if($number=='1') {$out.='<div class="col_1"><a class="registry-link" target="'.$target.'" style="outline: medium none;" hidefocus="true" href="'.$link1.'"><img class="registry-image" src="'.$image1.'" alt=""></a><div class="registry-name">'.$name1.'
    <a class="registry-link" target="'.$target.'" style="outline: medium none;" hidefocus="true" href="'.$link1.'">'.$store.'</a></div></div>';}
    elseif($number=='2'){ $out.='<div class="col col_1_2"><a target="'.$target.'" style="outline: medium none;" hidefocus="true" href="'.$link1.'"><img class="registry-image" src="'.$image1.'" alt=""></a><div class="registry-name">'.$name1.'
    <a class="registry-link" target="'.$target.'" style="outline: medium none;" hidefocus="true" href="'.$link1.'">'.$store.'</a></div></div>
    <div class="col col_1_2"><a target="'.$target.'" style="outline: medium none;" hidefocus="true" href="'.$link2.'"><img class="registry-image" src="'.$image2.'" alt=""></a><div class="registry-name">'.$name2.'
    <a class="registry-link" target="'.$target.'" style="outline: medium none;" hidefocus="true" href="'.$link2.'">'.$store.'</a></div></div>';}
    else{ $out.='<div class="col col_1_3"><a target="'.$target.'" style="outline: medium none;" hidefocus="true" href="'.$link1.'"><img class="registry-image" src="'.$image1.'" alt=""></a><div class="registry-name">'.$name1.'
    <a class="registry-link" target="'.$target.'" style="outline: medium none;" hidefocus="true" href="'.$link1.'">'.$store.'</a></div></div>
    <div class="col col_1_3"><a target="'.$target.'" style="outline: medium none;" hidefocus="true" href="'.$link2.'"><img class="registry-image" src="'.$image2.'" alt=""></a><div class="registry-name">'.$name2.'
    <a class="registry-link" target="'.$target.'" style="outline: medium none;" hidefocus="true" href="'.$link2.'">'.$store.'</a></div></div>
    <div class="col col_1_3"><a target="'.$target.'" style="outline: medium none;" hidefocus="true" href="'.$link3.'"><img class="registry-image" src="'.$image3.'" alt=""></a><div class="registry-name">'.$name3.'
    <a class="registry-link" target="'.$target.'" style="outline: medium none;" hidefocus="true" href="'.$link3.'">'.$store.'</a></div></div>';}
    $out.='</div></div>';
    return $out;
}

$atts = array(
    'name' => __('Registry', 'tfuse'),
    'desc' => __('Here comes some lorem ipsum description for this shortcode.', 'tfuse'),
    'category' => 1,
    'options' => array(
        array(
            'name' => __('Shop number', 'tfuse'),
            'desc' => __('Select the number of the shop', 'tfuse'),
            'id' => 'tf_shc_shop_number',
            'value' => '3',
            'options' => array(
                '1' => '1',
                '2' => '2',
                '3' => '3',
            ),
            'type' => 'select'
        ),
        array(
            'name' => __('Image 1', 'tfuse'),
            'desc' => __('Specifies the src of the image', 'tfuse'),
            'id' => 'tf_shc_shop_image1',
            'value' => '',
            'type' => 'text'
        ),
        array(
            'name' => __('Link 1', 'tfuse'),
            'desc' => __('Specifies the URL of the shop store', 'tfuse'),
            'id' => 'tf_shc_shop_link1',
            'value' => '',
            'type' => 'text'
        ),
        array(
            'name' => __('Name 1', 'tfuse'),
            'desc' => __('Specifies the name of the shop', 'tfuse'),
            'id' => 'tf_shc_shop_name1',
            'value' => '',
            'type' => 'text'
        ),
        array(
            'name' => __('Image 2', 'tfuse'),
            'desc' => __('Specifies the src of the image', 'tfuse'),
            'id' => 'tf_shc_shop_image2',
            'value' => '',
            'type' => 'text'
        ),
        array(
            'name' => __('Link 2', 'tfuse'),
            'desc' => __('Specifies the URL of the shop store', 'tfuse'),
            'id' => 'tf_shc_shop_link2',
            'value' => '',
            'type' => 'text'
        ),
        array(
            'name' => __('Name 2', 'tfuse'),
            'desc' => __('Specifies the name of the shop', 'tfuse'),
            'id' => 'tf_shc_shop_name2',
            'value' => '',
            'type' => 'text'
        ),
        array(
            'name' => __('Image 3', 'tfuse'),
            'desc' => __('Specifies the src of the image', 'tfuse'),
            'id' => 'tf_shc_shop_image3',
            'value' => '',
            'type' => 'text'
        ),
        array(
            'name' => __('Link 3', 'tfuse'),
            'desc' => __('Specifies the URL of the shop store', 'tfuse'),
            'id' => 'tf_shc_shop_link3',
            'value' => '',
            'type' => 'text'
        ),
        array(
            'name' => __('Name 3', 'tfuse'),
            'desc' => __('Specifies the name of the shop', 'tfuse'),
            'id' => 'tf_shc_shop_name3',
            'value' => '',
            'type' => 'text'
        ),
        array(
            'name' => __('Link store', 'tfuse'),
            'desc' => __('Specifies the name of the link,ex: GO TO STORE', 'tfuse'),
            'id' => 'tf_shc_shop_store',
            'value' => 'GO TO STORE',
            'type' => 'text'
        ),
        array(
            'name' => __('Target', 'tfuse'),
            'desc' => __('Specifies where to open the linked shortcode', 'tfuse'),
            'id' => 'tf_shc_shop_target',
            'value' => '',
            'options' => array(
                '_self' => __('In the same frame as it was clicked', 'tfuse'),
                '_blank' => __('In a new window or tab', 'tfuse'),
                '_parent' => __('In the parent frame', 'tfuse'),
                '_top' => __('In the full body of the window', 'tfuse'),
            ),
            'type' => 'select'
        )
    )
);

tf_add_shortcode('shop', 'tfuse_shop', $atts);
