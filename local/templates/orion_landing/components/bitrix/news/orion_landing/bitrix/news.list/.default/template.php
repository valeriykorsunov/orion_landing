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
//$this->setFrameMode(true);
?>

<?
//echo '<pre>';
//var_dump($arResult["ITEMS"]);
//echo '</pre>';
?>

<div class="partners">
    <h6>Наши партнеры</h6>
    <div class="partners__list  js-partners-slider">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
//	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
//	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

    <div class="partners__item">
        <div style="height:103px; background: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);"></div>
    </div>
<?endforeach;?>
    </div>
</div>