<?php
$redis = new Redis();
   $redis->connect('127.0.0.1', 6379);

  $redis->set("name", "leiguoliang");

  $name=$redis->get('name');

  echo $name;

  $age=$redis->get('age');
  var_dump($age);

  echo ('<br>');

  $ageisexist=$redis->exists('age');
  var_dump($ageisexist);

echo ('<br>');
  $ageisexist=$redis->exists('name');
  var_dump($ageisexist);

//设置key过期时间

  $redis->set('class','yiban');
  $class=$redis->get('class');
  echo $class;
  $redis->pexpire('class',3000);


  $redis->set('db1','redis');
  $redis->set('db2','memcache');
  $redis->set('db3','mongo');
  $redis->set('name','leiguoliang');

  $dbs=$redis->keys('db*');
var_dump($dbs);
