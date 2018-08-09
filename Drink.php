<?php
require_once('Menu.php');
class Drink extends Menu{
    private $type;
    public function __construct($name,$text,$type){
        parent::__construct($name,$text);
        $this->type = $type;
    }
    public function getType(){
        return $this->type;
    }
}
?>