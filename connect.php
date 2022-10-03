<?php

// class connectDb {
//     private $host ="localhost";
//     private $user ="root";
//     private $password ='';
//     private $dbName='todolist';


//     function __construct(){
//         if(!isset($this->db)){
//             try{
//                 $conn = new PDO("mysql:host".$this->host.";dbname=".$this->dbName,$this->user,$this->password);
//                 $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
//                 $this->db =$conn;
//             }catch(PDOException $e){
//                 die("failed to connect with db:".$e->getMessage());
//             }
//         }
//     }
// }


$servername = "localhost";
$username = "root";
$password = "";
$database = "todolist";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

?>