<?php 
    define('BASE_PATH', __DIR__);

    $action = $_GET['action'] ?? '';
    $action = explode('/', $action);
    $controller = $action[0] ?? '';
    $function = $action[1] ?? '';

    $controllerName = ucfirst($controller) . 'Controller';
    $controllerPath = BASE_PATH . '/app/Controllers/' . $controllerName . '.php';
    // var_dump($controllerPath); // Debugging line to check the path

    if (file_exists($controllerPath)) {
        require_once $controllerPath;
        if (class_exists($controllerName)) {
            $obj = new $controllerName();

            if (method_exists($obj, $function)) { 
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $obj->$function($_POST);  
                } else {
                    $obj->$function();  
                }
            } else {
                echo "Method $function tidak ditemukan.";
            }
        } else {
            echo "Class $controllerName tidak ditemukan.";
        }
    }else {
        echo "Controller $controllerName tidak ditemukan.";
    }