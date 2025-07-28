<?php

try{
$host="localhost";
$db="TODO";
$user="root";
$password="";    
$connect=new PDO("mysql:host=$host;dbname=$db",$user,$password);
// exception اطلاق 
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "connect to DB";


}catch(PDOException $e){
    echo "error :".$e->getMessage();


}

?>