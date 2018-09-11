<?php
$redis = new Redis();
   $redis->connect('127.0.0.1', 6379);

  $redis->set("name", "leiguoliang");

  $name=$redis->get('name');
  echo $name;

  echo '<br>';

  $name2=$redis->getrange('name',1,3);
  echo $name2;

  $len=$redis->strlen('name');
  echo $len;

  $ar=array('name1'=>'lei','name2'=>'li','name3'=>'zhang');

  $redis->mset($ar);
  $f=$redis->keys('name*');
  var_dump($f);

   echo '<br>';

  $a=$redis->get('name1');

var_dump($a);

  echo '<br>';

  $redis->select(0);	// switch to DB 0
$redis->set('x', '42');	// write 42 to x
$redis->move('x', 1);	// move to DB 1
//$redis->select(1);	// switch to DB 1
$a=$redis->get('x');

var_dump($a);

$a=$redis->get('name1');

var_dump($a);

//incr

$age=$redis->setnx('age',1);

echo $age;
echo '<br>';


$nowage=$redis->incrBy('age', 10);

echo $nowage;
echo '<br>';

$f=

$a=array('name1','name8');
$f=$redis->mget($a);
echo $f[0];
echo '<br>';
var_dump($f);

