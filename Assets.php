<?php

namespace kirjuha1982\datetimepicker;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{
	public $sourcePath = '@kirjuha1982/datetimepicker/picker';

    public $js = [
        'jquery.datetimepicker.js',
    ];

    public $css = [
        'jquery.datetimepicker.css',
    ];

	public $depends = [
		'yii\web\YiiAsset',
	];
}
