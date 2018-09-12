<?php
class clsStudent
{
	public $age;                     // 测试成员
  private static $instance = null; // 创建静态对象变量,用于存储唯一的对象实例  
  private function __construct(){
echo 'gouzao';

  } // 私有化构造函数，防止外部调用
  private function __clone(){}     // 私有化克隆函数，防止外部克隆对象
  /**
   * 实例化对象方法，供外部获得唯一的对象
   */
  public static function getInstance(){
    # 只有第一次调用，才允许创建对象实例
    if (empty(self::$instance)) {
      self::$instance = new clsStudent();
    }
    return self::$instance;
  }

  
}


$stu1=clsStudent::getInstance();

$stu1->age='21';

echo $stu1->age;



$stu2=clsStudent::getInstance();

$stu2->age='25';

echo $stu2->age;

