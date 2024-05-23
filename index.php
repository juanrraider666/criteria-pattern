<?php


umask(0000);

require_once './vendor/autoload.php';

$index = new \Juandiaz\CriteriaPattern\Index();


$index->__invoke();