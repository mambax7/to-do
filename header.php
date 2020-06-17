<?php
//常數設定
define('_DB_LOCATION', 'localhost');
define('_DB_ID', 'root');
define('_DB_PASS', '12345');
define('_DB_NAME', 'todo');

// 引入function.php
require_once 'function.php';
// 引入Smarty
require_once 'smarty/libs/Smarty.class.php';
// 創建Smarty物件
$smarty = new Smarty;
//資料庫連線
$db = link_db();
