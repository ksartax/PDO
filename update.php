<?php

include_once './dbManage.php';

$update = new dbManage(new dbConnect());
$update
        ->setQuery("UPDATE book set imie=:imie where id=:id")
        ->setValue('id', '2')
        ->setValue('imie', "Update");

echo $update->execude();
