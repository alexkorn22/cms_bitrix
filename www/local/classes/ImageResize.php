<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

class ImageResize
{
    const SIZE_LOGO = [95,75];
    const SIZE_LOGO_NEW = [100,20];
    const SIZE_BTN_ARROW = [22,40];
    const SIZE_REPAIR_ICON = [75,75];
    const SIZE_PROCUREMENT_GROUP = [300,300];
    public $inputFile;
    protected $typeSize;

    public function __construct($imagePath){
        $this->inputFile = $_SERVER['DOCUMENT_ROOT']. $imagePath;
    }

    public function getLink($typeSize){
        $fileName = $this->getResize($typeSize);
        return str_replace( $_SERVER['DOCUMENT_ROOT'],'',$fileName);
    }

    public function getResize($typeSize){
        $this->typeSize = $typeSize;
        $destination = $this->getDestinationPath();
        if(file_exists($destination) || $this->doResize($destination)){
            return $destination;
        }
        return $this->inputFile;
    }

    protected function doResize($destination){
        return CFile::ResizeImageFile(
            $this->inputFile,
            $destination,
            array('width'=>$this->typeSize[0],'height'=>$this->typeSize[1]),
            BX_RESIZE_IMAGE_PROPORTIONAL
        );
    }

    protected function getDestinationPath(){
        $fileName = $_SERVER['DOCUMENT_ROOT'].'/upload/custom_resize';
        $encryptedFileName = md5_file($this->inputFile);
        $fileName .= '/'.substr($encryptedFileName,0,3);
        $fileName .= '/'.$this->typeSize[0].'_'.$this->typeSize[1];
        $fileName .= '/'.$encryptedFileName.'.'.pathinfo($this->inputFile,PATHINFO_EXTENSION);

        return $fileName;
    }

}