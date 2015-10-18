<?php

try {

    // Register an autoloader
    $loader = new \Phalcon\Loader();
    $loader->registerDirs(array(
        '../app/controllers/',
        '../app/models/'
    ))->register();

    // Create a DI
    $di = new Phalcon\DI\FactoryDefault();
	
	/*
	//	Подключение к базе данных
	*/
	$di->set('db', function(){
        return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
            "host" => "localhost",
            "username" => "root",
            "password" => "",
            "dbname" => "robots",
			'charset'   => 'utf8',
        ));
    });
    // Setting up the view component
    $di->set('view', function () {
        $view = new \Phalcon\Mvc\View();
        $view->setViewsDir('../app/views/');
        return $view;
    });
	
	/*
	//Создание маршрутизатора
	*/
	$di->set('router', function() {
     require __DIR__ . '/../app/routes.php';
     return $router;
	});
    // Handle the request
    $application = new \Phalcon\Mvc\Application($di);
	
    echo $application->handle()->getContent();

} catch (\Phalcon\Exception $e) {
     echo "PhalconException: ", $e->getMessage();
}