<?php
function link_db()
{
    //實體化資料庫物件
    $mysqli = new mysqli(_DB_LOCATION, _DB_ID, _DB_PASS, _DB_NAME);
    if ($mysqli->connect_error) {
        throw new Exception('無法連上資料庫：' . $mysqli->connect_error);
    }
    $mysqli->set_charset("utf8");
    return $mysqli;
}

//失敗返回
function error()
{
    global $smarty;
    // die(var_dump($_POST));
    $message = [];
    if (empty($_POST['tilte'])) {
        $message[] = '標題必填';
    }
    if (empty($_POST['directions'])) {
        $message[] = '描述必填';
    }
    if (empty($_POST['end'])) {
        $message[] = '到期日必填';
    }
    $smarty->assign('title', '錯誤提示頁');
    $smarty->assign('message', $message);
    $smarty->display('templates/error.tpl');
    exit();
}
