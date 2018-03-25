<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); //
$APPLICATION->SetTitle("АО НПО «ОРИОН»");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?$APPLICATION->ShowHead()?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?$APPLICATION->ShowTitle()?></title>

    <link href="/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
</head>
<body>
<?$APPLICATION->ShowPanel();?>

<div class="page">
    <header class="section section_bg_black header" id="top">
        <div class="container">
            <div class="header__top">
                <a href="/" class="header__logo">
                    <img src="i/logo.png" alt="Акционерное общество «НПО «Орион»" class="header__logo-img">
                </a>
                <nav class="header__nav">
                    <button class="nav__toggle icon-menu js-nav-toggle"></button>
                    <div class="nav js-nav">
                        <ul class="nav__list">
                            <li class="nav__item">
                                <a href="#top" class="nav__link">О конференции</a>
                            </li>
                            <li class="nav__item">
                                <a href="#program" class="nav__link">Программа</a>
                            </li>
                            <li class="nav__item">
                                <a href="#organizers" class="nav__link">Организаторы</a>
                            </li>
                            <li class="nav__item">
                                <a href="#registration" class="nav__link">Регистрация</a>
                            </li>
                            <li class="nav__item">
                                <a href="#contacts" class="nav__link">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <h1 class="header__title">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/head_text.php"
                    )
                );?>
            </h1>

            <?$APPLICATION->IncludeComponent(
                "bitrix:news",
                "orion_landing",
                array(
                    "COMPONENT_TEMPLATE" => "orion_landing",
                    "IBLOCK_TYPE" => "slider_orion_landing",
                    "IBLOCK_ID" => "41",
                    "NEWS_COUNT" => "20",
                    "USE_SEARCH" => "N",
                    "USE_RSS" => "N",
                    "USE_RATING" => "N",
                    "USE_CATEGORIES" => "N",
                    "USE_FILTER" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "CHECK_DATES" => "Y",
                    "SEF_MODE" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_TITLE" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "ADD_ELEMENT_CHAIN" => "N",
                    "USE_PERMISSIONS" => "N",
                    "STRICT_SECTION_CHECK" => "N",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "N",
                    "USE_SHARE" => "N",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "LIST_FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "LIST_PROPERTY_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "DISPLAY_NAME" => "Y",
                    "META_KEYWORDS" => "-",
                    "META_DESCRIPTION" => "-",
                    "BROWSER_TITLE" => "-",
                    "DETAIL_SET_CANONICAL_URL" => "N",
                    "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "DETAIL_FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "DETAIL_PROPERTY_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "DETAIL_DISPLAY_TOP_PAGER" => "N",
                    "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
                    "DETAIL_PAGER_TITLE" => "Страница",
                    "DETAIL_PAGER_TEMPLATE" => "",
                    "DETAIL_PAGER_SHOW_ALL" => "Y",
                    "PAGER_TEMPLATE" => ".default",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "SET_STATUS_404" => "N",
                    "SHOW_404" => "N",
                    "MESSAGE_404" => "",
                    "VARIABLE_ALIASES" => array(
                        "SECTION_ID" => "SECTION_ID",
                        "ELEMENT_ID" => "ELEMENT_ID",
                    )
                ),
                false
            );?>

        </div><!-- /.container -->
    </header><!-- /.header -->

    <main class="content">
        <section class="section program" id="program">
            <div class="container">
                <h2>Программа конференции</h2>
                <div class="row">
                    <?$APPLICATION->IncludeComponent("bitrix:news.list", "programa", Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                            "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                            "AJAX_MODE" => "N", // Включить режим AJAX
                            "AJAX_OPTION_ADDITIONAL" => "", // Дополнительный идентификатор
                            "AJAX_OPTION_HISTORY" => "N",   // Включить эмуляцию навигации браузера
                            "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
                            "AJAX_OPTION_STYLE" => "Y", // Включить подгрузку стилей
                            "CACHE_FILTER" => "N",  // Кешировать при установленном фильтре
                            "CACHE_GROUPS" => "Y",  // Учитывать права доступа
                            "CACHE_TIME" => "36000000", // Время кеширования (сек.)
                            "CACHE_TYPE" => "A",    // Тип кеширования
                            "CHECK_DATES" => "Y",   // Показывать только активные на данный момент элементы
                            "DETAIL_URL" => "", // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                            "DISPLAY_BOTTOM_PAGER" => "Y",  // Выводить под списком
                            "DISPLAY_DATE" => "Y",  // Выводить дату элемента
                            "DISPLAY_NAME" => "Y",  // Выводить название элемента
                            "DISPLAY_PICTURE" => "Y",   // Выводить изображение для анонса
                            "DISPLAY_PREVIEW_TEXT" => "Y",  // Выводить текст анонса
                            "DISPLAY_TOP_PAGER" => "N", // Выводить над списком
                            "FIELD_CODE" => array(  // Поля
                                0 => "",
                                1 => "",
                            ),
                            "FILTER_NAME" => "",    // Фильтр
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",  // Скрывать ссылку, если нет детального описания
                            "IBLOCK_ID" => "42", // Код информационного блока
                            "IBLOCK_TYPE" => "content", // Тип информационного блока (используется только для проверки)
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N", // Включать инфоблок в цепочку навигации
                            "INCLUDE_SUBSECTIONS" => "Y",   // Показывать элементы подразделов раздела
                            "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                            "NEWS_COUNT" => "120",   // Количество новостей на странице
                            "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                            "PAGER_DESC_NUMBERING" => "N",  // Использовать обратную навигацию
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",   // Время кеширования страниц для обратной навигации
                            "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                            "PAGER_SHOW_ALWAYS" => "N", // Выводить всегда
                            "PAGER_TEMPLATE" => ".default", // Шаблон постраничной навигации
                            "PAGER_TITLE" => "Новости", // Название категорий
                            "PARENT_SECTION" => "", // ID раздела
                            "PARENT_SECTION_CODE" => "",    // Код раздела
                            "PREVIEW_TRUNCATE_LEN" => "",   // Максимальная длина анонса для вывода (только для типа текст)
                            "PROPERTY_CODE" => array(
                                0 => "PUNKTS",
                                1 => "",
                            ),
                            "SET_BROWSER_TITLE" => "N", // Устанавливать заголовок окна браузера
                            "SET_LAST_MODIFIED" => "N", // Устанавливать в заголовках ответа время модификации страницы
                            "SET_META_DESCRIPTION" => "N",  // Устанавливать описание страницы
                            "SET_META_KEYWORDS" => "N", // Устанавливать ключевые слова страницы
                            "SET_STATUS_404" => "N",    // Устанавливать статус 404
                            "SET_TITLE" => "N", // Устанавливать заголовок страницы
                            "SHOW_404" => "N",  // Показ специальной страницы
                            "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                            "SORT_BY2" => "ID",   // Поле для второй сортировки новостей
                            "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
                            "SORT_ORDER2" => "ASC", // Направление для второй сортировки новостей
                            "STRICT_SECTION_CHECK" => "N",  // Строгая проверка раздела для показа списка
                        ),
                        false
                    );?>
                </div>
            </div>
        </section>

        <section class="section section_bg_gray program-сommittee">
            <div class="container">
                <h2>Програмный коммитет</h2>
                <div class="row">
                    <?$APPLICATION->IncludeComponent("bitrix:news.list", "commitee", Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                            "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                            "AJAX_MODE" => "N", // Включить режим AJAX
                            "AJAX_OPTION_ADDITIONAL" => "", // Дополнительный идентификатор
                            "AJAX_OPTION_HISTORY" => "N",   // Включить эмуляцию навигации браузера
                            "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
                            "AJAX_OPTION_STYLE" => "Y", // Включить подгрузку стилей
                            "CACHE_FILTER" => "N",  // Кешировать при установленном фильтре
                            "CACHE_GROUPS" => "Y",  // Учитывать права доступа
                            "CACHE_TIME" => "36000000", // Время кеширования (сек.)
                            "CACHE_TYPE" => "A",    // Тип кеширования
                            "CHECK_DATES" => "Y",   // Показывать только активные на данный момент элементы
                            "DETAIL_URL" => "", // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                            "DISPLAY_BOTTOM_PAGER" => "Y",  // Выводить под списком
                            "DISPLAY_DATE" => "Y",  // Выводить дату элемента
                            "DISPLAY_NAME" => "Y",  // Выводить название элемента
                            "DISPLAY_PICTURE" => "Y",   // Выводить изображение для анонса
                            "DISPLAY_PREVIEW_TEXT" => "Y",  // Выводить текст анонса
                            "DISPLAY_TOP_PAGER" => "N", // Выводить над списком
                            "FIELD_CODE" => array(  // Поля
                                0 => "",
                                1 => "",
                            ),
                            "FILTER_NAME" => "",    // Фильтр
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",  // Скрывать ссылку, если нет детального описания
                            "IBLOCK_ID" => "43", // Код информационного блока
                            "IBLOCK_TYPE" => "content", // Тип информационного блока (используется только для проверки)
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N", // Включать инфоблок в цепочку навигации
                            "INCLUDE_SUBSECTIONS" => "Y",   // Показывать элементы подразделов раздела
                            "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                            "NEWS_COUNT" => "120",   // Количество новостей на странице
                            "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                            "PAGER_DESC_NUMBERING" => "N",  // Использовать обратную навигацию
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",   // Время кеширования страниц для обратной навигации
                            "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                            "PAGER_SHOW_ALWAYS" => "N", // Выводить всегда
                            "PAGER_TEMPLATE" => ".default", // Шаблон постраничной навигации
                            "PAGER_TITLE" => "Новости", // Название категорий
                            "PARENT_SECTION" => "", // ID раздела
                            "PARENT_SECTION_CODE" => "",    // Код раздела
                            "PREVIEW_TRUNCATE_LEN" => "",   // Максимальная длина анонса для вывода (только для типа текст)
                            "PROPERTY_CODE" => array(
                                0 => "PEOPLES",
                                1 => "",
                            ),
                            "SET_BROWSER_TITLE" => "N", // Устанавливать заголовок окна браузера
                            "SET_LAST_MODIFIED" => "N", // Устанавливать в заголовках ответа время модификации страницы
                            "SET_META_DESCRIPTION" => "N",  // Устанавливать описание страницы
                            "SET_META_KEYWORDS" => "N", // Устанавливать ключевые слова страницы
                            "SET_STATUS_404" => "N",    // Устанавливать статус 404
                            "SET_TITLE" => "N", // Устанавливать заголовок страницы
                            "SHOW_404" => "N",  // Показ специальной страницы
                            "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                            "SORT_BY2" => "ID",   // Поле для второй сортировки новостей
                            "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
                            "SORT_ORDER2" => "ASC", // Направление для второй сортировки новостей
                            "STRICT_SECTION_CHECK" => "N",  // Строгая проверка раздела для показа списка
                        ),
                        false
                    );?>
                </div>
            </div>
        </section>

        <section class="section section_bg_black exibition">
            <div class="container container_sm">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/vistavka.php"
                    )
                );?>
                <div class="contacts-preview">
                    <h6 class="contacts-preview__title">По вопросам участия обращаться в&nbsp;отдел маркетинга:</h6>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/marketing.php"
                        )
                    );?>
                </div>
            </div>
        </section>

        <section class="section section_bg_gray registration" id="registration">
            <div class="container">
                <h2>Регистрация участника конференции</h2>
                <form action="ajax.php" class="form" ENCTYPE="multipart/form-data" method="POST" id="my_form">
                    <div id="error" >

                    </div>
                    <div class="row">
                        <div class="form__col col-xs-12 col-sm-6">
                            <div class="form__group form__group_requered">
                                <input name="user_name" type="text" class="form__control" tabindex="10" placeholder="ФИО" >
                            </div>
                            <div class="form__group form__group_requered">
                                <input name="user_phone" type="text" class="form__control js-tel" tabindex="20" placeholder="Телефон" >
                            </div>
                            <div class="form__group form__group_requered">
                                <input name="email" type="text" class="form__control" tabindex="30" placeholder="E-mail" >
                            </div>
                            <div class="form__group">
                                <input name="compani" type="text" class="form__control" tabindex="40" placeholder="Организация">
                            </div>
                            <div class="form__group">
                                <input name="position" type="text" class="form__control" tabindex="50" placeholder="Должность">
                            </div>
                            <div class="form__group">
                                <textarea name="pasport" rows="3" class="form__control" tabindex="60" placeholder="Паспортные данные (для пропуска)"></textarea>
                            </div>
                        </div>
                        <div class="form__col col-xs-12 col-sm-6">
                            <div class="form__group">
                                <label class="switch">
                                    <input name="doklad" type="checkbox" class="switch__input js-switch-input" tabindex="70">
                                    <span class="switch__slider"></span>
                                    <span class="switch__text">Участие с докладом</span>
                                </label>
                            </div>
                            <div class="form__group form__group_lg js-switch-item">
                                <textarea name="description" rows="3" class="form__control" tabindex="80" placeholder="Тема доклада (автор, соавтор, докладчик) "></textarea>
                            </div>
                            <div class="form__group form__group_lg js-switch-item">
                                <label class="form__label">
                                    Тезисы, статья (в формате .doc)
                                    <div class="tooltip">
                                        <div class="tooltip__toggle">?</div>
                                        <div class="tooltip__body">Всплывающая подсказка</div>
                                    </div>
                                </label>
                                <label class="form__upload">
                                    <input name="submit" type="button" class="form__upload-button button button_primary" value="Загрузить" tabindex="90" />
                                    <input type="file" name="upload" accept="application/msword" id="fileUpload" class="form__upload-input" />
                                    <span class="form__upload-filename"></span>
                                </label>
                            </div>
                            <div class="form__group form__group_lg">
                                <label class="form__label">Организационный взнос</label>
                                <a href="">Скачать договор с физическим лицом</a> <br>
                                <a href="">Скачать договор с юредическим лицом</a> <br>
                                <a href="">Скачать образец квитанции</a>
                            </div>
                        </div>
                    </div>
                    <div class="form__group form__group_center">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control__input" tabindex="140" required>
                            <div class="custom-control__indicator"></div>
                            <a href="">Согласие</a>&nbsp;на обработку персональных данных
                        </label>
                    </div>
                    <div class="form__group form__group_submit">
                        <input name="submit" type="submit" class="form__button button button_primary" value="Отправить" tabindex="150">
                    </div>
                </form>
            </div>
        </section>



        <section class="section section_border_bottom contacts" id="contacts">
            <div class="container">
                <h2>Контактная информация</h2>
                <div class="contacts__list row">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/contacts.php"
                        )
                    );?>
                </div>
            </div>
        </section>

        <section class="section сommittee" id="organizers">
            <div class="container">
                <h2>Организационный коммитет</h2>
                <div class="сommittee__list row">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/orgs.php"
                        )
                    );?>
                </div>
            </div>
        </section>

        <div class="map" id="map"></div>
    </main><!-- /.content -->
</div>

<footer class="footer">
    <div class="container">
        <div class="row row-sm-center">
            <div class="footer__left col-xs-12 col-lg-6 col-xl-4">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/copy_vistavka.php"
                    )
                );?>
            </div>
            <div class="footer__right col-xs-12 col-lg-6 col-xl-8">
                <div class="footer__text">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/copy_orion.php"
                        )
                    );?>
                </div>
                <img src="i/logo.png" alt="Акционерное общество «НПО «Орион»" class="footer__logo">
            </div>
        </div>
    </div><!-- /.container -->
</footer><!-- /.footer -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="/js/ajax.js"></script>
<script src="/js/vendor/jquery.maskedinput.js"></script>
<script src="/js/vendor/slick.min.js"></script>
<script src="/js/main.js"></script>

<script>
    // Map
    ymaps.ready(function () {
        var myMap = new ymaps.Map('map', {
                center: [55.713679, 37.831704],
                zoom: 16
            }, {
                searchControlProvider: 'yandex#search'
            }),
            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                hintContent: '',
                balloonContent: ''
            }, {
                preset: 'islands#redIcon',
            });

        myMap.geoObjects.add(myPlacemark);
        myMap.behaviors.disable('scrollZoom');
    });
</script>
</body>
</html>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>