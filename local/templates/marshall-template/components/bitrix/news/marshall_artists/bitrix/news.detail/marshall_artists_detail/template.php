<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php
if (!empty($arResult)):
    if (isset($arResult["DETAIL_PICTURE"]["SRC"])): ?>
        <section class="banner">
            <div class="container">
                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
            </div>
        </section>
    <?php endif; ?>
    <section class="artist-body">
        <div class="container">
            <h1><?=$arResult["NAME"]?></h1>
            <div class="artist-body__row">
                <div class="artist-body__text">
                    <?php if (!empty($arResult["DETAIL_TEXT"])):
                        $arResult["DETAIL_TEXT"];
                    endif; ?>
                </div>
                <?php if (!empty($arResult["PROPERTIES"]["SOCIAL_LINK"])):
                    $socialLinks = $arResult["PROPERTIES"]["SOCIAL_LINK"]; ?>
                    <div class="artist-body__social">
                        <ul>
                            <?php foreach ($socialLinks as $socialLink): ?>
                                <li>
                                    <a href="<?=$socialLink["TEXT"]?>">
                                        <img src="<?=$socialLink["ICON_PATH"]?>" alt="Facebook logo">
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>