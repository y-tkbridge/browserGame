<?php
session_start();

require_once('../modules/Action.php');
require_once('../modules/Stage.php');

//プレイヤーパラメータの取得
$player = $_SESSION['player'];
$enemy = $_SESSION['enemy'];

$enemyHp = $_SESSION['enemy']['hp'];
if(!empty($_POST['action'])){
    $_SESSION['enemy']['hp'] = $enemyHp - $_POST['action'];

}


// プレイヤーの技を取得する
$action = new Action();

//敵の画像を取得
$enemyImg = new Stage();

//プレイヤーが選択攻撃手段を取得する
var_dump($_SESSION);


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
        <img id="player_img" src='../images/player.png'>
        <p>名前 <?= $player['name']; ?>
        <p>レベル<?= $player['level'];?></p>
        <p>HP<?= $player['hp']?></p>
    </div>

    <form method="post" action="#">
        <div class="item" id="">
            <?php foreach($action->getActions($player['level']) as $key => $value){ ?>
            <ul>
                <input type="radio" name="action" value="<?= $value?>"><?= $key ?>
            </ul>
            <?php } ?>

        </div>
        
        <div id='enemy' class="item">
            <img id="enemy_img" src="<?='../images/'.$enemyImg->getEnemyImg($_SESSION['stage'])?>">
            <p>名前 <?= $enemy['name']; ?>
            <p>レベル<?= $enemy['level']?></p>
            <p>HP<?= $_SESSION['enemy']['hp'];?></p>
            <input type="hidden" name="enemyHp" value="<?=$enemy['hp'];?>">
            <input type="submit" id="fight_btn" class="btn" value="戦う">
        </div>
    </form>


    
</div>



<?php 

if($_SESSION['enemy']['hp'] <= 0){
    $_SESSION['stage'] ++;
    header('Location: ../index.php');
}else if ($_SESSION['stage'] > 3){
    $_SESSION['stage'] =1;

}
?>


<!-- googleがホストしている jQyery を読み込む -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="./js/main.js"></script>
</body>
</html>