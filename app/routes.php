<?php

		$router = new \Phalcon\Mvc\Router();
		/*
		//Маршрут для котроллера robots
		*/
		$robots = new \Phalcon\Mvc\Router\Group(array(
			'controller' => 'robots'
		));
		
		$robots->setPrefix('/api'); 
		
		$robots->addGet('/robots', array(
			'action' => 'all'
		));

		$robots->addGet('/robots/search/{name}', array(
			'action' => 'search'
		));
		 
		$robots->add('/robots/{id}', array(
			'action' => 'show'
		)); 
		$robots->addPost('/robots', array(
			'action' => 'add'
		));
		$robots->add('/robots/{id}','robots::update')->via(array("POST", "PUT"));
		
		$robots->add('/robots/{id}','robots::delete')->via(array("POST", "DELETE"));
		
		$router->mount($robots); 
		
		/*
		// Маршрут для котроллера curl
		*/
		$curl = new \Phalcon\Mvc\Router\Group(array(
			'controller' => 'curl'
		));

		$curl->setPrefix('/curl');

		$curl->add('/add', array(
			'action' => 'add'
		));
		
		$curl->add('/delete', array(
			'action' => 'delete'
		));
		
		$curl->add('/update', array(
			'action' => 'update'
		));
		
		$router->mount($curl); 
		
		return $router;