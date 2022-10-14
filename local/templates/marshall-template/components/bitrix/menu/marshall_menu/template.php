<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)): ?>
    <nav class="header__nav">
        <ul class="header__nav-list">
            <?php foreach ($arResult as $arItem):
                if ($arItem["SELECTED"]): ?>
                    <li>
                        <a href="<?=$arItem["LINK"]?>" class="header__nav-link selected">
                            <?=$arItem["TEXT"]?>
                        </a>
                    </li>
                <?php else: ?>
                    <li>
                        <a class="header__nav-link" href="<?=$arItem["LINK"]?>">
                            <?=$arItem["TEXT"]?></a>
                    </li>
                <?php endif;
            endforeach ?>
        </ul>
    </nav>
<?php endif;