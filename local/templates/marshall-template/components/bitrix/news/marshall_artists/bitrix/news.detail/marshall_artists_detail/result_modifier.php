<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if (!empty($arResult["PROPERTIES"]["SOCIAL_LINK"])){
    $iSocialLinksIBlockId = 2;
    $socialLinks = $arResult["PROPERTIES"]["SOCIAL_LINK"]["VALUE"];
    $obHistory = CIBlockElement::GetList(array("SORT" => "ASC"),
        array(
            "IBLOCK_ID" => $iSocialLinksIBlockId,
            "ACTIVE" => "Y",
            "ID" => $arItemValue["PROPERTIES"]["CITY_HISTORY"]["VALUE"],
        ),
        false,
        false,
        false);
    $arResult["PROPERTIES"]["SOCIAL_LINK"] = array();
    while ($obElem = $obHistory->GetNextElement()){
        $arElemFields = $obElem->GetFields();
        $arElemProperties = $obElem->GetProperties();
        $arElem["TEXT"] = $arElemFields["PREVIEW_TEXT"];
        $arElem["ICON_PATH"] = CFile::GetPath($arElemProperties["SOCIAL_ICON"]["VALUE"]);
        $arResult["PROPERTIES"]["SOCIAL_LINK"][] = $arElem;
    }
}
