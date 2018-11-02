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
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae arcu facilisis, condimentum magna sed, ornare risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce arcu augue, commodo quis interdum id, viverra sit amet augue. Aliquam at facilisis metus, eget pretium mi. Morbi accumsan, metus id varius rhoncus, mi purus ultrices arcu, tempus convallis eros libero quis purus. Curabitur libero neque, pretium eget eleifend id, facilisis non urna. Sed consequat mollis lorem non commodo. Suspendisse ornare libero purus, sit amet laoreet elit vulputate eget. Pellentesque in dolor semper, iaculis risus at, venenatis velit. Morbi a pulvinar leo, at viverra nisl. Quisque purus dolor, laoreet in scelerisque nec, congue ac dolor. Ut vel suscipit orci. Donec urna est, molestie nec volutpat et, dapibus ut diam. Nullam scelerisque tortor nisl. Mauris tincidunt diam nibh, vel placerat augue rutrum in. Aenean pharetra risus eu enim sagittis, dictum convallis est dictum.

            Sed finibus porta tellus. Maecenas in turpis ac lectus hendrerit mattis a at nunc. Etiam gravida nisl vel felis scelerisque, malesuada mollis orci semper. Cras eget arcu vel dolor ornare tincidunt. Donec viverra feugiat hendrerit. Phasellus tellus erat, ultrices non neque in, tincidunt tempor ex. Nunc accumsan tincidunt nibh eget semper. Maecenas odio neque, mattis ac ligula vel, lacinia rhoncus ipsum.

            Integer hendrerit varius ipsum, quis varius magna finibus et. Mauris venenatis aliquam dolor, vel interdum ligula efficitur sed. Quisque non pulvinar dui, et maximus quam. Nunc maximus dignissim tortor vel vehicula. Quisque egestas libero pretium mi consectetur, quis blandit tellus maximus. Morbi efficitur justo ex, eget dictum tellus vehicula vitae. Praesent euismod ex auctor aliquet suscipit. Fusce sit amet neque tortor. Phasellus eu massa in risus fringilla facilisis. In finibus at augue id volutpat. Donec dolor elit, semper nec vehicula eget, imperdiet in tortor. Nunc mattis vitae eros quis facilisis. Vestibulum vehicula consequat orci et ullamcorper. Nunc sollicitudin orci et dignissim dapibus. Donec at placerat ligula, vestibulum auctor odio. Quisque efficitur ligula ex, vitae pretium arcu sodales eu.

            Pellentesque vitae ipsum a magna laoreet dapibus. Integer non velit sed quam dignissim scelerisque. Fusce et fermentum mauris. Quisque elementum sapien dolor, semper eleifend ligula vehicula nec. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam erat volutpat. Nunc quis justo blandit, varius ante in, congue enim. Mauris egestas lacus tortor, et finibus augue luctus id.

            Nullam interdum leo at ultricies accumsan. Mauris placerat quis nunc nec venenatis. Sed sodales molestie diam, quis mollis sem placerat ut. Maecenas leo dolor, cursus blandit purus porttitor, eleifend faucibus urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed ultrices ante dui, vel porttitor lorem elementum tristique. Morbi nisl magna, egestas lacinia quam ultricies, euismod molestie urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus ut accumsan turpis, id venenatis tellus. Integer sit amet ex eu sapien laoreet fringilla. Sed sed imperdiet est.
        </div>
    </div>
</div>

