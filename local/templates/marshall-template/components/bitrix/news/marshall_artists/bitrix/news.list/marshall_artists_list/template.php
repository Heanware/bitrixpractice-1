<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="artists">
    <div class="container">
        <div class="news-list">
            <?php if ($arParams["DISPLAY_TOP_PAGER"]): ?>
                <?=$arResult["NAV_STRING"]?><br/>
            <?php endif; ?>
            <?php
            if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
            <h2>artists</h2>
            <?php if (!empty($arResult["ITEMS"])): ?>
                <div class="artists__list">
                    <?php foreach ($arResult["ITEMS"] as $arItem):
                        $this->AddEditAction($arItem["ID"],
                            $arItem["EDIT_LINK"],
                            CIBlock::GetArrayByID($arItem["IBLOCK_ID"],
                                "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem["ID"],
                            $arItem["DELETE_LINK"],
                            CIBlock::GetArrayByID($arItem["IBLOCK_ID"],
                                "ELEMENT_DELETE"),
                            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="artists__item" id="<?=$this->GetEditAreaId($arItem["ID"])?>">
                            <?php if (isset($arItem["PREVIEW_PICTURE"])): ?>
                                <div class="artists__photo">
                                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
                                </div>
                            <?php endif; ?>
                            <div class="artists__body">
                                <div class="artists__body-wrap">
                                    <?php
                                    if (!empty($arItem["NAME"])): ?>
                                        <div class="artists__name"><?=$arItem["NAME"]?></div>
                                    <?php endif;
                                    if (!empty($arItem["PREVIEW_TEXT"])): ?>
                                        <div class="artists__desc"><?=$arItem["PREVIEW_TEXT"]?></div>
                                    <?php endif;
                                    if (!empty($arItem["PROPERTIES"]["INNER_BUTTON_LINK"]["VALUE"]) && !empty($arItem["DETAIL_PAGE_URL"])): ?>
                                        <div class="artists__more">
                                            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="empty-btn"><?=$arItem["PROPERTIES"]["INNER_BUTTON_LINK"]["VALUE"]?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
                <br/><?=$arResult["NAV_STRING"]?>

            <?php endif; ?>
        </div>
    </div>
</section>

