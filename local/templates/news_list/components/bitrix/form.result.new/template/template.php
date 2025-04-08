<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

/**
 * @var array $arResult
 */

if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?php endif;?>
<?= $arResult["FORM_NOTE"] ?? '' ?>
<?php if ($arResult["isFormNote"] != "Y")
{
?>

<div class="contact-form">
    <div class="contact-form__head">
        <div class="contact-form__head-title"><?= $arResult["FORM_TITLE"]?></div>
        <div class="contact-form__head-text"><?= $arResult["FORM_DESCRIPTION"]?></div>
    </div>
    <?=$arResult["FORM_HEADER"]?>
        <div class="contact-form__form-inputs">
            <div class="input contact-form__input">
                <label class="input__label" for="medicine_name">
                    <div class="input__label-text"><?=$arResult["QUESTIONS"]["NAME"]["CAPTION"]?></div>
                    <input 
                        class="input__input" 
                        type="text" 
                        id="medicine_name" 
                        name=<?='form_text_' . $arResult["QUESTIONS"]["NAME"]["STRUCTURE"][0]["ID"]?> 
                        value=""
                        required="">
                </label>
            </div>
            <div class="input contact-form__input">
                <label class="input__label" for="medicine_company">
                    <div class="input__label-text"><?=$arResult["QUESTIONS"]["COMPANY"]["CAPTION"]?></div>
                    <input 
                        class="input__input" 
                        type="text" 
                        id="medicine_company" 
                        name=<?='form_text_' . $arResult["QUESTIONS"]["COMPANY"]["STRUCTURE"][0]["ID"]?> 
                        value=""
                        required="">
                </label>
            </div>
            <div class="input contact-form__input">
                <label class="input__label" for="medicine_email">
                    <div class="input__label-text"><?=$arResult["QUESTIONS"]["EMAIL"]["CAPTION"]?></div>
                    <input 
                        class="input__input" 
                        type="email" 
                        id="medicine_email" 
                        name=<?='form_text_' . $arResult["QUESTIONS"]["EMAIL"]["STRUCTURE"][0]["ID"]?> 
                        value=""
                        required="">
                </label>
            </div>
            <div class="input contact-form__input">
                <label class="input__label" for="medicine_phone">
                    <div class="input__label-text"><?=$arResult["QUESTIONS"]["PHONE"]["CAPTION"]?></div>
                    <input 
                        class="input__input" 
                        type="tel" id="medicine_phone"
                        data-inputmask="'mask': '+79999999999', 'clearIncomplete': 'true'" 
                        maxlength="12"
                        x-autocompletetype="phone-full" 
                        name=<?='form_text_' . $arResult["QUESTIONS"]["PHONE"]["STRUCTURE"][0]["ID"]?>
                        value="" 
                        required="">
                </label>
            </div>
        </div>
        <div class="contact-form__form-message">
            <div class="input">
                <label class="input__label" for="medicine_message">
                    <div class="input__label-text"><?=$arResult["QUESTIONS"]["MESSAGE"]["CAPTION"]?></div>
                    <textarea 
                        class="input__input" 
                        type="text" 
                        id="medicine_message" 
                        name=<?='form_textarea_' . $arResult["QUESTIONS"]["MESSAGE"]["STRUCTURE"][0]["ID"]?>
                        value="">
                    </textarea>
                </label>
            </div>
        </div>
        <div class="contact-form__bottom">
            <div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что
                ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных
                данных&raquo;.
            </div>
            <input 
                class="form-button contact-form__bottom-button" 
                type="submit" 
                name="web_form_submit" 
                value="<?=$arResult["arForm"]["BUTTON"]?>" />
        </div>
    <?=$arResult["FORM_FOOTER"]?>
</div>
<?php
} //endif (isFormNote)
?>