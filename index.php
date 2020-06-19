<?php
// 引入檔頭
require_once 'header.php';
/************************自訂函數**************************/
// 表單
function post_form()
{
    global $content, $db, $smarty;
    if (isset($_POST['send'])) {
        if (isset($_POST['next_op'])) {
            if ($_POST['next_op'] == "add") {
                $sn       = add();
                $_message = empty($_sn) ? "新增失敗" : "新增成功!";
            }
        }
        header("location: index.php?sn={$sn}");
    }

    // 編輯
    if (isset($_GET['sn'])) {

        $next_op = 'update';
    } else {
        // 加入預設值
        $content = [
            'title'      => '',
            'directions' => '',
            'end'        => date("Y-m-d", strtotime("+10 day")),
            'priority'   => '中',
            'assign'     => [],
            'done'       => 0,
        ];
        $next_op = 'add';
    }

    $smarty->assign('next_op', $next_op);
}
//新增清單
function add()
{
    global $db;
    check_error();
    //過濾變數
    $title      = $db->real_escape_string($_POST['title']);
    $directions = $db->real_escape_string($_POST['directions']);
    $end        = $db->real_escape_string($_POST['end']);
    $priority   = $db->real_escape_string($_POST['priority']);
    $assign     = $db->real_escape_string(implode(';', $_POST['assign']));
    $done       = (int) $_POST['done'];

    // 連線資料庫
    $sql = "INSERT INTO `list` ( `title`, `directions`, `end`, `priority`, `assign`, `done`,`create_time`,`update_time`)
    VALUES ('{$title}', '{$directions}', '{$end}', '{$priority}', '{$assign}', '{$done}',now(),now())";

    $db->query($sql) or die($db->error);

    $sn = $db->insert_id;
    return $sn;
}

// 驗證欄位正確性
function check_error()
{
    $message = [];
    if (empty($_POST['title'])) {
        $message[] = '標題必填';
    }
    if (empty($_POST['directions'])) {
        $message[] = '描述必填';
    }
    if (empty($_POST['end'])) {
        $message[] = '到期日必填';
    }

    if (empty($_POST['assign'])) {
        $message[] = '至少指派一名';
    }

    if (!checkDateIsValid($_POST['end'])) {
        $message[] = '到期日的日期格式需為西元 YYYY-mm-dd 或 YYYY/mm/dd';
    }
    if (!empty($message)) {
        error($message, 1);
        exit();
    }
}
// 列出所有
function list_all()
{
    global $db, $smarty, $content;

    $sql = "select * from `list` order by priority,end";
    if (!$result = $db->query($sql)) {
        die(error($db->error));
    }

    $content = [];
    $i       = 0;
    while (list($sn, $title, $directions, $end, $priority, $assign, $done, $create_time, $update_time) = $result->fetch_row()) {

        //過濾變數
        $title      = filter_var($title, FILTER_SANITIZE_SPECIAL_CHARS);
        $directions = filter_var($directions, FILTER_SANITIZE_SPECIAL_CHARS);
        $priority   = filter_var($priority, FILTER_SANITIZE_SPECIAL_CHARS);

        $content[$i]['sn']          = $sn;
        $content[$i]['title']       = $title;
        $content[$i]['directions']  = $directions;
        $content[$i]['end']         = $end;
        $content[$i]['priority']    = $priority;
        $content[$i]['assign']      = $assign;
        $content[$i]['done']        = $done;
        $content[$i]['create_time'] = $create_time;
        $content[$i]['update_time'] = $update_time;
        $i++;
    }
    // die(var_dump($content));
}
/********************流程判斷*********************/
// 變數過濾
$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op'], FILTER_SANITIZE_SPECIAL_CHARS) : "";

switch ($op) {
    case 'post_form':
        post_form();
        break;
    default:
        //列出所有事項
        list_all();
        break;
}

// 引入頁尾
require_once 'footer.php';
