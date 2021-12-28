<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$q = isset($_GET['q']) ? clean_xss_tags($_GET['q'], 1, 1) : '';

if(G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_javascript('<script src="'.G5_JS_URL.'/owlcarousel/owl.carousel.min.js"></script>', 10);
add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/owlcarousel/owl.carousel.css">', 0);
?>

<!-- 전체 콘텐츠 시작 { -->
<div id="wrapper" class="<?php echo implode(' ', $wrapper_class); ?>">
    <!-- #container 시작 { -->
    <div id="container">

        <!-- START HEADER-->
        <div class="header_frame">
            <div class="navbar_frame">
                <div class="menu_logo">Funiro.</div>
                <div class="nav_menu">
                    <div class="product_menu">
                        <select>
                            <option selected>Product</option>
                            <option>Product 2</option>
                            <option>Product 3</option>
                            <option>Product 4</option>
                        </select>
                    </div>
                    <div>
                        <select>
                            <option selected>Rooms</option>
                            <option>Product 2</option>
                            <option>Product 3</option>
                            <option>Product 4</option>
                        </select>
                    </div>
                    <div class="inspirations">Inspirations</div>
                </div>
                <div class="menu_search"><input class="" type="text" placeholder="Search for minimalist chair"></div>
                <div class="effect_menu">
                    <div><img src="/css/shop/assets/Heart.svg"></div>
                    <div><img src="/css/shop/assets/Cart.svg"></div>
                    <div>Light</div>
                    <div class="login_btn"><button type="button">Login</button></div>
                </div>
            </div>
            <div class="next_frame">
                <div class="next_box">
                    <div class="nav_next">
                        <div class="next_btn"><div class="next_btn_round"></div></div>
                        <div class="next_btn_round"></div>
                        <div class="next_btn_round"></div>
                    </div>

                    <div class="next_prev_btn">
                        <div class="next_menu"><img src="/css/shop/assets/Line.png"></div>
                        <div class="prev_menu"><img src="/css/shop/assets/Line.png"></div>
                    </div>
                </div>
            </div>
            <div class="header_img">
                <div class="header_images">
                    <div class="header_img_frame">
                        <div class="header_img_box">
                            <p class="header_img_title">Bohauss</p>
                            <p class="header_img_desc">Luxury big sofa 2-seat</p>
                            <div class="header_img_frame_bott">
                                <p class="header_bott_title">Rp 17.000.000</p>
                                <img src="/css/shop/assets/arrow2.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ABSOLUTE -->
            <div class="abs_frame">
                <div class="abs_box">
                    <p class="abs_title">High-Quality Furniture Just For You</p>
                    <p class="abs_desc">Our furniture is made from selected and best quality materials that are suitable for your dream home</p>
                    <div class="abs_btn">
                        <button type="button">SHop Now</button>
                    </div>
                </div>
            </div>


        </div>
        <!-- END  HEADER-->

        <?php if(defined('_INDEX_')) { ?>
        <?php } // end if ?>
        <?php
            $content_class = array('shop-content');
            if( isset($it_id) && isset($it) && isset($it['it_id']) && $it_id === $it['it_id']){
                $content_class[] = 'is_item';
            }
            if( defined('IS_SHOP_SEARCH') && IS_SHOP_SEARCH ){
                $content_class[] = 'is_search';
            }
            if( defined('_INDEX_') && _INDEX_ ){
                $content_class[] = 'is_index';
            }
        ?>
        <!-- .shop-content 시작 { -->
        <div class="<?php echo implode(' ', $content_class); ?>">
            <?php if ((!$bo_table || $w == 's' ) && !defined('_INDEX_')) { ?><div id="wrapper_title"><?php echo $g5['title'] ?></div><?php } ?>
            <!-- 글자크기 조정 display:none 되어 있음 시작 { -->
            <div id="text_size">
                <button class="no_text_resize" onclick="font_resize('container', 'decrease');">작게</button>
                <button class="no_text_resize" onclick="font_default('container');">기본</button>
                <button class="no_text_resize" onclick="font_resize('container', 'increase');">크게</button>
            </div>
            <!-- } 글자크기 조정 display:none 되어 있음 끝 -->