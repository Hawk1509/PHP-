<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "mydatabase";
// Create connection   
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection 
if(!$conn){
    echo "Error: Unable to connect to MySQL." . PHP_EOL;

}
else{
    $sql = "CREATE database mydb";
    if(mysqli_query($conn, $sql))
        $sql = "CREATE TABLE test(id int(6) unsigned auto_increment primary key, firstname varchar(30), not null,lastname varchar(30) not null";
        echo "Table Created Successfully!" 
}
$conn->close();
?>