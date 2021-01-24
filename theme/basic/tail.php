    <?php
    if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

    if (G5_IS_MOBILE) {
        include_once(G5_THEME_MOBILE_PATH.'/tail.php');
        return;
    }
    ?>
</div>
<!-- } 콘텐츠 끝 -->



<footer style="background: #000; color: #fff; height: 200px; display: flex; align-items: center; position: absolute;  width: 100%; bottom: 0;">
    <div class="container">
        <div>footer 부분</div>
    </div>
</footer>



<?php
/* defalut */
add_javascript('<script src="http://code.jquery.com/jquery-latest.min.js"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery-migrate-1.4.1.min.js"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery.menu.js?ver='.G5_JS_VER.'"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/common.js?ver='.G5_JS_VER.'"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/wrest.js?ver='.G5_JS_VER.'"></script>', 0);

/* new add */
add_javascript('<script src="'.G5_THEME_JS_URL.'/lib/bootstrap.min.js?ver='.G5_JS_VER.'"></script>', 0);
add_javascript('<script src="'.G5_THEME_JS_URL.'/common_script.js?ver='.G5_JS_VER.'"></script>', 0);
?>





<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>