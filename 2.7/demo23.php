<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * ������Ĳ���
 * @author gewen <821263167@qq.com>
 */
 abstract class Bird{
	 //��Ա����
	 public $name = "С�ڰ�";
	 //��Ա����
	 public function fly(){
		 return "���ڷ�";
	 }
	 //���󷽷�������û�з�����ģ���������������д�������
	 abstract function chi();
 }
 class Bailing extends Bird{
	 //�������б��������д
	 public function chi(){
		 
	 }
 }
 //ʵ����
 $bailing = new Bailing();
 echo $Bailing ->name;