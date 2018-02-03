<?php
require_once "vendor/autoload.php";
// https://vk.com/doc10903696_208805128?hash=ca3a558dbc4ad29d3f&dl=ec6195707f8368caf8
$str = 'hello visit my web site http://onliner.by https://tut.by https://ya.ru';
// echo preg_replace('@((?:ht|f)tps?://([^.]+)\.\w+)@', '<a href="$1">$2</a>', $str, -1, $c);
$result = preg_match_all('@((?:ht|f)tps?://([^.]+)\.\w+)@', $str, $m, PREG_OFFSET_CAPTURE|PREG_SET_ORDER);
dump($m);
// dump($c);
/*$re = '/php ?[57]/u';
$str = 'i like php 5';
preg_match($re, $str, $m);*/

