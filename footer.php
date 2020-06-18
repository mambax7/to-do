<?php
$smarty->assign('page_title', _PAGE_TITLE);
$smarty->assign('header', _PAGE_HEADER);
$smarty->assign('op', $op);
$smarty->assign('content', $content);
// 取得目前網址
$smarty->assign('action', $_SERVER['PHP_SELF']);
// 輸出到樣板檔
$smarty->display('index.tpl');
