yii2-holder
==============

composer.json
===================
````````
"require": {
        "xj/holder": "*"
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

