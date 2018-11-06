<?php

/**
* @copyright Copyright &copy; Gogodigital Srls
* @company Gogodigital Srls - Wide ICT Solutions 
* @website http://www.gogodigital.it
* @github https://github.com/cinghie/yii2-masonry
* @license GNU GENERAL PUBLIC LICENSE VERSION 3
* @package yii2-masonry
* @version 1.0.0
*/

namespace cinghie\masonry;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Class FontAwesomeAsset
 *
 * @package cinghie\masonry
 */
class MasonryMinifyAsset extends AssetBundle
{

	/**
	 * @inherit
	 */
	public $sourcePath = '@bower/jquery-masonry/dist';

	/**
	 * @inherit
	 */
	public $js = [
		'masonry.pkgd.min.js',
	];

	/**
	 * @inherit
	 */
	public $depends = [
		JqueryAsset::class,
	];

}
