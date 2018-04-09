<?php
return function ($request, $response, $service, $app) {
	$name='world'; //вместо этого может быть запрос или что угодно
    $service->render('views/hello.php', ['name'=>$name]);
};