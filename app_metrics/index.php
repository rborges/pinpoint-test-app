<?php

require __DIR__. '/vendor/autoload.php'

define('AOP_CACHE_DIR',__DIR__.'/Cache/');
define('PLUGINS_DIR',__DIR__.'./Plugins/');
define('USER_DEFINED_CLASS_MAP_IMPLEMENT',"\Plugins\Framework\app\ClassMapInFile");
define('APPLICATION_NAME','APP-METRICS');
define('APPLICATION_ID','app-metrics');
define('PINPOINT_USE_CACHE','NO');
define('PP_REQ_PLUGINS', '\Plugins\PerRequestPlugins');
require_once __DIR__. './vendor/pinpoint-apm/pinpoint-php-aop/auto_pinpointed.php';

echo 'Funciona';
