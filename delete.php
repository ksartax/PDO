<?php

include_once './dbManage.php';

$delete = new dbManage(new dbConnect());
$delete
        ->setQuery("DELETE from book where id=:id")
        ->setValue('id', '1');

echo $delete->execude();
