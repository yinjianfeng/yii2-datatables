<?php
/**
 * Created by PhpStorm.
 * User: yinjianfeng
 * Date: 2017/5/4
 * Time: 上午11:28
 */

namespace qiubao\datatables;


use yii\web\AssetBundle;

class DataTablesTableToolsAsset extends AssetBundle {
    public $sourcePath = '@bower/datatables-tabletools';

    public $css = [
        "css/dataTables.tableTools.css",
    ];

    public $js = [
        "js/dataTables.tableTools.js",
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'qiubao\datatables\DataTablesAsset',
    ];
}