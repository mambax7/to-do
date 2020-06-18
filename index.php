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

    $smarty->assign('next_op', $next_op);
}
//新增清單
function add()
{
    global $db;
    error();
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

// 列出所有
function list_all()
{
    global $db, $smarty, $content;

    $sql = "select * from `list` order by end";
    if (!$result = $db->query($sql)) {
        die(error($db->error, ""));
    }

    $content = [];
    // 法一
    while ($data = $result->fetch_assoc()) {
        $content[] = $data;
    }
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
