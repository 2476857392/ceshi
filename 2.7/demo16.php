<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * �̳еĲ���
 * @author gewen <821263167@qq.com>
 */
//����һ������
class Bird{
	//��Ա����
	protected $name = "����";
	public $age= 30;
	public $sex = "��";
	
	//��Ա����
	public function fly(){
		return "���ڷ�";
	}
}
class Bailing extends Bird{
	//��Ա����
	public function chi($name){
		$this -> name = $name;
		return $this->name."���ڳ�";
	} 
	
}
//ʵ����һ������
$bailing = new Bailing();

echo $bailing -> chi("��");