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
<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="col-xs-12 col-sm-6">
        <div class="text">
            <ul>
            	<? foreach ($arItem['PROPERTIES']['PEOPLES']['VALUE'] as $key => $value) : ?>
					<li><?= $arItem['PROPERTIES']['PEOPLES']['VALUE'][$key] ?> - <em><?= $arItem['PROPERTIES']['PEOPLES']['DESCRIPTION'][$key] ?></em></li>
	            <? endforeach ?>
            </ul>
        </div>
    </div>
<?endforeach;?>