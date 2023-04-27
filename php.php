<?php


$con = mysqli_connect('localhost', 'root', '', 'user');

function setmes($name, $text){
  global $con ;
  return $qeri = mysqli_query($con, "INSERT INTO text (name, text) VALUES ('$name', '$text')");
}



function getmes(){
  global $con;
  return $mas = mysqli_fetch_all( mysqli_query($con, "SELECT * FROM text ORDER BY id"), MYSQLI_ASSOC);
}



?>