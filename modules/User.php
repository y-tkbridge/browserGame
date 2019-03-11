<?php


class GamePlayer {
    private $name;
    private $level;
    private $gameLevel;
    private $hp;

    function __construct(){
        $this->level = 1;
        $this->gameLevel =1;
        $this->hp = 10;
    }
    //プレイヤーの名前を設定する
    public function setName($name){
        $this->name = $name;
    }

    //プレイヤー名のゲッター
    public function getName (){
        return $this->name;
    }
    
    public function getLevel(){
        return $this->level;
    }

    public function getHp(){
        return $this->hp;
    }

    public function levelInit(int $level){
        $this->level =$level;
    }
}