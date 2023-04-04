<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<div class="splide__list">


    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="splide__slide">

            <div class="img_slide">
                <img width="880" height="580" alt="<?=$arItem['~NAME'];?>" src="<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>">
            </div>
            <div class="text_slider">
                <p><?=$arItem['~NAME'];?></p>
                <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="slider_btn">Смотреть </a>
            </div>

            <?=$arItem['~PREVIEW_TEXT'];?>
        </div>
    <?endforeach;?>
</div>
