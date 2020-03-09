<?php
/**
 * Created by PhpStorm.
 * User: matth
 * Date: 09.03.2020
 * Time: 13:07
 */
require 'vendor/autoload.php';

$loader=new Twig_Loader_Filesystem('views');
$twig =new Twig_Environment($loader);