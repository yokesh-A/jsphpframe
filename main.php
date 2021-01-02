<?php

$base_url='/';

$request = explode($base_url,$_SERVER['REQUEST_URI']);

$page =  explode('?',$request[2]);

if(!empty($page[0])){
    if(file_exists('app/'.$page[0].'.php'))
    include 'app/'.$page[0].'.php';
    else
    include 'app/404.php';
}else{
    include 'app/index.php';
}

?>