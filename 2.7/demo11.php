<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 封装的操作
 */
 //抽象一个鸟类
 class Bird{
	 //成员属性
	 public $name = "百灵";
	 public $age = "30";
	 public $sex = "母";
	 //成员方法
	 public function fly(){
		  return "正在飞";
	 }
 }
 class Bailing extends Bird{
	 //成员属性
	 public $home = "沙漠";
	 //成员方法
	 public function chi(){
		 return "正在吃";
	 }
 }
 class huibailing extends Bailing{
	 
 }
 //实例化
 $huibailing = new Huibailing();
 echo $huibailing ->name;
 echo $huibailing ->home;