<?php
// 引入檔頭
require_once 'header.php';
// var_dump($db);
/********************流程判斷*********************/
// 變數
$content = [];
$op      = isset($_REQUEST['op']) ? $_REQUEST['op'] : "";

//if判斷
// if ($op == 'post_form') {
//     echo (var_dump($op));
// } else {
//     echo ("NO op");
// }

// switch判斷
switch ($op) {
    case 'post_form':
        echo (var_dump($op));
        break;

    default:
        echo ("NO op");
        break;
}

// 引入頁尾
require_once 'footer.php';
