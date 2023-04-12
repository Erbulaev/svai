<?php
$arUrlRewrite=array (
  7 => 
  array (
    'CONDITION' => '#^/service/test/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/service/test/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/our_works/#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:catalog',
    'PATH' => '/our_works/detail.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/our_works/#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:news',
    'PATH' => '/detail.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/service/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/service/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/raboty/#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => 'bitrix:news',
    'PATH' => '/raboty/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/blog/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/blog/index.php',
    'SORT' => 100,
  ),
);
