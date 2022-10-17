<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<section class="concerts">
    <div class="container">
        <h2>upcoming concerts</h2>
        <?php if (!empty($arResult["ITEMS"])): ?>
            <div class="concerts__wrap">
                <div class="concerts__list">
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
                        <a href="<?=$arParams["DETAIL_URL"]?>" class="concerts__item" id="<?=$this->GetEditAreaId($arItem["ID"])?>">
                                    <div class="concerts__img-wrap">
                                        <div class="concerts__img" style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>');"></div>
                                    </div>
                                    <div class="concerts__body">
                                        <div class="concerts__date">
                                            <div class="concerts__date-num"><?=$arItem["PROPERTIES"]["CONCERT_STARTDAY"]["VALUE"]?></div>
                                            <div class="concerts__date-month"><?=strtolower(DateTime::createFromFormat('!m',
                                                    $arItem["PROPERTIES"]["CONCERT_STARTMONTH"]["VALUE"])->format("M"))?></div>
                                        </div>
                                        <div class="concerts__title">
                                            <div class="concerts__name"><?=$arItem["NAME"]?></div>
                                            <div class="concerts__location"><?=$arItem["PREVIEW_TEXT"]?></div>
                                        </div>
                                    </div>
                                </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php else: ?>
            <h3> No upcoming concerts</h3>
        <?php endif; ?>
    </div>
</section>