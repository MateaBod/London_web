<?php

$mysqli = new mysqli('localhost','mb4407','Infestivity1=condottiere','mb4407');

if(mysqli_connect_errno()){

    echo 'connection has failed : ' .mysqli_connect_error();
    exit();
}else{

    echo 'connection good';

}

?>