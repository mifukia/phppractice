<?php
    require_once('Drink.php');
    require_once('Food.php');
    require_once('User.php');
    require_once('sql.php');

    $juice    = new Drink('ジュース','オレンジを使ったジュースです。','cold');
    $apple    = new Drink('リンゴジュース','もぎたてのリンゴのジュースです。','hot');
    $takoyaki = new Food('たこ焼き','当店自慢のソースが決めてです。',3);
    $ramen    = new Food('ラーメン','豚骨スープが絶品です。',5);
    $menus = array($juice,$apple,$takoyaki,$ramen);//menuのインスタンスを格納した配列

    $users = array();//userのインスタンスを格納する配列
    foreach($records as $record){
        $record['id'] = new User($record['id'],$record['name'],$record['mail'],$record['tel'],$record['memo']);
        $users[] = $record['id'];//userのインスタンスを格納
    }
?>