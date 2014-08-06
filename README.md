yii2-holder
==============

composer.json
------------
```json
"require": {
        "xj/yii2-holder": "*"
},
```

In View
------------
```php
use xj\holder\HolderAssets;
HolderAssets::register($this);
```


In Assets depends
-----------
```php
public $depends = [
    'xj\holder\HolderAssets',
];
```

