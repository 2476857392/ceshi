<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * ��װ�Ĳ���
 */
 //����һ������
 class Bird{
	 //��Ա����
	 public $name = "����";
	 public $age = "30";
	 public $sex = "��";
	//��Ա����
	public function fly(){
		return "���ڷ�";
	}
	//����˽�еĳ�Ա����
	/* public function getName(){
		return $this ->name;
	} */
	//�޸�˽�г�Ա���Ե�ֵ
/* 	public function setName($name){
		//$this ->name = $name;
		
	} */
	//ȡ��˽�г�Ա����
	public function __get($name){
		//����������Ʒ��ʵ�����
		if($name == "name"){
			return $this->$name;
		}
	}


	//�޸�˽�г�Ա����
	public function __set($name,$value){

		//����������Ʒ��ʵ�����
		if($name == "name"){
			$this->$name = $value;
		}

	}
 //�ж�һ�������Ƿ����
 public function __isset($k){
	 return isset($this->$k);
 }
 //ע����Ա����
 public function __unset($k){
	 unset($this -> $k);
 }
 }
 //ʵ����һ������
 $bailing = new Bird();
 var_dump(isset($bailing ->name));