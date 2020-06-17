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
