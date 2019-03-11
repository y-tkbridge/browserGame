<?php
session_start();
//var_dump($_SESSION);
require_once('./modules/Action.php');


$player = $_SESSION['player'];
$enemy = $_SESSION['enemy'];

// プレイヤーのパラメーターを変数にセットする
$playerName = $player['name'];
$playerHp = $player['hp'];
$playerLevel = $player['level'];

// 対戦相手のパラメータをセットする
$enemyName = $player['name'];
$playerHp = $player['hp'];
$playerLevel = $player['level'];

// プレイヤーの技を取得する
$action = new Action();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
<h1>げーむ！</h1>
<div class="container">
    <div id="player" class="item">
        <img id="player_img" src='./images/player.png'>
        <p>名前 <?= $playerName; ?>
        <p>レベル<?= $playerLevel;?></p>
        <p>HP<?= $playerHp?></p>
    </div>

    <div class="item" id="">
        <?= $action->getActions($playerLevel); ?>
    </div>

    <div id='enemy' class="item">
        <img id="enemy_img" src='./images/ドラキーあ.png'>
        <p>名前 <?= $enemy->getName(); ?>
        <p>レベル<?= $enemy->getLevel();?></p>
        <p>HP<?= $enemy->getHp();?></p>

    </div>
</div>
<form method="post" action="./battle.php">
    <input type="submit" id="fight_btn" class="btn" value="ゲームスタート!!"> 
</form>


<!-- googleがホストしている jQyery を読み込む -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="./js/main.js"></script>
</body>
</html>