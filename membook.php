<?php
//练习memcache的功能
//把图书信息读取出来
$con = mysql_connect("122.114.239.230", "root", "ithinkso1");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }


  $memcache = new Memcache;             //创建一个memcache对象


//$memcache->connect('localhost', 11211) or die ("Could not connect"); //连接Memcached服务器
$memcache->addserver('localhost', 11211);

//点击后memcache中的count减1
//<1时不允许点击
//将数据库减1


//memlogin  
//用户登录后将用户信息存储到memcache中，实现分布式判断用户是否登录
