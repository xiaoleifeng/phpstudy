<?php
//echo '21';
$redis=new Redis();

$redis->connect('127.0.0.1',6379);


$redis->delete('class1');

$f=$redis->lrange('class1',0,-1);

var_dump($f);

$redis->lpush('class1','A');
$redis->rpush('class1','B');
$redis->lpush('class1','C');
//CAB

$f=$redis->lrange('class1',0,-1);

var_dump($f);
echo '<br>';
//lindex

$s=$redis->lindex('class1',2);
echo $s;
echo '<br>';

$s=$redis->llen('class1');
echo $s;
echo '<br>';

$d=$redis->rpoplpush('class1','class2');
var_dump($d);

echo '<br>';

$f=$redis->lrange('class2',0,-1);

var_dump($f);
echo '<br>';


$e=$redis->rpushx('class3','ee');
var_dump($e);

echo '<br>';


$g=$redis->lget('class1',2);
var_dump($g);


//$redis->lpush('class1',array('1','2','3'));



