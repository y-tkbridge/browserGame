<?php
// ステージによって出現する的を入れ替える
class Stage{

    public function getEnemyImg($stage){
      $enemy1 = "enemy01.png";
      $enemy2 = "enemy02.png";
      $enemy3 = "enemy03.png";


        switch($stage){
            case 1:
                return $enemy1;
            case 2:
                return $enemy2;
            case 3:
                return $enemy3;
            default:
                return "error";

        }

        
    }

}