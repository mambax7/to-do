<?php
//常數設定
define('_DB_LOCATION', 'localhost');
define('_DB_ID', 'root');
define('_DB_PASS', '12345');
define('_DB_NAME', 'todo');
define('_PAGE_TITLE', '待辦清單');
define('_PAGE_HEADER', '我的待辦清單');

// 引入function.php
require_once 'function.php';
// 引入Smarty
require_once 'smarty/libs/Smarty.class.php';
// 創建Smarty物件
$smarty = new Smarty;
//資料庫連線
$db = link_db();

// 一維陣列
$navbar = ['home' => "回首頁", 'post' => "發布待辦事項"];
$smarty->assign('navbar', $navbar);

// 變數
$content = [];
$op      = '';
