<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult['ITEMS'] as &$item){
    $resizedImg = CFile::ResizeImageGet( $item['PREVIEW_PICTURE'],array('width'=>350, 'height'=>350), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true);
    $item['IMAGE_SRC'] = $resizedImg['src'];
}
