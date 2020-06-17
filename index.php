<?php
// 引入檔頭
require_once 'header.php';
/************************自訂函數**************************/
function list_all()
{
    global $smarty;
    $content[1]['directions'] = "撰寫程式";
    $content[1]['end']        = "2020/06/08";
    $content[2]['directions'] = "開會";
    $content[2]['end']        = "2020/06/10";
    $smarty->assign('content', $content);
}
/********************流程判斷*********************/
// 變數過濾
$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op'], FILTER_SANITIZE_SPECIAL_CHARS) : "";

switch ($op) {
    case 'post_form':
        die($op);
        break;

    default:
        //列出所有事項
        list_all();
        break;
}

// 引入頁尾
require_once 'footer.php';
