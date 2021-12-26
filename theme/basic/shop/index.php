<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/index.php');
    return;
}

if(! defined('_INDEX_')) define('_INDEX_', TRUE);

//include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
include_once(G5_THEME_SHOP_PATH.'/shop.head_r.php');

?>

    <!-- 메인이미지 시작 { -->
<?php echo display_banner('메인', 'mainbanner.10.skin.php'); ?>
    <!-- } 메인이미지 끝 -->
<head>
    <link rel="stylesheet" href="/css/shop/index.css">
</head>
    <!--START BODY-->
    <div class="content">
        <!--START PRODUCT-->
        <div class="product">
            <p class="our_pr">OUR PRODUCT</p>
            <!-- PRODUCT FRAME-->
            <div class="product_frame">
                <div class="product_box">
                    <div class="product_img">
                        <div class="sale_box"><p>-30%</p></div>
                    </div>
                    <div style="margin: 16px 0px 0px 16px">
                        <p class="product_name">Syltherine</p>
                        <p class="product_desc">Stylish cafe chair</p>
                        <div class="price_frame">
                            <p class="price">Rp 2.500.000</p>
                            <p class="no_price">Rp 3.500.000</p>
                        </div>
                    </div>
                </div>
                <div class="product_box">
                    <div class="product_img">
                        <div class="sale_box"><p>-10%</p></div>
                    </div>
                    <div style="margin: 16px 0px 0px 16px">
                        <p class="product_name">Syltherine</p>
                        <p class="product_desc">Stylish cafe chair</p>
                        <div class="price_frame">
                            <p class="price">Rp 2.500.000</p>
                            <p class="no_price">Rp 3.500.000</p>
                        </div>
                    </div>
                </div>
                <div class="product_box">
                    <div class="product_img">
                        <div class="sale_box"><p>-50%</p></div>
                    </div>
                    <div style="margin: 16px 0px 0px 16px">
                        <p class="product_name">Syltherine</p>
                        <p class="product_desc">Stylish cafe chair</p>
                        <div class="price_frame">
                            <p class="price">Rp 2.500.000</p>
                            <p class="no_price">Rp 3.500.000</p>
                        </div>
                    </div>
                </div>
                <div class="product_box">
                    <div class="product_img">
                        <div class="new_box"><p>New</p></div>
                    </div>
                    <div style="margin: 16px 0px 0px 16px">
                        <p class="product_name">Syltherine</p>
                        <p class="product_desc">Stylish cafe chair</p>
                        <div class="price_frame">
                            <p class="price">Rp 2.500.000</p>
                            <p class="no_price">Rp 3.500.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PRODUCT FRAME-->
            <!-- PRODUCT FRAME-->
            <div class="product_frame">
                <div class="product_box">
                    <div class="product_img">
                        <div class="new_box"><p>New</p></div>
                    </div>
                    <div style="margin: 16px 0px 0px 16px">
                        <p class="product_name">Syltherine</p>
                        <p class="product_desc">Stylish cafe chair</p>
                        <div class="price_frame">
                            <p class="price">Rp 2.500.000</p>
                            <p class="no_price">Rp 3.500.000</p>
                        </div>
                    </div>
                </div>
                <div class="product_box">
                    <div class="product_img">
                        <div class="sale_box"><p>-80%</p></div>
                    </div>
                    <div style="margin: 16px 0px 0px 16px">
                        <p class="product_name">Syltherine</p>
                        <p class="product_desc">Stylish cafe chair</p>
                        <div class="price_frame">
                            <p class="price">Rp 2.500.000</p>
                            <p class="no_price">Rp 3.500.000</p>
                        </div>
                    </div>
                </div>
                <div class="product_box">
                    <div class="product_img">
                        <div class="sale_box"><p>-30%</p></div>
                    </div>
                    <div style="margin: 16px 0px 0px 16px">
                        <p class="product_name">Syltherine</p>
                        <p class="product_desc">Stylish cafe chair</p>
                        <div class="price_frame">
                            <p class="price">Rp 2.500.000</p>
                            <p class="no_price">Rp 3.500.000</p>
                        </div>
                    </div>
                </div>
                <div class="product_box">
                    <div class="product_img">
                        <div class="new_box"><p>New</p></div>
                    </div>
                    <div style="margin: 16px 0px 0px 16px">
                        <p class="product_name">Syltherine</p>
                        <p class="product_desc">Stylish cafe chair</p>
                        <div class="price_frame">
                            <p class="price">Rp 2.500.000</p>
                            <p class="no_price">Rp 3.500.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PRODUCT FRAME-->
            <div class="product_btn">Show More</div>
        </div>
        <!--END PRODUCT-->
    </div>
    <!--END  BODY-->

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');