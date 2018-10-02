<?php

/*if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    // Если к нам идёт Ajax запрос, то ловим его
    echo 'Done';
    exit;
}
//Если это не ajax запрос
echo 'False';*/

var_dump($_POST);


require_once 'create.php';

/*if(isset($_POST)) {
   echo 'Done';
}*/


$data=$_POST;

$path=$data['path'];
switch ($path){
    case 'create':
        $count=$data['value'];
        $create = new Create(1);
        echo 'Done';

}



