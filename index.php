<?php
$app = new Application();
$app->router->get('/', function(){
    return 'Welocme page';
});

$app->run();
