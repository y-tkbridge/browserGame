$(function(){
'use strict';

    $('#fight_btn').on('click',function(){
        // 敵の画像を表示する
        //$('#enemy').children('img').attr('src','./images/enemy1.png');

        var id = $('#enemy_img').attr('src');
        console.log(id);
        $('#fight_btn').toggleClass('war');
        $.post('_ajax.php',{
            enemy_level:'stage1'
        },function(res){
            
        })

    });

})