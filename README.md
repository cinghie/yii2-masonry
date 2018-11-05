# Yii2 Masonry

Asset Bundle to include Masonry on your Yii 2 project: https://github.com/desandro/masonry

Installation
-----------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require cinghie/yii2-masonry "^1.0.0"
```

or add this line to the require section of your `composer.json` file.

```
"cinghie/yii2-masonry": "^1.0.0"
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
