<?php
/**
 * Created by PhpStorm.
 * User: yinjianfeng
 * Date: 2017/5/4
 * Time: 上午11:27
 */

namespace qiubao\datatables;


class DataTablesBootstrapAsset extends AssetBundle {
    public $sourcePath = '@bower/datatables-bootstrap3';

    public $css = [
        "BS3/assets/css/datatables.css",
    ];

    public $js = [
        "BS3/assets/js/datatables.js",
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'qiubao\datatables\DataTablesAsset',
    ];
}