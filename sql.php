<?php
    $result;
    $user = "root";
    $password = "mifukia444";

    try{
        $pdo = new PDO(
            "mysql:host=localhost;dbname=mysampledata;charset=utf8",
            $user,
            $password);
        $statement = $pdo->query('select * from sampletable');
        //queryメソッドの返り値はPDOStatementクラスのインスタンス

        $records = array();//テーブルの中身を格納する配列
    
        while($record = $statement->fetch(PDO::FETCH_ASSOC)){
            $records[] = $record;
            //fetchメソッドで取得したメソッドを順番に取り出す　→　テーブルの中身を格納　
        }
    }catch(PDOException $e){
        $result = "#ERR:".$e->getMessage();
        echo $result;
    }

    $statement = null;
    $pdo = null;
    //生成したPDOオブジェクトを開放。データベースとの接続が切断され、リソースが開放される。
?>