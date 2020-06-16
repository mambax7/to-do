<?php
//常數設定
define('_DB_LOCATION', 'localhost');
define('_DB_ID', 'root');
define('_DB_PASS', '12345');
define('_DB_NAME', 'todo');

// 引入Smarty
require_once 'smarty/libs/Smarty.class.php';

// 創建Smarty物件
$smarty = new Smarty;
//實體化資料庫物件
$mysqli = new mysqli(_DB_LOCATION, _DB_ID, _DB_PASS, _DB_NAME);
if ($mysqli->connect_error) {
    throw new Exception('無法連上資料庫：' . $mysqli->connect_error);
}
$mysqli->set_charset("utf8");
// die(var_dump($mysqli));

// 一般變數
$title  = '待辦清單';
$header = '我的待辦清單';
$smarty->assign('title', $title);
$smarty->assign('header', $header);

// 一維陣列
$navbar = ['home' => "回首頁", 'post' => "發布待辦事項"];
$smarty->assign('navbar', $navbar);

// 二維陣列
$content = array(
    "1" => array('directions' => "撰寫程式", 'end' => "2020/06/08"), //用逗號結尾
    "2" => array('directions' => "開會", 'end' => "2020/06/10"),
);
$smarty->assign('content', $content);
// 輸出到樣板檔
$smarty->display('index.tpl');
