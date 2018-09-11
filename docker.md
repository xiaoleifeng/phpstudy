# docker的用法

# 基本命令
https://yq.aliyun.com/articles/336442

# 安装docker
https://help.aliyun.com/document_detail/60742.html

https://www.cnblogs.com/zlgxzswjy/p/6551578.html

https://blog.csdn.net/pushiqiang/article/details/78682323


docker run  --restart=always \
  -p 3311:3306  \
  -v /data/project/mysql-slave/data/:/var/lib/mysql  \
  -v /data/project/mysql-slave/conf:/etc/mysql/conf.d \
  -v /data/project/mysql-slave/logs:/var/log/mysql \
  -e MYSQL_ROOT_PASSWORD=123456 \
  --privileged=true \
  --name mysql-slave \
  -d mysql:5.6

