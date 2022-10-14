<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
$APPLICATION->SetPageProperty("TITLE", "MAKING MUSIC WITH MARSHALL");
?>
    <main class="main">
        <section class="welcome">
            <div class="container">
                <h1><?=$APPLICATION->GetPageProperty("TITLE")?></h1>
                <div class="welcome__row">
                    <div class="welcome__text">
                        <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/index_description.php"
                            )
                        ); ?>

                        <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/includes/index_explore-button.php"
                        ),
                            false,
                            array(
                                "ACTIVE_COMPONENT" => "Y"
                            )
                        ); ?>
                    </div>
                    <div class="welcome__img">
                        <? $APPLICATION->IncludeComponent("bitrix:main.include", "", array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/index_image.php"
                            )
                        ); ?>
                    </div>
                </div>
                <a href="#" class="arrow-down"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/arrow-down.svg" alt="Down">
                </a>
            </div>
        </section>

        <section class="mailing">
            <div class="container">
                <div class="mailing__wrap">
                    <div class="mailing__title">
                        SIGN UP FOR OUR NEWSLETTER </div>
                    <div class="mailing__desc">
                        Get 10 % off on your first order </div>
                    <form class="mailing__form">
                        <input type="text" placeholder="your email" class="mailing__input">
                        <input type="submit" value="subscribe" class="mailing__submit">
                        <div class="mailing__agree">
                            BY SUBSCRIBING YOU ACCEPT OUR <a href="#">PRIVACY POLICY</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>