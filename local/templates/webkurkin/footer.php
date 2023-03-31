<footer>
    <div class="footer">
        <div class="side">
            <div class="foot_logo">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH."/include/logo.php"
                    )
                );?>
            </div>
            <div class="copy">
                <p>© “МИНИСВАИ” 2023 Все права защищены.</p>
            </div>
        </div>
        <div class="side">
            <div class="foot_soc">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH."/include/svg_mail.php"
                    )
                );?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH."/include/svg_vk.php"
                    )
                );?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH."/include/svg_youtube.php"
                    )
                );?>
            </div>
            <div class="author">
                <p>Сайт разработан Web-студией:</p>
                <a href="">WEBKURKIN</a>
            </div>
        </div>
    </div>
</footer>
<!--<script src="local/templates/webkurkin/assets/js/splide.min.js"></script>-->
<script>
    var splide = new Splide('.main_slider', {
        arrows: true,
        pagination: false,
    });

    splide.mount();
</script>
</body>

</html>