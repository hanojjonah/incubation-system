<?php 

$conn = mysqli_connect('localhost', 'Jonah', 'pass1234', 'incubation_system');

if(!$conn){
    die("Connection Failed" .mysqli_connect_error());
} else{
    echo "Connected successfuly";
}

?>