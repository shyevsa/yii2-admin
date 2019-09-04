<?php


namespace mdm\admin;


use yii\web\AssetBundle;

class ScriptAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@mdm/admin/assets';

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}