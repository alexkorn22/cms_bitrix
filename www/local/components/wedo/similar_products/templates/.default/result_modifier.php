<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult['ITEMS'] as &$item){
    $item['IMAGE_SRC'] = CFile::GetPath($item['PREVIEW_PICTURE']);
}
