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
                        echo $arResult["DETAIL_TEXT"];
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
<?php endif;

$APPLICATION->IncludeComponent("bitrix:news.list",
    "marshall_concerts",
    array(
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_MODE" => "Y",
        "IBLOCK_TYPE" => "news",
        "IBLOCK_ID" => "3",
        "NEWS_COUNT" => "20",
        "SORT_BY1" => "CONCERT_STARTMONTH",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "CONCERT_STARTDAY",
        "SORT_ORDER2" => "DESC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array("ID"),
        "PROPERTY_CODE" => array("DESCRIPTION"),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => $arResult["DETAIL_PAGE_URL"],
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_META_DESCRIPTION" => "Y",
        "SET_LAST_MODIFIED" => "Y",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_TOP_PAGER" => "Y",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "Y",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "Y",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "Y",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SET_STATUS_404" => "Y",
        "SHOW_404" => "Y",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "DETAIL_ELEMENT_ID" => $arResult["ID"],
    ),
    $component);