<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */

use Bitrix\Main\Application,
    Bitrix\Main\Web\Uri;

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
    $item['PROPERTIES']['isRent'] = $props['RENT']['VALUE_XML_ID'] == 'RENT_TRUE';
    $item['PROPERTIES']['isSale'] = $props['isSale']['VALUE_XML_ID'] == 'Y';

// resize images catalog :

    $resizedImg = CFile::ResizeImageGet($item["PREVIEW_PICTURE"]["ID"], array('width'=>300, 'height'=>300), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true);
    $item['IMG']=[
        'SRC'=>$resizedImg["src"],
        'ALT'=>$item['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_ALT'],
        'TITLE'=>$item['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE']
    ];

    // Ссылка на страницу аренда :
    $request = Application::getInstance()->getContext()->getRequest();
    $uri = new Uri('/lease');
    $uri->addParams($request->getQueryList()->toArray());
    $uri->addParams(array("cm" => $arResult['ID']));
    $item['leaseLink']= $uri->getUri();

}
