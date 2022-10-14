<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)):
    $cnt = 0; ?>
    <div class="footer__col">
        <div class="footer__menu">
            <ul class="footer__menu-list">
                <?php foreach ($arResult as $arItem):
                    $cnt++; ?>
                    <?php if ($arItem["SELECTED"]): ?>
                        <li>
                            <a href="<?=$arItem["LINK"]?>" class="footer__menu-link selected">
                                <?=$arItem["TEXT"]?>
                            </a>
                        </li>
                    <?php else: ?>
                        <li>
                            <a class="footer__menu-link" href="<?=$arItem["LINK"]?>">
                                <?=$arItem["TEXT"]?>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?if (next($arResult)): // возможно есть более элегантное решение ?>
                        <? if ($cnt % 4 === 0): ?>
                            </ul></div></div><div class="footer__col"><div class="footer__menu"><ul class="footer__menu-list">
                        <?php
                        endif;
                    else: ?>
                        </ul></div></div>
                    <?php endif;
            endforeach;
endif; ?>