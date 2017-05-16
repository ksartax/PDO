<?php

include_once './dbManage.php';

$insert = new dbManage(new dbConnect());
$insert
        ->setQuery("INSERT INTO book values (null, :imie, :nazwisko)")
        ->setValue('imie', 'test')
        ->setValue('nazwisko', 'dziaal');

echo $insert->execude();


