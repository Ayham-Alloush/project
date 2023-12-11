<?php 
// $con = mysql_connect("localhost","root","") ;
// if (!$con) {die ("could not connect :".mysql_error())} ;
// if(mysql_quert("create database db",$con)) {echo "DataBase Created"} ;
// else echo "couldn't create the DataBase" ;

$con = mysqli_connect("localhost", "root", "");

if (!$con) {
    die("Could not connect: " . mysqli_connect_error());
}

if (mysqli_query($con, "CREATE DATABASE db")) {
    echo "Database Created";
} else {
    echo "Couldn't create the Database: " . mysqli_error($con);
}





?>