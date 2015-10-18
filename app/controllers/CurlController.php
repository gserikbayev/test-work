<?php 
/*
// Имитация curl запроса
*/
class CurlController extends \Phalcon\Mvc\Controller{
	
	private $url = 'http://localhost'; 
	/*
	//Curl запрос для  добавления
	*/	
	public function addAction(){
		
		$data = '{"name":"Название робота","type":"Тип робота","year":2013}';//Впишите сюда Ваш массив
		$ch = curl_init(); 
	    curl_setopt($ch, CURLOPT_URL, $this->url .'/api/robots'); 
		curl_setopt($ch, CURLOPT_HEADER, false); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_POST, true); 
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); 
		$data = curl_exec($ch); 
		curl_close($ch); 
		print_r($data);
		
	}
	
	/*
	//Curl запрос для обновления
	*/	
	public function updateAction(){
		
		$id = 16; //Впишите сюда id робота
		$data = '{"name":"Название робота","type":"Тип робота","year":2014}';//Впишите сюда Ваш массив
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, $this->url .'/api/robots/'.$id); 
		curl_setopt($ch, CURLOPT_HEADER, false); 
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); 
		$result = curl_exec($ch); 
		curl_close($ch); 
		print_r($result);
		
	}
	
	/*
	//Curl запрос для  удаления
	*/	
	public function deleteAction(){
		
		$id = 13; //Впишите сюда id робота
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, $this->url .'/api/robots/'.$id); 
		curl_setopt($ch, CURLOPT_HEADER, false); 
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); 
		$result = curl_exec($ch); 
		curl_close($ch); 
		print_r($result);
		
	}
}