<?php
define(BASEDIR ,__DIR__);
include BASEDIR.'/Lib/Loader.php';
spl_autoload_register('Loader::autoload');
