# user-agent-for-laravel5

a UserAgent parser package for laravel5 which is based on WhichBrowser/Parser

## Install

PHP >= 5.5.9

#### install package

1.  use composer
```shell
composer require "lsxiao/user-agent-for-laravel5"
```


## Configure

#### Laravel

1.  register ServiceProvider in config/app.php
```php
Lsxiao\UserAgent\UserAgentServiceProvider::class
```
2.  add alias to aliases array in config/app.php
```php
'UA' => Lsxiao\UserAgent\Facades\UserAgent::class
```


## Usage
## basic usage
the UserAgent is a child instance of WhichBrowser/Parser class,but added some methods.
```php
<?php
// the added functions.
UA::isCellphone();
UA::isRobot();
UA::isTablet();
UA::isGaming();
UA::isEreader();
UA::isMedia();
UA::isEmulator();
UA::isTV();
UA::isMonitor();
UA::isCamera();
UA::isSignage();
UA::isCar();
UA::isPos();
UA::parse();

UA::parse($headers,$option=[]);//this method will return the UserAgent instance.

// you can use it like this
UA::parse($headers,$option)->isRobot();

UA::parse($headers,$option)->toString();
//QQ Browser 3.9 

UA::parse($headers,$option)->browser->toString();
// Chrome 50  

UA::parse($headers,$option)->engine->toString();
// Webkit

UA::parse($headers,$option)->os->toString();
// OS X El Caption 10.11.4
```

more usage to see [WhichBrowser/Parser](https://github.com/WhichBrowser/Parser)

## License

MIT

## Thanks

####[WhichBrowser/Parser](https://github.com/WhichBrowser/Parser)