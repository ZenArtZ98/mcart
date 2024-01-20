<?php
if(! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<?php
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">

<head>
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <?php $APPLICATION->ShowHead(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    // для js-файлов
    use Bitrix\Main\Page\Asset;
    use Bitrix\Main\Page\AssetLocation;

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/scripts.js");
    // для css-файлов
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/reset.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/owl.carousel.css");
    ?>
<!--    <link rel="stylesheet" href="./css/reset.css" />-->
<!--    <link rel="stylesheet" href="./css/style.css" />-->
<!--    <link rel="stylesheet" href="./css/owl.carousel.css" />-->
<!--    <script src="./js/jquery.min.js"></script>-->
<!--    <script src="./js/owl.carousel.min.js"></script>-->
<!--    <script src="./js/scripts.js"></script>-->
    <link rel="icon" type="image/vnd.microsoft.icon"  href="./img/favicon.ico">
    <link rel="shortcut icon" href="./img/favicon.ico">
</head>

<body>
<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>
<!-- wrap -->
<div class="wrap">
    <!-- header -->
    <header class="header">
        <div class="inner-wrap">
            <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
            </div>
            <div class="main-phone-block">
            <?php
                $hour = date('G');
                if ($hour >= 9 && $hour < 18) {

                    echo '<a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>';
                } else {
                    echo '<a href="mailto:store@store.ru" class="phone">store@store.ru</a>';
                }
                ?>
                <div class="shedule">время работы с 9-00 до 18-00</div>
            </div>
            <div class="actions-block">
                <?
                $APPLICATION->IncludeComponent(
                    "bitrix:search.page",
                    "",
                    Array(
                        "RESTART" => "Y",
                        "NO_WORD_LOGIC" => "Y",
                        "USE_TITLE_RANK" => "Y",
                        "DEFAULT_SORT" => "rank",
                        "FILTER_NAME" => "",
                        "arrFILTER" => array("iblock_reviews"), // Указываете код вашего инфоблока отзывов
                        "arrFILTER_iblock_reviews" => array("all"), // или ID инфоблока отзывов
                        "SHOW_WHERE" => "Y",
                        "arrWHERE" => array(),
                        "SHOW_WHEN" => "N",
                        // другие параметры компонента
                    ),
                    false
                );
                ?>
<!--                <form action="/" class="main-frm-search">-->
<!--                    <input type="text" placeholder="Поиск">-->
<!--                    <button type="submit"></button>-->
<!--                </form>-->
                    <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"template1", 
	array(
		"FORGOT_PASSWORD_URL" => "/exam_ticket_1/login/?forgot_password=yes",
		"PROFILE_URL" => "/exam_ticket_1/login/user.php",
		"REGISTER_URL" => "/exam_ticket_1/login/?register=yes",
		"SHOW_ERRORS" => "Y",
		"COMPONENT_TEMPLATE" => "template1"
	),
	false
);?>
<!--                    <ul>-->
<!--                        <li class="att popup-wrap">-->
<!--                            <a id="hd_singin_but_open" href="" class="btn-toggle">Войти на сайт</a>-->
<!--                            <form action="/" class="frm-login popup-block">-->
<!--                                <div class="frm-title">Войти на сайт</div>-->
<!--                                <a href="" class="btn-close">Закрыть</a>-->
<!--                                <div class="frm-row"><input type="text" placeholder="Логин"></div>-->
<!--                                <div class="frm-row"><input type="password" placeholder="Пароль"></div>-->
<!--                                <div class="frm-row"><a href="" class="btn-forgot">Забыли пароль</a></div>-->
<!--                                <div class="frm-row">-->
<!--                                    <div class="frm-chk">-->
<!--                                        <input type="checkbox" id="login">-->
<!--                                        <label for="login">Запомнить меня</label>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="frm-row"><input type="submit" value="Войти"></div>-->
<!--                            </form>-->
<!--                        </li>-->
<!--                        <li><a href="">Зарегистрироваться</a>-->
<!--                        </li>-->
<!--                    </ul>-->
            </div>
        </div>
    </header>
    <!-- /header -->
    <!-- nav -->
<!--    <nav class="nav">-->
<!--        <div class="inner-wrap">-->
<!--            <div class="menu-block popup-wrap">-->
<!--                <a href="" class="btn-menu btn-toggle"></a>-->
<!--                <div class="menu popup-block">-->
<!--                    <ul class="">-->
<!--                        <li class="main-page"><a href="">Главная</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="">Компания</a>-->
<!--                            <ul>-->
<!--                                <li>-->
<!--                                    <a href="">Пункт 1</a>-->
<!--                                    <ul>-->
<!--                                        <li><a href="">Пункт 1</a>-->
<!--                                        </li>-->
<!--                                        <li><a href="">Пункт 2</a>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li><a href="">Пункт 2</a>-->
<!--                                </li>-->
<!--                                <li><a href="">Пункт 3</a>-->
<!--                                </li>-->
<!--                                <li><a href="">Пункт 4</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li><a href="">Новости</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="">Каталог</a>-->
<!--                            <ul>-->
<!--                                <li>-->
<!--                                    <a href="">Пункт 1</a>-->
<!--                                    <ul>-->
<!--                                        <li><a href="">Пункт 1</a>-->
<!--                                        </li>-->
<!--                                        <li><a href="">Пункт 2</a>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li><a href="">Пункт 2</a>-->
<!--                                </li>-->
<!--                                <li><a href="">Пункт 3</a>-->
<!--                                </li>-->
<!--                                <li><a href="">Пункт 4</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li><a href="">Фотогалерея</a>-->
<!--                        </li>-->
<!--                        <li><a href="">Партнерам</a>-->
<!--                        </li>-->
<!--                        <li><a href="">Контакты</a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                    <a href="" class="btn-close"></a>-->
<!--                </div>-->
<!--                <div class="menu-overlay"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </nav>-->
    <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"horizontal_multilevel2", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "horizontal_multilevel2"
	),
	false
);?>
<?php if ($APPLICATION->GetCurPage() != '/exam_ticket_1/'): ?>
    <div class="breadcrumbs-box">
            <div class="inner-wrap">
                <a href="">Главная</a>
                <a href="">Мебель</a>
                <span>Выставки и события</span>
            </div>
        </div>
<?php endif; ?>

