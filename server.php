<?php 

require_once __DIR__ . '/database.php';

$discs = $database;

header("Content-type: application/json;charset=utf-8");
echo json_encode($discs);