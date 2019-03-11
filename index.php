<?php
require_once('./modules/User.php');
require_once('./modules/Enemy.php');
session_start();

var_dump($_SESSION['stage']);

// プレイヤーの名前をセットする
$name = $_POST['username'];



//プレイヤーとテキのインスタンスを作成する
$player = new GamePlayer();
$enemy = new Enemy();

$player->setName($name);

$_SESSION['player'] = array(
    "name" => $player->getName(),
    "level" => $player->getLevel(),
    "hp" => $player->getHp()
);

$_SESSION['enemy'] = array(
    "name" => $enemy->getName(),
    "level" => $enemy->getLevel(),
    "hp" => $enemy->getHp()

);


?>

    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="./public/css/style.css">

    </head>
    <body>
    <h1>げーむ！</h1>
    <div class="container">
        <div id="player" class="item">
            <img id="player_img" src='./images/player.png'>
            <p>名前 <?= $player->getName(); ?>
            <p>レベル<?= $player->getLevel();?></p>
            <p>HP<?= $player->getHp();?></p>
        </div>

        <div class="item">
        </div>

        <div id='enemy' class="item">
            <img id="enemy_img" src='./images/ドラキーあ.png'>
            <p>名前 <?= $enemy->getName(); ?>
            <p>レベル<?= $enemy->getLevel();?></p>
            <p>HP<?= $enemy->getHp();?></p>

        </div>
    </div>
    <form method="post" action="./public/battle.php">
        <input type="hidden" name="enemyName" value="<?= $enemy->getName();?>">
        <input type="submit" id="fight_btn" class="btn" value="ゲームスタート!!">
    </form>


    <!-- googleがホストしている jQyery を読み込む -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./js/main.js"></script>
    </body>
    </html>