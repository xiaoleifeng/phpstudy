<?php
$a=array('red','blue','yellow');

echo count($a);

echo '<br>';

echo $a[0];

//关联数组

$aguanlian=array('stu1'=>'lei','stu2'=>'wang','stu3'=>'zhang');

echo count($aguanlian);

echo '<br>';

var_dump($aguanlian['stu1']);

echo '<br>';

//遍历关联数组

foreach ($aguanlian as $key => $value) {
	# code...
	echo $key.'='.$value;
}

echo '<br>';

//同时提交多个数据的数组

//计算数组里值的个数
$a=array("A","Cat","Dog","A","Dog");
$b=array_count_values($a);

echo $b['A'];


