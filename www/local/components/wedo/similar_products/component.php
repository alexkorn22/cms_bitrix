<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

// получить ID элементов из свойства похожых товаров !
$productId         = $arParams['PRODUCT_ID'];
$similarProductsOb = CIBlockElement::GetProperty(
    $arParams['IBLOCK_ID'],
    $productId,
    array(),
    array(
        'CODE'=>'SIMILAR_PRODUCTS'
    )
);
while ($property = $similarProductsOb->GetNext())
{
    $similarProductsID[] = $property['VALUE'];
}
// получить похожие товары по ID !
$arFilter = array(
    'IBLOCK_ID ' =>$arParams['IBLOCK_ID'],
    'ID' => $similarProductsID
);
$arSelect = array('ID','IBLOCK_ID','NAME','PREVIEW_PICTURE','DETAIL_PAGE_URL',"PROPERTY_*");
$similarProductsRes = CIBlockElement::GetList(
    array(),
    $arFilter,
    false,
    false,
    $arSelect
);
$i=0;
while($ob = $similarProductsRes->GetNextElement()){
    $arFields[]            = $ob->GetFields();
    $arProps               = $ob->GetProperties();
    $arFields[$i]['PRICE'] = $arProps['PRICE']['VALUE'];
    $i++;
}

$arResult['ITEMS']  = $arFields;


$this->IncludeComponentTemplate();

?>