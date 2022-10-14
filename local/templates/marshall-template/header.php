<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Page\Asset;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/style.css");
    Asset::getInstance()->addString("<link href = 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap' rel = 'stylesheet' >");
    $APPLICATION->ShowHead();
    ?>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
</head>
<body>
    <div id="panel">
        <?php $APPLICATION->ShowPanel(); ?>
    </div>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header__row">
                    <div class="header__logo">
                        <a href="#">
                            <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/logo.php"
                            ),
                                false,
                                array(
                                    "ACTIVE_COMPONENT" => "Y"
                                )
                            ); ?>
                        </a>
                    </div>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "marshall_menu",
                        array(
                            "ROOT_MENU_TYPE" => "top",
                            "MAX_LEVEL" => "1",
                            "USE_EXT" => "Y"
                        )
                    ); ?>
                </div>
            </div>
        </header>
        <main class="main">
<?php if ($APPLICATION->GetCurPage(false) !== '/'): ?>
            <section class="breadcrumbs">
                <div class="container">
                    <div class="breadcrumbs__list">
                        <a href="/" class="breadcrumbs__item">main page</a>
                        <div class="breadcrumbs__item breadcrumbs__item-active">acton multi-room</div>
                    </div>
                </div>
            </section>
            <?php endif; ?>