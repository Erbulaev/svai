<?$APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "raboty", // шаблон
    Array(
        "IBLOCK_ID" => "1",  // ID информационного блока
        "IBLOCK_TYPE" => "content",  // тип информационного блока
        "ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],  // параметр передаваемой страницы
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "SET_BROWSER_TITLE" => "Y",
        "SET_META_DESCRIPTION" => "Y",
        "SET_TITLE" => "Y",
        "ADD_ELEMENT_CHAIN" => "Y",
        "PROPERTY_CODE" => array(
            0 => "NAME",  // включить свойство из инфоблока
        ),
    ),
    false
);?>
<div class="wrapper">

    <div class="back">
        <a href="index.html">
            <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 1.15385L7.52633 0L0 7.49949L7.52633 15L9 13.4615L2.625 7.49949L9 1.15385Z" fill="#9E9E9E"/>
            </svg>
            <p>На главную</p>
        </a>
    </div>
    <div class="about_works">
        <p>Автосалон Аларм-Авто по ул.М.Жукова 111/1</p>
        <p>Интересный и не простой объект архитектора Амелина С.В, был построен и введен в эксплуатацию в период 2009-2010гг.Проектом не было предусмотрено ни одного прямого угла, а фасад представляет собой дугу с радиусом 2,3 км.</p>
    </div>

    <div class="img_works">
        <img src="/img/service1.png" alt="" width="400" height="280">
        <img src="/img/service1.png" alt="" width="400" height="280">
        <img src="/img/service1.png" alt="" width="400" height="280">
        <img src="/img/service1.png" alt="" width="400" height="280">
        <img src="/img/service1.png" alt="" width="400" height="280">
        <img src="/img/service1.png" alt="" width="400" height="280">
    </div>
</div>
