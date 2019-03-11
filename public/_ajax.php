<?php
require_once('./modules/Enemy.php');
session_start();
$app = new Enemy();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    switch($_POST['enemy_level']){
        case 'stage1':
            return $this->_createEnemy(1);
        case 'stage2':
            return $this->_createEnemy(2);
        case 'stage3':
            return $this->_createEnemy(3);
    }
}

