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
	<div class="program__col col-xs-12 col-sm-6">
	    <div class="program__item text">
	        <h3 class="program__item-title"><?=$arItem["NAME"]?></h3>
	        <ul>
	        	<? foreach ($arItem['PROPERTIES']['PUNKTS']['VALUE'] as $key => $value) : ?>
					<li><?= $arItem['PROPERTIES']['PUNKTS']['VALUE'][$key] ?></li>
	            <? endforeach ?>
	        </ul>
	    </div>
	</div>
<?endforeach;?>