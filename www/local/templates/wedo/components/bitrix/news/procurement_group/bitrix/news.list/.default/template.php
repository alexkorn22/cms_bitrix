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
$view = new ViewTemplate($this);
?>

<div class="procurement_group-list">
    <div class="row">
        <div class="col-md-6">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                echo $view->render('list_one',
                    [
                        'arItem' => $arItem,
                        'arParams' => $arParams,
                        'areaId' => $this->GetEditAreaId($arItem['ID']),
                    ])
                ?>

            <?endforeach;?>
        </div>

        <div class="col-md-6">
            <img src="<?= $this->GetFolder() . '/img/list.png'?>" alt="Группы" class="img-fluid">
        </div>
    </div>
</div>

<?$APPLICATION->IncludeComponent(
    "wedo:forms",
    "procurement_group_check",
    Array(
        "COMPONENT_TEMPLATE" => "catalog_form",
        "FORM_ID" => "procurement_group_check",
        "FORM_TYPE" => "procurement_group_check",
        "ORDER_TYPE" => "",
        "telegramChatId" => "-226178797"
    )
);?>



