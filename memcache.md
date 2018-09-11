# 安装

安装时遇到can’t locate Test/more.pm 
使用 yum install perl-Test* 解决

# 连接服务器
添加服务器
$mem->addServer();
断开服务器:
$mem->close()

#另一种方式
$memcache->connect('localhost', 11211) or die ("Could not connect");

# 语法格式
set key flags exptime bytes [noreply] 
set keyname flag 

# 数据操作命令

add
replace
get
delete
set
increment
decrement
flush


set 
increment
decrement



memcache 存储session实现分布式系统<br>
[分布式系统]（https://www.cnblogs.com/kevingrace/p/6398672.html）
[负载均衡]



