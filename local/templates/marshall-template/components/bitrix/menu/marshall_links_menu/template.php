<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php
if (!empty($arResult)):
    $cnt = 0; ?>
    <div class="footer__col">
    <div class="footer__social">
    <ul class="footer__social-list">
    <?php
    foreach ($arResult as $arItem):
        $cnt++;
        if ($arItem["SELECTED"]): ?>
            <li>
                <a href="<?=$arItem["LINK"]?>" class="footer__social-link selected">
                    <?=$arItem["TEXT"]?>
                </a>
            </li>
        <?php else: ?>
            <li>
                <a class="footer__social-link" href="<?=$arItem["LINK"]?>">
                    <?=$arItem["TEXT"]?>
                </a>
            </li>
        <?php endif;
        if (next($arResult)):
            if ($cnt % 4 === 0): ?>
                </ul></div></div><div class="footer__col"><div class="footer__social"><ul class="footer__social-list">
            <?php
            endif;
        else: ?>
            </ul></div></div>
        <?php endif;
    endforeach;
endif; ?>
