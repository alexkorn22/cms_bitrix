<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
    foreach ($arResult['ITEMS'] as $item){
        $img = CFile::GetFileArray($item['PREVIEW_PICTURE']);
        $arResult['PRODUCTS'][] = [
            'NAME'            => $item['NAME'],
            'DETAIL_PAGE_URL' => $item['DETAIL_PAGE_URL'],
            'IMAGE_SRC'       => $img['SRC'],
        ];
    }