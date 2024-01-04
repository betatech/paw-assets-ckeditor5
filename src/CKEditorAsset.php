<?php
namespace paw\assets\ckeditor5;

use yii\web\AssetBundle;

class CKEditorAsset extends AssetBundle
{
    public $sourcePath = '@npm/ckeditor--ckeditor5-build-classic/build';

    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];

    public $js = [
        'ckeditor.js',
    ];
}
