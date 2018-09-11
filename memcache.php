
<?php
$memcache = new Memcache;             //创建一个memcache对象


//$memcache->connect('localhost', 11211) or die ("Could not connect"); //连接Memcached服务器
$memcache->addserver('localhost', 11211);

$memcache->set('key', 'test');        //设置一个变量到内存中，名称是key 值是test
$get_value = $memcache->get('key');   //从内存中取出key的值
var_dump( $get_value);


$usrcount=$memcache->get('usrcount');

if(!$usrcount)
{
	$memcache->set('usrcount',1);
}
else
{
	$memcache->increment('usrcount');
}

$usrcount=$memcache->get('usrcount');

echo $usrcount;

$get_value =$memcache->delete('key');

var_dump($get_value);

$get_value =$memcache->get('key22');

var_dump($get_value);

$memcache->flush();

echo $usrcount;




?>