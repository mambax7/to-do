<?php
// 引入Smarty
require_once 'smarty/libs/Smarty.class.php';
// 創建Smarty物件
$smarty = new Smarty;

// 一般變數
$title  = '待辦清單';
$header = '我的待辦清單';
$smarty->assign('title', $title);
$smarty->assign('header', $header);

// 一維陣列
$navbar = ['home' => "回首頁", 'post' => "發布待辦事項"];
// $navbar['home'] = "回首頁";
// $navbar['post'] = "發布待辦事項";
$smarty->assign('navbar', $navbar);

// 二維陣列
$content = array(
    "1" => array('directions' => "撰寫程式", 'end' => "2020/06/08"), //用逗號結尾
    "2" => array('directions' => "開會", 'end' => "2020/06/10"),
);
// print_r($content);
// $content[1]['directions'] = "撰寫程式";
// $content[1]['end']        = "2020/06/08";
// $content[2]['directions'] = "開會";
// $content[2]['end']        = "2020/06/10";
// print_r($content);
$smarty->assign('content', $content);
// 輸出到樣板檔
$smarty->display('index.tpl');
