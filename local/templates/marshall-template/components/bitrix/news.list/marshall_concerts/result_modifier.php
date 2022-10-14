<?php


if (!empty($arParams["DETAIL_ELEMENT_ID"])){
    $detailId = $arParams["DETAIL_ELEMENT_ID"];

    $concerts = array_filter($arResult["ITEMS"],
        function ($concert) use ($detailId){
            return in_array($detailId,
                $concert["PROPERTIES"]["CONCERT_ARTIST"]["VALUE"]);
        });

    $arResult["CONCERTS"] = $concerts;
}