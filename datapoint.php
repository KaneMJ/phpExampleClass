<?php

$LOCALACCESS = true;

require_once 'mysql_connect.php';

if(empty($_GET['action'])){
    $_GET['action']='read';
}
$output = [
    'success'=>false,
    'errors'=>[],
    'data'=>[]
];

switch($_GET['action']){
    case 'read':
        include('actions/read.php');
        break;
    case 'create':
        include('actions/create.php');
        break;
    case 'update':
        include('actions/update.php');
        break;
    case 'delete':
        include('actions/delete.php');
        break;
}

$json_output = json_encode($output);

print($json_output);

?>