<?php
session_start();

require_once('../modules/Action.php');


//プレイヤーパラメータの取得
$player = $_SESSION['player'];
$enemy = $_SESSION['enemy'];

$enemyHp = $_SESSION['enemy']['hp'];

// プレイヤーの技を取得する
$action = new Action();

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
<form method="post" action="#">
<div class="container">
    <div id="player" class="item">
        <img id="player_img" src='../images/player.png'>
        <p>名前 <?= $player['name']; ?>
        <p>レベル<?= $player['level'];?></p>
        <p>HP<?= $player['hp']?></p>
    

    <div class="item" id="">
        <?php foreach($action->getActions($player['level']) as $key => $value){ ?>
        <ul>
            <input type="radio" name="action" value="<?= $value?>"><?= $key ?>
        </ul>
        <?php } ?>

    </div>
    </div>
    <div id='enemy' class="item">
        <img id="enemy_img" src='../images/ドラキーあ.png'>
        <p>名前 <?= $enemy['name']; ?>
        <p>レベル<?= $enemy['level']?></p>
        <p>HP<?= $enemyHp;?></p>
        <input type="hidden" name="enemyHp" value="<?=$enemy['hp'];?>">
        

    </div>
</div>

    <input type="submit" id="fight_btn" class="btn" value="戦う">
</form>


<?php 
if(!empty($_POST['action'])){
    $_SESSION['enemy']['hp'] = $enemyHp - $_POST['action'];

}

if($_SESSION['enemy']['hp'] === 0){
    $stageCount ++;
    $_SESSION['stage'] = $stageCount;
    header('Location: ../index.php');
}

// if($enemy['hp'] === 0){
//     $stageCount ++;
//     $_SESSION['stage'] = $stageCount;
//     session_destroy();
//     header('Location:../index.php');
   

// }

?>


<!-- googleがホストしている jQyery を読み込む -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="./js/main.js"></script>
</body>
</html>