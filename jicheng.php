<?php
header('string');
class goods
{

	public $tiji=0;
	public $weight=0;

	public function __construct($tiji=0,$zhongliang=0)
	{
		$this->tiji=$tiji;
		$this->weight=$zhongliang;
	}

	public function jisuantiji(){
		return $this->tiji*$this->weight;
	}
	public function jisuanweight(){
		return $this->tiji-$this->weight;
	}
}

class book extends goods
{
	public $chubanshe='';
	public function printchubanshe()
	{
		echo $this->chubanshe;
	}
}

$mianbao=new goods(2,3);

$zhaohuaxishi=new book(5,6);

$zhaohuaxishi->chubanshe='BEIJING CHUBANSHE';

echo $zhaohuaxishi->jisuantiji();

echo $zhaohuaxishi->printchubanshe();


var_dump($zhaohuaxishi instanceof book);

var_dump($zhaohuaxishi instanceof goods);



echo $mianbao->jisuantiji();

echo $mianbao->jisuanweight();


