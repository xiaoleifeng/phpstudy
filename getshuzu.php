<?php
$name=$_POST['name'];

$age=$_POST['age'];

$nameage=array_combine($name, $age);

foreach ($nameage as $key => $value) {
	# code...
	echo $key.$value;
}

//var_dump($a);