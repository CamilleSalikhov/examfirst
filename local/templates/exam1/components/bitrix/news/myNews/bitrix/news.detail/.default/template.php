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




 

<?
 

$APPLICATION->SetTitle("Отзыв - " .$arResult["NAME"] . " - " . $arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]);
//$APPLICATION->SetPageProperty('title', 'Отзыв' . " - " . $arResult["NAME"]);
//
// 
 
 
 
?>
<div class="news-detail">
	 <hr>
           				<div class="review-block">
							<div class="review-text">
								<div class="review-text-cont">
									<?=$arResult["DETAIL_TEXT"]?>
								</div>
								<div class="review-autor">
									<?=$arResult["NAME"]?>, <?=$arResult["DISPLAY_ACTIVE_FROM"]?>, <?=$arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"];?>, <?=$arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"];?>. 
								</div>
							</div>
							<div style="clear: both;" class="review-img-wrap"><img src="<?= isset($arResult["DETAIL_PICTURE"]["SRC"]) ? $arResult["DETAIL_PICTURE"]["SRC"] : "/local/templates/exam1/components/bitrix/news/myNews/bitrix/news.list/.default/no_photo.jpg"      ?>" alt="img"></div>
						</div>
						<div class="exam-review-doc">
						 
						
						
						<?if(is_null($arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_DOCS"]) ):?>
						
						
						<?else:?>
							 
						<p><?=GetMessage("DOCUMENTS")?></p>
							<?if(is_null($arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_DOCS"]["FILE_VALUE"][0]) ):?>
							<div  class="exam-review-item-doc"><img class="rew-doc-ico" src="./img/icons/pdf_ico_40.png"><a href="<?=$arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_DOCS"]["FILE_VALUE"]["SRC"]?>"><?=$arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_DOCS"]["FILE_VALUE"]["ORIGINAL_NAME"]?></a></div>
							
							<?else:?>
							
						
						
						
						<?foreach($arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_DOCS"]["FILE_VALUE"] as $arItem):?>
						<div  class="exam-review-item-doc"><img class="rew-doc-ico" src="./img/icons/pdf_ico_40.png"><a href="<?=$arItem["SRC"]?>"><?=$arItem["ORIGINAL_NAME"]?></a></div>
						
						<?endforeach;?>
						<?endif;?>
						
						<?endif;?>
						 
						</div>
						<hr>
</div>

