<?php
    require_once('sql.php');

    $jsonstr = json_encode($records,JSON_UNESCAPED_UNICODE);//json形式に変換

    echo $jsonstr;
?>