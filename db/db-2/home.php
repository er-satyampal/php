<?php

include_once('init.php');

$sth = $connection->prepare("SELECT * FROM students");
$sth->setFetchMode(PDO:: FETCH_OBJ);
$sth->execute();


while($row = $sth->fetch()){
echo $row->name."<br/>";
}

?>