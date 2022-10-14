<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Concerts");
$APPLICATION->SetPageProperty("TITLE", "Concerts");
?>
    <section class="concerts">
        <div class="container">
            <h2>upcoming concerts</h2>
            <div class="concerts__wrap">
                <div class="concerts__list">
                    <a href="#" class="concerts__item">
                        <div class="concerts__img-wrap">
                            <div class="concerts__img" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/assets/img/artist2.jpg);"></div>
                        </div>
                        <div class="concerts__body">
                            <div class="concerts__date">
                                <div class="concerts__date-num">
                                    22 </div>
                                <div class="concerts__date-month">
                                    may </div>
                            </div>
                            <div class="concerts__title">
                                <div class="concerts__name">
                                    THE BOTTOM LINE </div>
                                <div class="concerts__location">
                                    Maidstone, UK </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="concerts__item">
                        <div class="concerts__img-wrap">
                            <div class="concerts__img" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/assets/img/artist3.jpg);"></div>
                        </div>
                        <div class="concerts__body">
                            <div class="concerts__date">
                                <div class="concerts__date-num">
                                    24 </div>
                                <div class="concerts__date-month">
                                    may </div>
                            </div>
                            <div class="concerts__title">
                                <div class="concerts__name">
                                    KEYWEST </div>
                                <div class="concerts__location">
                                    Mote Park, UK </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="concerts__item">
                        <div class="concerts__img-wrap">
                            <div class="concerts__img" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/assets/img/artist4.jpg);"></div>
                        </div>
                        <div class="concerts__body">
                            <div class="concerts__date">
                                <div class="concerts__date-num">
                                    28 </div>
                                <div class="concerts__date-month">
                                    may </div>
                            </div>
                            <div class="concerts__title">
                                <div class="concerts__name">
                                    KING CREATURE </div>
                                <div class="concerts__location">
                                    Leo's Red Lion, UK </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="concerts__item">
                        <div class="concerts__img-wrap">
                            <div class="concerts__img" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/assets/img/artist1.jpg);"></div>
                        </div>
                        <div class="concerts__body">
                            <div class="concerts__date">
                                <div class="concerts__date-num">
                                    05 </div>
                                <div class="concerts__date-month">
                                    apr </div>
                            </div>
                            <div class="concerts__title">
                                <div class="concerts__name">
                                    BAD TOUCH </div>
                                <div class="concerts__location">
                                    Norwich, UK </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="concerts__item">
                        <div class="concerts__img-wrap">
                            <div class="concerts__img" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/assets/img/artist5.jpg);"></div>
                        </div>
                        <div class="concerts__body">
                            <div class="concerts__date">
                                <div class="concerts__date-num">
                                    12 </div>
                                <div class="concerts__date-month">
                                    apr </div>
                            </div>
                            <div class="concerts__title">
                                <div class="concerts__name">
                                    GRAND SLAM </div>
                                <div class="concerts__location">
                                    Southampton, UK </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="concerts__item">
                        <div class="concerts__img-wrap">
                            <div class="concerts__img" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/assets/img/artist1.jpg);"></div>
                        </div>
                        <div class="concerts__body">
                            <div class="concerts__date">
                                <div class="concerts__date-num">
                                    24 </div>
                                <div class="concerts__date-month">
                                    apr </div>
                            </div>
                            <div class="concerts__title">
                                <div class="concerts__name">
                                    BAD TOUCH </div>
                                <div class="concerts__location">
                                    Ironworks, Inverness, UK </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="concerts__item">
                        <div class="concerts__img-wrap">
                            <div class="concerts__img" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/assets/img/artist6.jpg);"></div>
                        </div>
                        <div class="concerts__body">
                            <div class="concerts__date">
                                <div class="concerts__date-num">
                                    28 </div>
                                <div class="concerts__date-month">
                                    apr </div>
                            </div>
                            <div class="concerts__title">
                                <div class="concerts__name">
                                    KING CREATURE </div>
                                <div class="concerts__location">
                                    Clwb Ifor Bach, UK </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="concerts__item">
                        <div class="concerts__img-wrap">
                            <div class="concerts__img" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/assets/img/artist7.jpg);"></div>
                        </div>
                        <div class="concerts__body">
                            <div class="concerts__date">
                                <div class="concerts__date-num">
                                    06 </div>
                                <div class="concerts__date-month">
                                    mar </div>
                            </div>
                            <div class="concerts__title">
                                <div class="concerts__name">
                                    REWS </div>
                                <div class="concerts__location">
                                    Looe, UK </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>