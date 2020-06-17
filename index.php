<?php
// 引入檔頭
require_once 'header.php';
// var_dump($db);
/********************流程判斷*********************/
// 變數
$content = [];
// $op      = isset($_REQUEST['op']) ? $_REQUEST['op'] : "";
$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op'], FILTER_SANITIZE_SPECIAL_CHARS) : "";
//if判斷
// if ($op == 'post_form') {
//     die($op);
// } else {
//     die($op);
// }

// switch判斷
switch ($op) {
    case 'post_form':
        die($op);
        break;

    default:
        die($op);
        break;
}

// 引入頁尾
require_once 'footer.php';
