<?php
define(BASEDIR ,__DIR__);
define(SRC_DIR ,__DIR__.'/src');

include BASEDIR.'/framework/Loader.php';
spl_autoload_register('Loader::autoload');
