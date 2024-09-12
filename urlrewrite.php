<?php
$arUrlRewrite=array (
  3 => 
  array (
    'CONDITION' => '#^/test/filter/(.+?)/apply/#',
    'RULE' => 'SMART_FILTER_PATH=$1',
    'ID' => '',
    'PATH' => '/test/index.php',
    'SORT' => 99,
  ),
  0 => 
  array (
    'CONDITION' => '#^/services/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/services/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/products/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/products/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/test/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/test/index.php',
    'SORT' => 100,
  ),
);
