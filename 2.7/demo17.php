<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 继承的操作
 * @author gewen <821263167@qq.com>
 */
//抽象一个鸟类
class Bird{
	
	//成员属性
	protected $name = "百灵";
	public $age = 30;
	public $sex = "公";
	
	//成员方法
	public function fly(){
		return "正在飞";
	}
}
class Bailing extends Bird{
	//成员方法
	public function chi($name){
		$this ->name = $name;
		return $this ->name."正在吃";
	}
	
}	
//实例化一个对象
$bailing = new Bailing();
echo $bailing ->chi("鸟");