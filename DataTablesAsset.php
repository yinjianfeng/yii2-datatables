<?php
/**
 * Created by PhpStorm.
 * User: yinjianfeng
 * Date: 2017/5/4
 * Time: 上午11:23
 */

namespace qiubao\datatables;


use yii\web\AssetBundle;

class DataTablesAsset extends AssetBundle {

    public $sourcePath = '@bower/datatables';

    public $css = [
        "media/css/jquery.dataTables.css",
    ];

    public $js = [
        "media/js/jquery.dataTables.js",
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

}