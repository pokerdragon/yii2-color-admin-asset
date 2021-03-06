<?php
/**
 * User: harlen-angkemac
 * Date: 2017/7/13 - 下午6:06
 *
 */

namespace pokerDragon\colorAdmin\web\plugins;

use yii\web\AssetBundle as BaseColorAdminAsset;

class WizardAsset extends BaseColorAdminAsset
{
    public $sourcePath = '@vendor/pokerdragon/color-admin/assets';

    public $css = [
        'plugins/bootstrap-wizard/css/bwizard.min.css'
    ];
    public $js = [
        'plugins/bootstrap-wizard/js/bwizard.js',
    ];

    public $depends = [
        'pokerDragon\colorAdmin\web\plugins\JqueryAsset'
    ];
}