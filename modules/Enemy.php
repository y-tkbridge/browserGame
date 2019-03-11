<?php
require_once('User.php');
class Enemy extends GamePlayer {

    private $name;
    private $level;
    private $gameLevel;
    private $hp;

    function __construct(){
        $this->level = rand(1,3);
        $this->hp = rand(4,8);

    }

    public function getLevel(){
        return $this->level;
    }
    
    public function getName(){
        $selectNameNum = rand(1,3);
        switch($selectNameNum){
            case 1:
                return $this->name = "あひゃひゃ";

            case 2:
                return $this->name = "ほげほげ";

            case 3:
                return $this->name ="もげもげ";
        }
    }

    public function getHp(){
        return $this->hp;
    }

    public function createEnemy($enemy_level){
        if($enemy_level === 1){
            echo "level 1";
        }else if($enemy_level === 2){
            echo "level 2";
        }else{
            echo "level 3";
        }
    }
}