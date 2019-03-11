<?php


class Action {
    public function getActions($level){
        if($level === 1){
            $actions = array(
                "ける" => 2,
                "なぐる" => 1,
                "ずつき" => 3
            );
            return $actions;

        }

    }


}