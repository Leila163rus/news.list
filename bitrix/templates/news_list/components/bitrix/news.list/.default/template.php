<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="barba-wrapper">
    <div class="article-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<?foreach($arResult["ITEMS"] as $arItem):?> 
    <a class="article-item article-list__item"
        href="<? echo $arItem["PROPERTIES"]["link"]["VALUE"]?? '#' ?>" 
        data-anim="anim-3">
        <div class="article-item__background">
            <img src="<? echo $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<? echo $arItem["NAME"] ?>"
                data-src="<? echo $arItem["PROPERTIES"]["data_attribute"]["VALUE"];?>"/>
        </div>
        <div class="article-item__wrapper">
            <div class="article-item__title"><? echo $arItem["NAME"] ?></div>
                <div class="article-item__content"><? echo $arItem["PREVIEW_TEXT"]; ?></div>
        </div>    
    </a>   
<?endforeach;?>
    </div>
</div>
