<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */

// получить свойства элемента :
foreach ($arResult['ITEMS'] as &$item){
    $props = CIBlockElement::GetByID($item['ID'])->GetNextElement()->GetProperties();
    $item['PROPERTIES'] = [];
    foreach ($props as $prop){
        $item['PROPERTIES'][] = $prop;
        if ($prop['CODE'] == 'SLOGAN'){
            $item['SLOGAN'] = $prop['VALUE'];
        }
        if($prop['CODE'] == 'PRICE'){
              $EUR = new Currency(Currency::EUR);
              $item['PRICE_UAH'] = round($EUR->convertTo($prop['VALUE'],Currency::UAH));
        }
    }

    $item['IMG']=[
        'SRC'=>$item["PREVIEW_PICTURE"]["SRC"],
        'ALT'=>$item['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_ALT'],
        'TITLE'=>$item['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE']
    ];
}
