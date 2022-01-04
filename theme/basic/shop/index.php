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
    <script type="text/javascript" src="/js/shop/index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <!--START BODY-->
    <div class="content">



        <div class="next_frame">
            <div class="next_box">
                <div class="nav_next">
                    <div id="round1" class="next_btn"><div class="next_btn_round"></div></div>
                    <div id="round2" class="next_btn" style="border: none"><div class="next_btn_round"></div></div>
                    <div id="round3" class="next_btn" style="border: none"><div class="next_btn_round"></div></div>
                </div>

                <div class="next_prev_btn">
                    <button class="next_menu"><img src="/assets/assets/Line.png"></button>
                    <button class="prev_menu"><img src="/assets/assets/Line.png"></button>
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
                            <img src="/assets/assets/arrow2.svg">
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




        <div class="service_frame">
            <div class="service_box">
                <div class="service_img"><img src="/assets/assets/service1.svg"></div>
                <div class="service_txt_frame">
                    <p class="service_title">High Quality</p>
                    <p class="service_desc">crafted from top materials</p>
                </div>
            </div>
            <div class="service_box">
                <div class="service_img"><img src="/assets/assets/service2.svg"></div>
                <div class="service_txt_frame">
                    <p class="service_title">Warrany Protection</p>
                    <p class="service_desc">Over 2 years</p>
                </div>
            </div>
            <div class="service_box">
                <div class="service_img"><img src="/assets/assets/service3.svg"></div>
                <div class="service_txt_frame">
                    <p class="service_title">Free Shipping</p>
                    <p class="service_desc">Order over 150 $</p>
                </div>
            </div>
            <div class="service_box">
                <div class="service_img"><img src="/assets/assets/service4.svg"></div>
                <div class="service_txt_frame">
                    <p class="service_title">24 / 7 Support</p>
                    <p class="service_desc">Dedicated support</p>
                </div>
            </div>
        </div>
        <!--START PRODUCT-->
        <div class="product">
            <p class="our_pr">OUR PRODUCT</p>
            <!-- PRODUCT FRAME-->
            <div class="product_frame">
                <div class="product_box">
                    <div class="product_hover">
                        <button  type="text"  class="hover_btn">Add to Cart</button>
                        <div class="share_like_box">
                            <a href="">
                                <div class="share_like_frame">
                                    <img src="/assets/assets/share.svg">
                                    <p class="hover_txt">Share</p>
                                </div>
                            </a>
                            <a href="">
                                <div class="share_like_frame">
                                    <img src="/assets/assets/Heart.svg">
                                    <p class="hover_txt">Like</p>
                                </div>
                            </a>
                        </div>
                    </div>
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
                    <div class="product_hover">
                        <button  type="text"  class="hover_btn">Add to Cart</button>
                        <div class="share_like_box">
                            <a href="">
                                <div class="share_like_frame">
                                    <img src="/assets/assets/share.svg">
                                    <p class="hover_txt">Share</p>
                                </div>
                            </a>
                            <a href="">
                                <div class="share_like_frame">
                                    <img src="/assets/assets/Heart.svg">
                                    <p class="hover_txt">Like</p>
                                </div>
                            </a>
                        </div>
                    </div>
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
                    <div class="product_hover">
                        <button  type="text"  class="hover_btn">Add to Cart</button>
                        <div class="share_like_box">
                            <a href="">
                                <div class="share_like_frame">
                                    <img src="/assets/assets/share.svg">
                                    <p class="hover_txt">Share</p>
                                </div>
                            </a>
                            <a href="">
                                <div class="share_like_frame">
                                    <img src="/assets/assets/Heart.svg">
                                    <p class="hover_txt">Like</p>
                                </div>
                            </a>
                        </div>
                    </div>
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
                    <div class="product_hover">
                        <button  type="text"  class="hover_btn">Add to Cart</button>
                        <div class="share_like_box">
                            <a href="">
                                <div class="share_like_frame">
                                    <img src="/assets/assets/share.svg">
                                    <p class="hover_txt">Share</p>
                                </div>
                            </a>
                            <a href="">
                                <div class="share_like_frame">
                                    <img src="/assets/assets/Heart.svg">
                                    <p class="hover_txt">Like</p>
                                </div>
                            </a>
                        </div>
                    </div>
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
                    <div class="product_hover">
                        <button  type="text"  class="hover_btn">Add to Cart</button>
                        <div class="share_like_box">
                            <a href="">
                                <div class="share_like_frame">
                                    <img src="/assets/assets/share.svg">
                                    <p class="hover_txt">Share</p>
                                </div>
                            </a>
                            <a href="">
                                <div class="share_like_frame">
                                    <img src="/assets/assets/Heart.svg">
                                    <p class="hover_txt">Like</p>
                                </div>
                            </a>
                        </div>
                    </div>
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
                    <div class="product_hover">
                        <button  type="text"  class="hover_btn">Add to Cart</button>
                        <div class="share_like_box">
                            <a href="">
                                <div class="share_like_frame">
                                    <img src="/assets/assets/share.svg">
                                    <p class="hover_txt">Share</p>
                                </div>
                            </a>
                            <a href="">
                                <div class="share_like_frame">
                                    <img src="/assets/assets/Heart.svg">
                                    <p class="hover_txt">Like</p>
                                </div>
                            </a>
                        </div>
                    </div>
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
                    <div class="product_hover">
                        <button  type="text"  class="hover_btn">Add to Cart</button>
                        <div class="share_like_box">
                            <a href="">
                                <div class="share_like_frame">
                                    <img src="/assets/assets/share.svg">
                                    <p class="hover_txt">Share</p>
                                </div>
                            </a>
                            <a href="">
                                <div class="share_like_frame">
                                    <img src="/assets/assets/Heart.svg">
                                    <p class="hover_txt">Like</p>
                                </div>
                            </a>
                        </div>
                    </div>
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
                    <div class="product_hover">
                        <button  type="text"  class="hover_btn">Add to Cart</button>
                        <div class="share_like_box">
                            <a href="">
                                <div class="share_like_frame">
                                    <img src="/assets/assets/share.svg">
                                    <p class="hover_txt">Share</p>
                                </div>
                            </a>
                            <a href="">
                                <div class="share_like_frame">
                                    <img src="/assets/assets/Heart.svg">
                                    <p class="hover_txt">Like</p>
                                </div>
                            </a>
                        </div>
                    </div>
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
            <button class="product_btn"><div class="">Go Shop</div></button>
        </div>
        <!--END PRODUCT-->


        <!-- CENTER FRAME -->
        <div class="center_frame">
            <div class="center_left">
                <div class="center_left_txt_frame">
                    <div class="center_left_title">50+ Beautiful rooms inspiration</div>
                    <div class="center_left_subtitle">Our designer already made a lot of beautiful prototipe of rooms that inspire you</div>
                    <button class="center_btn">Explore More</button>
                </div>
            </div>
            <div class="center_right">
                <div class="big_img">
                    <div class="big_img_txt_frame">
                        <div class="txt_frame">
                            <div class="txt_frame_title">
                                <p>01</p>
                                <p class="vector"></p>
                                <p>Bed Room</p>
                            </div>
                            <div class="txt_frame_inner">Inner Peace</div>
                        </div>
                        <div class="arrow_box">
                            <button class="arrow_frame"><img src="/assets/assets/Vector1.svg"></button>
                        </div>
                    </div>
                </div>
                <div class="small_img_box">
                    <div class="small_img">
                        <button class="small_img_next_box"><img src="/assets/assets/Line.png"></button>
                    </div>
                    <div class="next_img">
                        <div class="next_img_frame"><div class="next_img_btn"></div></div>
                        <div class="next_img_btn"></div>
                        <div class="next_img_btn"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CENTER FRAME -->

        <!-- TIPS & TRICKS-->
        <div class="tips_frame">
            <div class="tips_title">Tips & Tricks</div>
            <div class="tips_item_box">
                <div class="tips_box_frame">
                    <div class="tips_img" style="background: url(/assets/assets/Rectangle32.png)">
                        <button class="small_img_next_box"><img src="/assets/assets/Line1.svg"></button>
                    </div>
                    <div class="tips_txt_box">
                        <p class="tips_txt_title">How to create a living room to love</p>
                        <p class="tips_desc">20 jan 2020</p>
                    </div>
                </div>
                <div class="tips_box_frame">
                    <div class="tips_img" style="background: url(/assets/assets/Rectangle32-1.png)"></div>
                    <div class="tips_txt_box">
                        <p class="tips_txt_title">Solution for clean look working space</p>
                        <p class="tips_desc">10 jan 2020</p>
                    </div>
                </div>
                <div class="tips_box_frame">
                    <div class="tips_img_two" style="background: url(/assets/assets/Rectangle32-2.png)">
                        <button class="small_img_next_box"><img src="/assets/assets/Line.png"></button>
                    </div>
                    <div class="tips_txt_box">
                        <p class="tips_txt_title">Make your cooking activity more fun with good setup</p>
                        <p class="tips_desc">20 jan 2020</p>
                    </div>
                </div>
            </div>
            <div class="tips_bott">
                <div class="next_img">
                    <div class="next_img_frame"><div class="next_img_btn"></div></div>
                    <div class="next_img_btn"></div>
                    <div class="next_img_btn"></div>
                </div>
            </div>
        </div>
        <!-- END TIPS & TRICKS-->


        <!-- SHARE -->
        <div class="share">
            <div class="share_title">
                <p class="share_main_title">Share your setup with</p>
                <p class="share_hashteg_title">#FuniroFurniture</p>
            </div>
            <div class="share_img">
                <img src="/assets/assets/Images.png">
            </div>
        </div>
        <!-- END SHARE -->

        <!--VECTOR-->
        <div class="vector_bott"></div>
        <!--ENDVECTOR-->

    </div>
    <!--END  BODY-->

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail_r.php');