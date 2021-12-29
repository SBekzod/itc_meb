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


<!--SIDE BAR-->
<div id="side_menu">
    <ul id="quick">
        <li><button class="btn_sm_cl1 btn_sm"><i class="fa fa-user-o" aria-hidden="true"></i><span class="qk_tit">마이메뉴</span></button></li>
        <li><button class="btn_sm_cl2 btn_sm"><i class="fa fa-archive" aria-hidden="true"></i><span class="qk_tit">오늘 본 상품</span></button></li>
        <li><button class="btn_sm_cl3 btn_sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="qk_tit">장바구니</span></button></li>
        <li><button class="btn_sm_cl4 btn_sm"><i class="fa fa-heart-o" aria-hidden="true"></i><span class="qk_tit">위시리스트</span></button></li>
    </ul>
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
    <div id="tabs_con">
        <div class="side_mn_wr1 qk_con">
            <div class="qk_con_wr">
                <?php echo outlogin('theme/shop_side'); // 아웃로그인 ?>
                <ul class="side_tnb">
                    <?php if ($is_member) { ?>
                        <li><a href="<?php echo G5_SHOP_URL; ?>/mypage.php">마이페이지</a></li>
                    <?php } ?>
                    <li><a href="<?php echo G5_SHOP_URL; ?>/orderinquiry.php">주문내역</a></li>
                    <li><a href="<?php echo G5_BBS_URL ?>/faq.php">FAQ</a></li>
                    <li><a href="<?php echo G5_BBS_URL ?>/qalist.php">1:1문의</a></li>
                    <li><a href="<?php echo G5_SHOP_URL ?>/personalpay.php">개인결제</a></li>
                    <li><a href="<?php echo G5_SHOP_URL ?>/itemuselist.php">사용후기</a></li>
                    <li><a href="<?php echo G5_SHOP_URL ?>/itemqalist.php">상품문의</a></li>
                    <li><a href="<?php echo G5_SHOP_URL; ?>/couponzone.php">쿠폰존</a></li>
                </ul>
                <?php // include_once(G5_SHOP_SKIN_PATH.'/boxcommunity.skin.php'); // 커뮤니티 ?>
                <button type="button" class="con_close"><i class="fa fa-times-circle" aria-hidden="true"></i><span class="sound_only">나의정보 닫기</span></button>
            </div>
        </div>
        <div class="side_mn_wr2 qk_con">
            <div class="qk_con_wr">
                <?php include(G5_SHOP_SKIN_PATH.'/boxtodayview.skin.php'); // 오늘 본 상품 ?>
                <button type="button" class="con_close"><i class="fa fa-times-circle" aria-hidden="true"></i><span class="sound_only">오늘 본 상품 닫기</span></button>
            </div>
        </div>
        <div class="side_mn_wr3 qk_con">
            <div class="qk_con_wr">
                <?php include_once(G5_SHOP_SKIN_PATH.'/boxcart.skin.php'); // 장바구니 ?>
                <button type="button" class="con_close"><i class="fa fa-times-circle" aria-hidden="true"></i><span class="sound_only">장바구니 닫기</span></button>
            </div>
        </div>
        <div class="side_mn_wr4 qk_con">
            <div class="qk_con_wr">
                <?php include_once(G5_SHOP_SKIN_PATH.'/boxwish.skin.php'); // 위시리스트 ?>
                <button type="button" class="con_close"><i class="fa fa-times-circle" aria-hidden="true"></i><span class="sound_only">위시리스트 닫기</span></button>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(function ($){
        $(".btn_member_mn").on("click", function() {
            $(".member_mn").toggle();
            $(".btn_member_mn").toggleClass("btn_member_mn_on");
        });

        var active_class = "btn_sm_on",
            side_btn_el = "#quick .btn_sm",
            quick_container = ".qk_con";

        $(document).on("click", side_btn_el, function(e){
            e.preventDefault();

            var $this = $(this);

            if (!$this.hasClass(active_class)) {
                $(side_btn_el).removeClass(active_class);
                $this.addClass(active_class);
            }

            if( $this.hasClass("btn_sm_cl1") ){
                $(".side_mn_wr1").show();
            } else if( $this.hasClass("btn_sm_cl2") ){
                $(".side_mn_wr2").show();
            } else if( $this.hasClass("btn_sm_cl3") ){
                $(".side_mn_wr3").show();
            } else if( $this.hasClass("btn_sm_cl4") ){
                $(".side_mn_wr4").show();
            }
        }).on("click", ".con_close", function(e){
            $(quick_container).hide();
            $(side_btn_el).removeClass(active_class);
        });

        $(document).mouseup(function (e){
            var container = $(quick_container),
                mn_container = $(".shop_login");
            if( container.has(e.target).length === 0){
                container.hide();
                $(side_btn_el).removeClass(active_class);
            }
            if( mn_container.has(e.target).length === 0){
                $(".member_mn").hide();
                $(".btn_member_mn").removeClass("btn_member_mn_on");
            }
        });

        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
</script>
<!--END SIDE BAR-->


<!-- 전체 콘텐츠 시작 { -->
<div id="wrapper" class="<?php echo implode(' ', $wrapper_class); ?>">



    <!-- #container 시작 { -->
    <div id="container">

        <!-- START HEADER-->
        <div class="header_frame">
            <div class="navbar_frame">
                <div class="menu_logo"><a href=""><img src="/css/shop/assets/GoodFurniture.png"></a></div>
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
                </div>
                <div class="menu_search"><input class="" type="text" placeholder="Search for minimalist chair"></div>
                <div class="effect_menu">
                    <div><a href=""><img src="/css/shop/assets/Heart.svg"></a></div>
                    <div><a href=""><img src="/css/shop/assets/Cart.svg"></a></div>
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
                        <button class="next_menu"><img src="/css/shop/assets/Line.png"></button>
                        <button class="prev_menu"><img src="/css/shop/assets/Line.png"></button>
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