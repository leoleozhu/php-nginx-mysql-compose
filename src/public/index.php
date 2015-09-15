<?php
try{
$pdo = new \PDO(
    'mysql:host=192.168.99.101;dbname=demoDb',
    'demoUser',
    'demoPass'
);
var_dump("数据库服务器版本号信息：".$pdo->getAttribute(PDO::ATTR_SERVER_VERSION)); 
var_dump("与数据库特有的服务器信息：".$pdo->getAttribute(PDO::ATTR_SERVER_INFO)); 
var_dump("与连接状态相关的特有信息：".$pdo->getAttribute(PDO::ATTR_CONNECTION_STATUS));  
}
catch(PDOException $e){
die('Could not connect to the database:<br/>' . $e);
}



