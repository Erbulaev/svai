<footer>
    <div class="footer">
        <div class="side">
            <div class="foot_logo">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_TEMPLATE_PATH."/include/foot_logo.php"
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
                <a href="http://webkurkin.ru/">WEBKURKIN</a>
            </div>
        </div>
    </div>
</footer>


</body>

</html>