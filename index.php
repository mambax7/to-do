<?php
// 引入檔頭
require_once 'header.php';
// var_dump($db);
/********************流程判斷*********************/
if ($op == 'post_form') {
    echo (var_dump($op));
} else {
    echo ("NO op");
}
// 引入頁尾
require_once 'footer.php';
