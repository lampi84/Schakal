<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/hello/:name', 'hello');

$app->run();


function hello($name){
    $db = getDB();
    echo "Yeha, " . $name;
    echo "DB: " . $db->getValue("test", "count(*)");
}





?>