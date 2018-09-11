<?php
$redis=new Redis();

$redis->connect('127.0.0.1',6379);

$stu1=array('name'=>'guoliang','age'=>'20');
$redis->hmSet('stu2',$stu1);

$redis->hSet('stu1', 'key1', 'hello');

$stu1=$redis->hgetall('stu');

$stu2=$redis->hgetall('stu2');

var_dump($stu2);

echo '<br>';
echo '2222222';

$f=$redis->hGet('stu1','key1');


$redis->hincrby('stu2','age','2');

$f=$redis->hGet('stu2','age');


var_dump($f);



