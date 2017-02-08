<?php
header("Content-Type:text/html;charset=utf-8");
/* 
	封装的操作
 */
 //抽象一个鸟类
 class Bird{
	 //成员属性
	protected $name = "百灵";   //封装一个成员属性
	 public $age = "30";
	 public $sex = "母";
	//成员方法         ，封装一个成员方法
	public function fly(){
		return $this->age."正在飞";
	}
 }
 //实例化一个对象
 $bailing = new Bird();
 $bailing -> age = 50;
 //调用成员属性
 echo $bailing -> fly();