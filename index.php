<?php

require 'vendor/autoload.php';


$app = new \Slim\Slim();
$app->get('/hello/:name', function ($name) {
    echo "Yeha, " . $name;
});
$app->run();

/* this is a comment */

?>