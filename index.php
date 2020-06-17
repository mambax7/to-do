<?php
// 引入檔頭
require_once 'header.php';
// var_dump($db);
// 一般變數
$title  = '待辦清單';
$header = '我的待辦清單';
$smarty->assign('title', $title);
$smarty->assign('header', $header);

// 一維陣列
$navbar = ['home' => "回首頁", 'post' => "發布待辦事項"];
$smarty->assign('navbar', $navbar);
$smarty->assign('content', array());
// 輸出到樣板檔
$smarty->display('index.tpl');
