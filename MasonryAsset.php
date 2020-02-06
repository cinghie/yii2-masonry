<?php

/**
* @copyright Copyright &copy; Gogodigital Srls
* @company Gogodigital Srls - Wide ICT Solutions 
* @website http://www.gogodigital.it
* @github https://github.com/cinghie/yii2-masonry
* @license GNU GENERAL PUBLIC LICENSE VERSION 3
* @package yii2-masonry
* @version 1.0.1
*/

namespace cinghie\masonry;

use yii\bootstrap\BootstrapAsset;
use yii\bootstrap\BootstrapPluginAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Class FontAwesomeAsset
 *
 * @package cinghie\masonry
 */
class MasonryAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@bower/jquery-masonry/dist';

    /**
     * @inherit
     */
	public $js = [
		'masonry.pkgd.js',
	];
    
    /**
     * @inherit
     */
    public $depends = [
	    YiiAsset::class,
	    BootstrapAsset::class,
	    BootstrapPluginAsset::class,
    ];
}
