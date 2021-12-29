<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/shop.tail.php');
    return;
}

$admin = get_admin("super");

// 사용자 화면 우측과 하단을 담당하는 페이지입니다.
// 우측, 하단 화면을 꾸미려면 이 파일을 수정합니다.
?>
    </div>  <!-- } .shop-content 끝 -->
    </div>      <!-- } #container 끝 -->
    </div>
    <!-- } 전체 콘텐츠 끝 -->

    <!-- START FOOTER { -->

    <div class="footer_frame">
        <div class="footer_box">
            <div class="footer_container">
                <div class="footer_one">
                    <a href=""><p class="footer_title"><img src="/css/shop/assets/GoodFurniture.png"></p></a>
                    <p class="footer_about">Worldwide furniture store since 2020. We sell over 1000+ branded products on our website</p>
                    <p class="footer_address"><img src="/css/shop/assets/Subtract.svg" style="margin-right: 10px"> Sawojajar Malang, Indonesia</p>
                    <p class="footer_telephone"><img src="/css/shop/assets/phone.svg" style="margin-right: 10px"> +6289 456 3455</p>
                    <a href=""><p class="footer_website">www.funiro.com</p></a>
                </div>
                <div class="footer_two" >
                    <a href=""><p class="footer_title">Menu</p></a>
                    <a href=""><p class="footer_txt_style">Products</p></a>
                    <a href=""><p class="footer_txt_style">Rooms</p></a>
                    <a href=""><p class="footer_txt_style">Inspirations</p></a>
                    <a href=""><p class="footer_txt_style">About Us</p></a>
                    <a href=""><p class="footer_txt_style">Terms & Policy</p></a>
                </div>
                <div class="footer_three" >
                    <a href=""><p class="footer_title">Account</p></a>
                    <a href=""><p class="footer_txt_style">My Account</p></a>
                    <a href=""><p class="footer_txt_style">Checkout</p></a>
                    <a href=""><p class="footer_txt_style">My Cart</p></a>
                    <a href=""><p class="footer_txt_style">My catalog</p></a>
                </div>
                <div class="footer_four" >
                    <a href=""><p class="footer_title">Stay Connected</p></a>
                    <a href=""><p class="footer_txt_style">Facebook</p></a>
                    <a href=""><p class="footer_txt_style">Instagram</p></a>
                    <a href=""><p class="footer_txt_style">Twitter</p></a>
                </div>
                <div class="footer_five" >
                    <p class="footer_title">Stay Updated</p>
                    <div class="footer_input">
                        <input type="text" placeholder="Submit Your Email">
                        <button type="submit" class="footer_btn"><img src="/css/shop/assets/submit.svg"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php
$sec = get_microtime() - $begin_time;
$file = $_SERVER['SCRIPT_NAME'];

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

    <script src="<?php echo G5_JS_URL; ?>/sns.js"></script>
    <!-- } END FOOTER -->

<?php
include_once(G5_THEME_PATH.'/tail.sub.php');