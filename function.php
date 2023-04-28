<?php

function get_connectio(){
  return  mysqli_connect('localhost', 'root', '', 'user');
}



function setmes($name, $text){
  return mysqli_query(get_connectio(), "INSERT INTO text (name, text) VALUES ('$name', '$text')");
}



function getmes(){
  return mysqli_fetch_all( mysqli_query(get_connectio(), "SELECT * FROM text ORDER BY id"), MYSQLI_ASSOC);
}



?>