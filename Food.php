<?php
require_once('Menu.php');
class Food extends Menu{
    private $star;
    public function __construct($name,$text,$star=0){
        parent::__construct($name,$text);
        $this->star = $star;
    }
    public function getStar(){
        return $this->star;
    }
}
?>

