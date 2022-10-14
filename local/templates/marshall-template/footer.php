<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>

<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <div class="footer__row">
                <div class="footer__col">
                    <div class="footer__logo">
                        <a href="#">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH . "/includes/logo.php",
                                )
                            ); ?>
                        </a>
                    </div>
                    <div class="footer__copyright">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/copyright.php",
                            )
                        ); ?>
                    </div>
                </div>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "marshall_bottom_menu",
                    array(
                        "ROOT_MENU_TYPE" => "bottom",
                        "MAX_LEVEL" => "1",
                        "USE_EXT" => "Y"
                    )
                ); ?>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "marshall_links_menu",
                    array(
                        "ROOT_MENU_TYPE" => "links",
                        "MAX_LEVEL" => "1",
                        "USE_EXT" => "Y"
                    )
                ); ?>
            </div>
        </div>
    </div>
    </main>
</footer></div></body></html>