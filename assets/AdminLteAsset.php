<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminLteAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'web/themes/AdminLTE/bootstrap/css/bootstrap.min.cs',
        'web/themes/AdminLTE/dist/css/AdminLTE.min.css',
        'web/themes/AdminLTE/dist/css/skins/skin-blue.min.css',
        'web/themes/AdminLTE/plugins/daterangepicker/daterangepicker.css',
        'web/themes/AdminLTE/plugins/bootstrap-wysithml5/bootstrap3-wysihtml5.all.min.cs',
        'web/themes/AdminLTE/plugins/datatables/dataTables.bootstrap.css',
    ];
    public $js = [
        
        'web/themes/AdminLTE/plugins/datatables/jquery.dataTables.js',
        'web/themes/AdminLTE/plugins/datatables/dataTables.bootstrap.js',
        'web/themes/AdminLTE/bootstrap/js/bootstrap.min.js',
        'web/themes/AdminLTE/plugins/fastclick/fastclick.js',
        'web/themes/AdminLTE/dist/js/app.min.js',
        'web/themes/AdminLTE/plugins/sparkline/jquery.sparkline.min.js',
        'web/themes/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'web/themes/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'web/themes/AdminLTE/plugins/daterangepicker/daterangepicker.js',
        'web/themes/AdminLTE/plugins/datepicker/bootstrap-datepicker.js',
        'web/themes/AdminLTE/plugins/iCheck/icheck.min.js',
        'web/themes/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js',
        'web/themes/AdminLTE/plugins/chartjs/Chart.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
