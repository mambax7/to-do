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
function error($message = [], $refresh = 1)
{
    global $smarty;
    // die(var_dump($_POST));
    if (empty($message)) {
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

        if (empty($_POST['assign'])) {
            $message[] = '至少指派一名';
        }

        if (!checkDateIsValid($_POST['end'])) {
            $message[] = '到期日的日期格式需為西元 YYYY-mm-dd 或 YYYY/mm/dd';
        }

    }

    $smarty->assign('page_title', '錯誤提示頁');
    $smarty->assign('message', $message);
    $smarty->assign('refresh', $refresh);
    $smarty->display('templates/error.tpl');
    exit();
}

// 判斷日期格式是否正確
function checkDateIsValid($date, $formats = array("Y-m-d", "Y/m/d"))
{
    $unixTime = strtotime($date);
    if (!$unixTime) {
        return false;
    }
    foreach ($formats as $format) {
        if (date($format, $unixTime) == $date) {
            return true;
        }
    }

    return false;
}
