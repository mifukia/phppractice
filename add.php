<?php
    $result;
    $user = "root";
    $password = "mifukia444";
    $name = htmlspecialchars($_POST['name']);
    $mail = htmlspecialchars($_POST['mail']);
    $tel  = htmlspecialchars($_POST['tel']);
    $memo = htmlspecialchars($_POST['memo']);

    try{
        $pdo = new PDO(
            "mysql:host=localhost;dbname=mysampledata;charset=utf8",
            $user,
            $password);
        $query = "insert into sampletable(name,mail,tel,memo) values('$name','$mail','$tel','$memo')";
        $pdo->exec($query);

        
    }catch(PDOException $e){
        $result = "#ERR:".$e->getMessage();
        echo "<html><body><h1>ERR".$e->getMessage()+"</h1></body></html>";
    }

    $statement = null;
    $pdo = null;
    header('Location:index.php');
?>