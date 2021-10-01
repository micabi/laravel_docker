<?php
namespace App\Services;

class TranslateRole{
    public static function getRole($data){
        if($data === 1){
            $role = '管理者';
        }else{
            $role = '一般ユーザー';
        }
        return $role;
    }
}
