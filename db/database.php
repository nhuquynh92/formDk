<?php
class database
{

public function connectDB(){
$servername = 'localhost';
$username = 'root';
$passwd = '';
try{
$conn = new PDO("mysql:host=$servername;dbname=formdangky" , $username , $passwd);
$conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
return $conn;
}catch (PDOException $e){
echo "Connected fails: " . $e->getMessage();
}
}

}
?>