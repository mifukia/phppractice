<?php
    $result;
    $user = "root";
    $password = "mifukia444";

    try{
        $pdo = new PDO(
            "mysql:host=localhost;dbname=mysampledata;charset=utf8",
            $user,
            $password);
    }catch(PDOException $e){
        $result = "#ERR:".$e->getMessage();
    }

    $statement = $pdo->query('select * from sampletable');

    $records = array();//テーブルの中身を格納する配列

    while($record = $statement->fetch(PDO::FETCH_ASSOC)){
        $records[] = $record;//テーブルの中身を格納
    }

    $statement = null;
    $pdo = null;
    //生成したPDOオブジェクトを開放。データベースとの接続が切断され、リソースが開放される。
?>