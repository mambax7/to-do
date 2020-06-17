<?php
$smarty->assign('title', _PAGE_TITLE);
$smarty->assign('header', _PAGE_HEADER);
$smarty->assign('op', $op);
$smarty->assign('content', $content);
// 輸出到樣板檔
$smarty->display('index.tpl');
