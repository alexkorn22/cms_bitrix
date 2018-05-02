<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

class LogoImage
{
    protected  $resizedLogoPath      = '/upload/logo/logoResized.png';
    protected  $resizedLogoBlackPath = '/upload/logo/logoBlackResized.png';

    public function getSrcResized () {
        $logoSrc = $_SERVER["DOCUMENT_ROOT"].IMAGES_PATH.'/logo.png';
        $logoDestinationFile  = $_SERVER["DOCUMENT_ROOT"].$this->resizedLogoPath ;
        if($this->resizeImg($logoSrc,$logoDestinationFile)){
            return $this->resizedLogoPath ;
        }
        return IMAGES_PATH.'/logo.png' ;
    }

    public function getSrcBlackResized () {
        $logoSrc = $_SERVER["DOCUMENT_ROOT"].IMAGES_PATH.'/logo_black.png' ;
        $logoDestinationFile = $_SERVER["DOCUMENT_ROOT"].$this->resizedLogoBlackPath ;
        if($this->resizeImg($logoSrc,$logoDestinationFile)){
            return $this->resizedLogoBlackPath;
        }
        return IMAGES_PATH.'/logo_black.png';
    }

    public function resizeImg($src,$destination){
        if(file_exists ($destination)){
            return true ;
        }
        $IsResized = CFile::ResizeImageFile(
            $src,
            $destination,
            array('width'=>95,'height'=>75),
            BX_RESIZE_IMAGE_PROPORTIONAL
        );

        if($IsResized){
            return true;
        }
        return false;
    }
}