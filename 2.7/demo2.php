<?php
header("Content-Type:text/html;charset=utf-8");
/* 
	封装的操作
	
 */
 //抽象一个鸟类
 class Bird{
	 //成员属性
	 public $name = "百灵";
	 public $age = "30";
	 public $sex = "公";
	 //成员方法
	 public function fly(){
		 return "正在飞";
	 }
 }
 //实例化一个对像
 $bailing = new Bird();
 //调用成员属性
 echo $bailing -> name;