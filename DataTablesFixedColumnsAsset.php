<?php
/**
 * Created by PhpStorm.
 * User: yinjianfeng
 * Date: 2017/5/4
 * Time: 上午11:30
 */

namespace qiubao\datatables;


use yii\web\AssetBundle;

class DataTablesFixedColumnsAsset extends AssetBundle {
    public $sourcePath = '@bower/datatables-fixedColumns';

    public $css = [
        "css/fixedColumns.bootstrap.css",
    ];

    public $js = [
        "js/dataTables.fixedColumns.js",
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'fedemotta\datatables\DataTablesAsset',
    ];
}