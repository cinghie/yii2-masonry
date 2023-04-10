# Yii2 Masonry

![License](https://img.shields.io/packagist/l/cinghie/yii2-masonry.svg)
![Latest Stable Version](https://img.shields.io/github/release/cinghie/yii2-masonry.svg)
![Latest Release Date](https://img.shields.io/github/release-date/cinghie/yii2-masonry.svg)
![Latest Commit](https://img.shields.io/github/last-commit/cinghie/yii2-masonry.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/cinghie/yii2-masonry.svg)](https://packagist.org/packages/cinghie/yii2-masonry)

Asset Bundle to include Masonry on your Yii 2 project: https://github.com/desandro/masonry

Installation
-----------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require cinghie/yii2-masonry "^1.0.2"
```

or add this line to the require section of your `composer.json` file.

```
"cinghie/yii2-masonry": "^1.0.2"
```

Configuration
-----------------

Add in the view for normal CSS and JS

```
use cinghie\masonry\MasonryAsset;

MasonryAsset::register($this);
```

Add in the view for minify CSS and JS

```
use cinghie\masonry\MasonryMinifyAsset;

MasonryMinifyAsset::register($this);
```
