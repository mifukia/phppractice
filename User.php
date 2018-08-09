<?php

class User{
    private $id;
    private $name;
    private $mail;
    private $tel;
    private $memo;
    public function __construct($id,$name,$mail,$tel,$memo){
        $this->id = $id;
        $this->name = $name;
        $this->mail = $mail;
        $this->tel = $tel;
        $this->memo = $memo;
    }
    public static function strtoupper($string){
        return strtoupper($string);
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getMail(){
        return $this->mail;
    }
    public function getTel(){
        return $this->tel;
    }
    public function getMemo(){
        return $this->memo;
    }
}

?>