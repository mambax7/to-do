<?php
// 引入檔頭
require_once 'header.php';
/************************自訂函數**************************/
// 表單
function post_form()
{
    global $content, $db, $smarty;

    // 加入預設值
    $content = [
        'title'      => '',
        'directions' => '',
        'end'        => date("Y-m-d", strtotime("+10 day")),
        'priority'   => '中',
        'assign'     => [],
        'done'       => 1,
    ];
    $next_op = 'insert_list';

    $smarty->assign('next_op', $next_op);
}
function list_all()
{
    global $content;
    $content[1]['directions'] = "撰寫程式";
    $content[1]['end']        = "2020/06/08";
    $content[2]['directions'] = "開會";
    $content[2]['end']        = "2020/06/10";
}
/********************流程判斷*********************/
// 變數過濾
$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op'], FILTER_SANITIZE_SPECIAL_CHARS) : "";

switch ($op) {
    case 'post_form':
        post_form();
        break;
    case 'insert_list':
        die(var_dump($_POST));
        break;
    default:
        //列出所有事項
        list_all();
        break;
}

// 引入頁尾
require_once 'footer.php';
