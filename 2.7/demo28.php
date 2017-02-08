<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 类的相关的操作
 * @author gewen <821263167@qq.com>
 */
 abstract class Zoo{
	 abstract function fly();
	 abstract function pa();
 }
 interface Dog{
	 public function chi();
 }
 interface Pig{
	 public function shui();
 }
 class Bird extends zoo implements Dog,Pig{
	 //重写两个方法
	 public function fly(){
		 
	 }
	 public function pa(){
		 
	 }
	 public function chi(){
		 
	 }
	 public function shui(){
		 
	 }
 }