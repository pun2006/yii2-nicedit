<?php

namespace pun2006\yiinicedit;
use yii\web\AssetBundle;


class NiceditWidgetAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/Assets';

    
    public $js = [
    "nicEdit/nicEdit.js",    
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $depends = [      
    ];   
    
}