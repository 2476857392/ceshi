<?php
header("Content-Type:text/html;charset=utf-8");
/* 
	继承的操作
 */
 
 //抽象一个鸟类
 class Bird{
	 //成员属性
	 protected $name = "百灵";
	 public $age = 30;
	 public $sex = "女";
	 //成员方法
	 public function fly(){

		return "正在飞……";

	}

 }

class Bailing extends Bird{

	

}

class Dianke extends Bird{



}


//实例化一个对象
$bailing = new Bailing();
echo $bailing -> name;
echo $bailing -> fly();

echo "<hr/>";

//实例化一个对象
$dianke = new Dianke();
echo $dianke -> age;
echo $dianke -> fly();


