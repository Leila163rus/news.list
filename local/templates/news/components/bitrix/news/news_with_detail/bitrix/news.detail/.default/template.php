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

<div class="article-card">
  <div class="article-card__title"><?=$arResult["DETAIL_PICTURE"]["DESCRIPTION"]?></div>
	<div class="article-card__date">15 авг 2019</div>
    <div class="article-card__content">
      <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
        <div class="article-card__image sticky">
          <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>" data-object-fit="cover"/> 
        </div>
      <?endif?>    
      <div class="article-card__text">
        <div class="block-content" data-anim="anim-3">
          <?if($arResult["DETAIL_TEXT"] <> ''):?>
            <?$data=explode(PHP_EOL, $arResult["DETAIL_TEXT"]);?>
            <p><?echo $data[0];?></p>
            <p><?echo $data[1];?></p>
          <?endif?>
        </div>
      <a class="article-card__button" href="<?echo $arResult["SECTION_URL"];?>">Назад к новостям</a>
    </div>
  </div>
</div>