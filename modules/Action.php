<?php
class Action {
    public function getActions($level){
        if($level === 1){
            $actions = array(
                "なぐる" => 1,
                "ける" => 2,
                "ずつき" => 3
            );
            return $actions;

        }

    }
}