<?php

include_once './dbManage.php';

$select = new dbManage(new dbConnect());
$select->setQuery("Select * from book");

echo $select->execude();

print_r($select->getStm()->fetchAll(PDO::FETCH_ASSOC));
