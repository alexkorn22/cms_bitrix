<?php
/**
 * Created by PhpStorm.
 * User: amarz
 * Date: 02.05.2018
 * Time: 15:33
 */

class LogoImage
{
    protected  $resizedLogoPath      = '/upload/logo/logoResized.png';
    protected  $resizedLogoBlackPath = '/upload/logo/logoBlackResized.png';

    public function getSrcResized () {
        $logoDestinationFile  = $_SERVER["DOCUMENT_ROOT"].$this->resizedLogoPath ;
        // check if file exists :
        if(file_exists ($logoDestinationFile)){
            return $this->resizedLogoPath ;
        }
        CFile::ResizeImageFile(
            $_SERVER["DOCUMENT_ROOT"].IMAGES_PATH.'/logo.png',
            $logoDestinationFile,
            array('width'=>95,'height'=>75),
            BX_RESIZE_IMAGE_PROPORTIONAL
        );
        return $this->resizedLogoPath;
    }

    public function getSrcBlackResized () {
        $logoBlackDestinationFile = $_SERVER["DOCUMENT_ROOT"].$this->resizedLogoBlackPath ;
        // check if file exists :
        if(file_exists ($logoBlackDestinationFile)){
            return $this->resizedLogoBlackPath ;
        }
        CFile::ResizeImageFile(
            $_SERVER["DOCUMENT_ROOT"].IMAGES_PATH.'/logo_black.png',
            $logoBlackDestinationFile,
            array('width'=>95,'height'=>75),
            BX_RESIZE_IMAGE_PROPORTIONAL
        );
        return $this->resizedLogoBlackPath ;
    }
}