<?php 

class RobotsController extends \Phalcon\Mvc\Controller{
	
    public static $request;
	
	/*
	//Вывод информации о роботе
	*/
	private function printInfo($robot){ 
	
		echo '<br>Id робота: '.$robot->id.'</br>';
		echo 'Имя робота: '.$robot->name.'</br>';
		echo 'Тип робота: '.$robot->type.'</br>';
		echo 'Год робота: '.$robot->year.'</br>';
		
	}
	
	/*
	//Получение всех записей из таблицы Robots
	*/
	public function allAction(){
		
		$robots = Robots::find();
		
		foreach ($robots as $robot){
			$this->printInfo($robot);
		}
	}
	
	/*
	//Поиск по имени, LIMIT 0,1
	*/
	public function searchAction($name){
		
		$robot = Robots::findFirst(
			array(
			"conditions" => "name = '$name'"
			)
		);
			$this->printInfo($robot);
	}
	
	/*
	//Показать робота по ID
	*/	
	public function showAction($id){
		
		$robot = Robots::findFirst($id);
			$this->printInfo($robot);
	}
	
	/*
	//Добавление робота
	*/		
	public function addAction(){
		
		$this->request = new \Phalcon\Http\Request();
		
		if ($this->request->isPost()) {
			$robot        = new Robots();
			$data 		  = $this->request->getJsonRawBody();
			$robot->type  = $data->type;
			$robot->name  = $data->name;
			$robot->year  = $data->year;

			if ($robot->save() == false) {
				echo "Ошибка";
				foreach ($robot->getMessages() as $message) {
					echo $message, "\n";
				}
			} 
			else {
				echo "Робот сохранен";
				$this->printInfo($robot);
			}
		}
	}
	
	/*
	//Обновление записи
	*/		
	public function updateAction($id){
		
		$this->request = new \Phalcon\Http\Request();
		
		$data = $this->request->getJsonRawBody();
		
		$robot  = Robots::findFirst($id);
		
		$robot->name = $data->name;
		$robot->type = $data->type;
		$robot->year = $data->year;
		$robot->save();		
		
		echo 'Робот с ID:'.$id.' успешно обновлен';
	}
	
	/*
	//Удаление робота по ID
	*/	
	public function deleteAction($id){
		
		$robot = Robots::findFirst($id);
		
		if(empty($robot))
			echo 'Робот с таким id не найден';
		
		else {
			$robot->delete();
			echo 'Робот с ID:'.$id.' успешно удален';
		}
	}
}