<?php
class stu
{
	public static $number=0;
	public function __construct()
	{
		self::$number+=1;
	}

	public function __destruct()
	{
		self::$number--;
	}



}


$f=new stu();

echo stu::$number;

$d=new stu();

echo stu::$number;

unset($f);

echo stu::$number;