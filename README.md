yii2-holder
==============

composer.json
===================
````````
"require": {
        "xj/yii2-holder": "*"
},
````````

In View
===============
````````````
use xj\holder\HolderAssets;
HolderAssets::register($this);
````````````


In Assets depends
===============
```````````
public $depends = [
    'xj\holder\HolderAssets',
];
```````````

