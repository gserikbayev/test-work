<?php 

class NewController extends \Phalcon\Mvc\Controller{
	
	public function robotsAction(){
		
		$robots = Robots::find();//Получение всех записей из таблицы Robots
		
		foreach ($robots as $robot){
			echo '<br>Id робота: '.$robot->id.'</br>';
			echo 'Имя робота: '.$robot->name.'</br>';
			echo 'Тип робота: '.$robot->type.'</br>';
			echo 'Год робота: '.$robot->year.'</br>';
		}
	}
	public function searchAction($name){
		$robot = Robots::findFirst(
			array(
			"conditions" => "name = '$name'"
			)
		);
			echo '<br>Id робота: '.$robot->id.'</br>';
			echo 'Имя робота: '.$robot->name.'</br>';
			echo 'Тип робота: '.$robot->type.'</br>';
			echo 'Год робота: '.$robot->year.'</br>';
	}
	public function showAction($i){
		$robot = Robots::findFirst($id);
			echo '<br>Id робота: '.$robot->id.'</br>';
			echo 'Имя робота: '.$robot->name.'</br>';
			echo 'Тип робота: '.$robot->type.'</br>';
			echo 'Год робота: '.$robot->year.'</br>';
	}
}