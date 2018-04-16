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

$cubsOnDay  = $_SESSION['arrFilter'][0]['arrFilter_63_MAX'];
$cubsOnHour = $_SESSION['arrFilter'][0]['arrFilter_77_MAX'];

global $arrFilter;
?>
<? if(empty($arrFilter)):?>
<div class="container-fluid catalog" id="filterBlock">
    <div class="wrap-filter">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="left">
                    <div class="catalog-text-head">
                        <p>Какая кофемашина подойдет Вам?</p>
                        <p>Не можете выбрать, какую профессиональную кофемашину купить для ваших задач? Воспользуйтесь сервисом подбора, который порекомендует вам нужную модель. </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="right">
                    <div class="catalog-btn-filter">
                        <button type="button" class="btn btn_red btn_big btn_small-mobile" data-toggle="modal" data-target="#filter">Подобрать кофемашину</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?else:?>
    <div class="col-12 col-lg-11 text-right">
        <div class="right">
            <div class="catalog-btn-filter">
                <button type="button" class="btn btn_red btn-sm btn_small-mobile" data-toggle="modal" data-target="#filter">Фильтр</button>
            </div>
        </div>
    </div>
<?endif;?>

    <!--  our modal goes herel -->
    <div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="filter" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered custom-modal-dialog" role="document">
            <div class="modal-content custom-modal-content custom-modal-content_bg-red">
                <div class="modal-header custom-modal-header">
                    <h5 class="modal-title custom-modal-title">Сервис подбора кофемашины</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="hideModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body custom-modal-body">
                    <form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get" id="filterForm">
                        <?foreach($arResult["HIDDEN"] as $arItem):?>
                            <input type="hidden" name="<?echo $arItem["CONTROL_NAME"]?>" id="<?echo $arItem["CONTROL_ID"]?>" value="<?echo $arItem["HTML_VALUE"]?>" />
                        <?endforeach;?>
                            <?
                            foreach($arResult["ITEMS"] as $key=>$arItem)
                            {
                                if(
                                    empty($arItem["VALUES"])
                                    || isset($arItem["PRICE"])
                                )
                                    continue;

                                if (
                                    $arItem["DISPLAY_TYPE"] == "A"
                                    && (
                                        $arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0
                                    )
                                )
                                    continue;
                                ?>
                                            <?
                                            $arCur = current($arItem["VALUES"]);
                                            switch ($arItem["DISPLAY_TYPE"])
                                            {
                                                case "B"://NUMBERS
                                                ?>
                                                <?if($arItem["VALUES"]["MIN"]["CONTROL_NAME"] == 'arrFilter_63_MIN'):?>
                                                    <input
                                                            class="min-price"
                                                            type="hidden"
                                                            name="<?echo $arItem["VALUES"]["MIN"]["CONTROL_NAME"]?>"
                                                            id="<?echo $arItem["VALUES"]["MIN"]["CONTROL_ID"]?>"
                                                            value="0"
                                                            size="5"
                                                    />
                                                    <div class="form-group">
                                                        <label for="cubsOnDay"><?=$arItem["NAME"]?> : </label>
                                                        <select class="form-control custom-select" name="<?echo $arItem["VALUES"]["MAX"]["CONTROL_NAME"]?>" id="cubsOnDay">
                                                            <option value="5000">Не указано</option>
                                                            <option value="51" <?if($cubsOnDay == 51):?>selected<?endif;?> >до 50</option>
                                                            <option value="101" <?if($cubsOnDay == 101):?>selected<?endif;?> >до 100</option>
                                                            <option value="151" <?if($cubsOnDay == 151):?>selected<?endif;?> >до 150</option>
                                                            <option value="181" <?if($cubsOnDay == 181):?>selected<?endif;?> >до 180</option>
                                                            <option value="201" <?if($cubsOnDay == 201):?>selected<?endif;?> >до 200</option>
                                                        </select>
                                                    </div>
                                                <?elseif ($arItem["VALUES"]["MIN"]["CONTROL_NAME"] == 'arrFilter_77_MIN'):?>
                                                    <input
                                                            class="min-price"
                                                            type="hidden"
                                                            name="<?echo $arItem["VALUES"]["MIN"]["CONTROL_NAME"]?>"
                                                            id="<?echo $arItem["VALUES"]["MIN"]["CONTROL_ID"]?>"
                                                            value="0"
                                                            size="5"
                                                    />
                                                    <div class="form-group">
                                                        <label for="cubsOnHour"><?=$arItem["NAME"]?> : </label>
                                                        <select class="form-control custom-select" name="<?echo $arItem["VALUES"]["MAX"]["CONTROL_NAME"]?>" id="cubsOnHour">
                                                            <option value="5000">Не указано</option>
                                                            <option value="51" <?if($cubsOnHour == 51):?>selected<?endif;?> >до 50</option>
                                                            <option value="101" <?if($cubsOnHour == 101):?>selected<?endif;?>>до 100</option>
                                                            <option value="151" <?if($cubsOnHour == 151):?>selected<?endif;?>>до 150</option>
                                                            <option value="181" <?if($cubsOnHour == 181):?>selected<?endif;?>>до 180</option>
                                                            <option value="201" <?if($cubsOnHour == 201):?>selected<?endif;?>>до 200</option>
                                                        </select>
                                                    </div>
                                                <?endif;?>

                                                <?
                                                break;
                                                case "P"://DROPDOWN
                                                $checkedItemExist = false;
                                                ?>
                                                    <div class="col-xs-12">
                                                        <div class="bx-filter-select-container">
                                                            <div class="bx-filter-select-block" onclick="smartFilter.showDropDownPopup(this, '<?=CUtil::JSEscape($key)?>')">
                                                                <div class="bx-filter-select-text" data-role="currentOption">
                                                                    <?
                                                                    foreach ($arItem["VALUES"] as $val => $ar)
                                                                    {
                                                                        if ($ar["CHECKED"])
                                                                        {
                                                                            echo $ar["VALUE"];
                                                                            $checkedItemExist = true;
                                                                        }
                                                                    }
                                                                    if (!$checkedItemExist)
                                                                    {
                                                                        echo GetMessage("CT_BCSF_FILTER_ALL");
                                                                    }
                                                                    ?>
                                                                </div>
                                                                <div class="bx-filter-select-arrow"></div>
                                                                <input
                                                                        style="display: none"
                                                                        type="radio"
                                                                        name="<?=$arCur["CONTROL_NAME_ALT"]?>"
                                                                        id="<? echo "all_".$arCur["CONTROL_ID"] ?>"
                                                                        value=""
                                                                />
                                                                <?foreach ($arItem["VALUES"] as $val => $ar):?>
                                                                    <input
                                                                            style="display: none"
                                                                            type="radio"
                                                                            name="<?=$ar["CONTROL_NAME_ALT"]?>"
                                                                            id="<?=$ar["CONTROL_ID"]?>"
                                                                            value="<? echo $ar["HTML_VALUE_ALT"] ?>"
                                                                        <? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
                                                                    />
                                                                <?endforeach?>
                                                                <div class="bx-filter-select-popup" data-role="dropdownContent" style="display: none;">
                                                                    <ul>
                                                                        <li>
                                                                            <label for="<?="all_".$arCur["CONTROL_ID"]?>" class="bx-filter-param-label" data-role="label_<?="all_".$arCur["CONTROL_ID"]?>" onclick="smartFilter.selectDropDownItem(this, '<?=CUtil::JSEscape("all_".$arCur["CONTROL_ID"])?>')">
                                                                                <? echo GetMessage("CT_BCSF_FILTER_ALL"); ?>
                                                                            </label>
                                                                        </li>
                                                                        <?
                                                                        foreach ($arItem["VALUES"] as $val => $ar):
                                                                            $class = "";
                                                                            if ($ar["CHECKED"])
                                                                                $class.= " selected";
                                                                            if ($ar["DISABLED"])
                                                                                $class.= " disabled";
                                                                            ?>
                                                                            <li>
                                                                                <label for="<?=$ar["CONTROL_ID"]?>" class="bx-filter-param-label<?=$class?>" data-role="label_<?=$ar["CONTROL_ID"]?>" onclick="smartFilter.selectDropDownItem(this, '<?=CUtil::JSEscape($ar["CONTROL_ID"])?>')"><?=$ar["VALUE"]?></label>
                                                                            </li>
                                                                        <?endforeach?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?
                                                break;
                                                case "K":           //RADIO_BUTTONS
                                                ?>
                                                    <div class="col-xs-12">
                                                        <div class="radio">
                                                            <label class="bx-filter-param-label" for="<? echo "all_".$arCur["CONTROL_ID"] ?>">
                                            <span class="bx-filter-input-checkbox">
                                                <input
                                                        type="radio"
                                                        value=""
                                                        name="<? echo $arCur["CONTROL_NAME_ALT"] ?>"
                                                        id="<? echo "all_".$arCur["CONTROL_ID"] ?>"
                                                        onclick="smartFilter.click(this)"
                                                />
                                                <span class="bx-filter-param-text"><? echo GetMessage("CT_BCSF_FILTER_ALL"); ?></span>
                                            </span>
                                                            </label>
                                                        </div>
                                                        <?foreach($arItem["VALUES"] as $val => $ar):?>
                                                            <div class="radio">
                                                                <label data-role="label_<?=$ar["CONTROL_ID"]?>" class="bx-filter-param-label" for="<? echo $ar["CONTROL_ID"] ?>">
                                                <span class="bx-filter-input-checkbox <? echo $ar["DISABLED"] ? 'disabled': '' ?>">
                                                    <input
                                                            type="radio"
                                                            value="<? echo $ar["HTML_VALUE_ALT"] ?>"
                                                            name="<? echo $ar["CONTROL_NAME_ALT"] ?>"
                                                            id="<? echo $ar["CONTROL_ID"] ?>"
                                                        <? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
                                                            onclick="smartFilter.click(this)"
                                                    />
                                                    <span class="bx-filter-param-text" title="<?=$ar["VALUE"];?>"><?=$ar["VALUE"];?><?
                                                        if ($arParams["DISPLAY_ELEMENT_COUNT"] !== "N" && isset($ar["ELEMENT_COUNT"])):
                                                            ?>&nbsp;(<span data-role="count_<?=$ar["CONTROL_ID"]?>"><? echo $ar["ELEMENT_COUNT"]; ?></span>)<?
                                                        endif;?></span>
                                                </span>
                                                                </label>
                                                            </div>
                                                        <?endforeach;?>
                                                    </div>
                                                <?
                                                break;
                                                default://CHECKBOXES
                                                ?>
                                                        <?foreach($arItem["VALUES"] as $val => $ar):?>
                                                            <? if($ar['VALUE'] == 'Да'):?>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input
                                                                            type="checkbox"
                                                                            class="custom-control-input"
                                                                            value="<? echo $ar["HTML_VALUE"] ?>"
                                                                            name="<? echo $ar["CONTROL_NAME"] ?>"
                                                                            id="<? echo $ar["CONTROL_ID"] ?>"
                                                                            <? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
                                                                    >
                                                                    <label  class="custom-control-label" for="<? echo $ar["CONTROL_ID"] ?>">Хочу только новую кофемашину</label>
                                                                </div>
                                                            <?endif;?>
                                                        <?endforeach;?>
                                                <? } ?>
                            <? } ?>

                        <div class="modal-footer custom-modal-footer">
                            <div class="row">
                                <div class="col-xs-12 bx-filter-button-box">
                                    <div class="bx-filter-block">
                                        <div class="bx-filter-parameters-box-container">
                                            <input
                                                    class="btn btn_black btn_small-mobile btn_font-small"
                                                    type="submit"
                                                    id="set_filter"
                                                    name="set_filter"
                                                    value="Подобрать"
                                            />
                                            <input
                                                    class="btn btn_black btn_small-mobile btn_font-small"
                                                    type="submit"
                                                    id="del_filter"
                                                    name="del_filter"
                                                    value="<?=GetMessage("CT_BCSF_DEL_FILTER")?>"
                                            />
                                            <div class="bx-filter-popup-result <?if ($arParams["FILTER_VIEW_MODE"] == "VERTICAL") echo $arParams["POPUP_POSITION"]?>" id="modef" <?if(!isset($arResult["ELEMENT_COUNT"])) echo 'style="display:none"';?> style="display: inline-block;">
                                                <?echo GetMessage("CT_BCSF_FILTER_COUNT", array("#ELEMENT_COUNT#" => '<span id="modef_num">'.intval($arResult["ELEMENT_COUNT"]).'</span>'));?>
                                                <span class="arrow"></span>
                                                <br/>
                                                <a href="<?echo $arResult["FILTER_URL"]?>" target=""><?echo GetMessage("CT_BCSF_FILTER_SHOW")?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clb"></div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--  end of modal -->
