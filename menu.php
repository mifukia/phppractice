<?php

class Menu{
    protected $name;
    protected $text;
    private static $count;
    public function __construct($name,$text){
        $this->name = $name;
        $this->text = $text;
        self::$count ++;
    }
    public static function getCount(){
        return self::$count;
    }
    public function getName(){
        return $this->name;
    }
    public function getText(){
        return $this->text;
    }
}

?>