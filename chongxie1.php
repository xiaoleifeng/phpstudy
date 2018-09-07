<?php
//商品
class Goods {
	public $goods_name = 'ITCAST';//名字
	public $goods_price;//商品价格

	public function __construct($name, $price) {
		$this->goods_name = $name;
		$this->goods_price = $price;
	}
}

class Book extends Goods {

	public $goods_name = 'BOOKNAME';//名字
	public $author;//作者
	public $publisher;//出版社

	public function __construct($author, $publisher, $name, $price) {
		//父类构造方法
		parent::__construct($name, $price);
		$this->author = $author;
		$this->publisher = $publisher;
	}

	public function sayPrice() {
		echo '￥', $this->goods_price;
	}
}

$b1 = new Book('AUTHOR', 'CHUBANSHE', 'PHP', 1234.56);
var_dump($b1);

echo '<hr>';
class A {
	public static function in_a() {
		//var_dump($this);
		echo '2222';
	}
}


class B {
	public function in_b() {
		var_dump($this);
		echo '<br>';
		A::in_a();
	}
}

$o = new B;
$o->in_b();
