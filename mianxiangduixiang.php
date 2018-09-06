<?php
header('Content-Type: text/html; charset=utf-8');
class user
{
	const pai=3.1415;
	public function sayname()
	{
		echo '1';
	}
	//构造方法直接传参数
	public function __construct($name)
	{
		$this->truename=$name;
		echo '这是构造方法';
	}
	public function __destruct()
	{
		echo '这是析构方法';
	}

	//设置属性
	public $truename='';

	public function saytruename()
	{
		echo $this->truename.'<br>';
	}


}

$a=new user('wangwei');
$a->sayname();
$a->saytruename();

echo $a::pai;


$a->truename='Kevin';

$a->saytruename();

unset($a);
