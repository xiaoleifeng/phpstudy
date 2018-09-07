<?php
function __autoload($class_name)
{
	echo $class_name;
	require_once($class_name.'.class.php');
}

$b=new Book;