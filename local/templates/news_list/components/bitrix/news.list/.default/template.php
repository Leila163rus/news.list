<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="barba-wrapper">
    <div class="article-list">
<?php if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?php endif;?>

<?php foreach($arResult["ITEMS"] as $arItem):?> 
    <a class="article-item article-list__item"
        href="<?php echo $arItem["PROPERTIES"]["link"]["VALUE"]?? '#' ?>" 
        data-anim="anim-3">
        <div class="article-item__background">
            <img src="<?php echo $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?php echo $arItem["NAME"] ?>"
                data-src="<?php echo $arItem["PROPERTIES"]["data_attribute"]["VALUE"];?>"/>
        </div>
        <div class="article-item__wrapper">
            <div class="article-item__title"><?php echo $arItem["NAME"] ?></div>
                <div class="article-item__content"><?php echo $arItem["PREVIEW_TEXT"]; ?></div>
        </div>    
    </a>   
<?php endforeach;?>
    </div>
</div>
