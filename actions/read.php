<?php

if(empty($LOCALACCESS)){
    die('No direct acess allowed');
}

$table = 'users';

$query = "SELECT * FROM users";

$result = mysqli_query($conn, $query);

if($result){
    //Query worked
    if(mysqli_num_rows($result)>0){
        $output['success']=true;
        while($row = mysqli_fetch_assoc($result)){
            $output['data'][] = $row;
        }
    } else {
        $output['errors'][] = 'No data available';
    }
} else {
    //Query did not work
    $output['errors'][] = 'query failed';
}

?>