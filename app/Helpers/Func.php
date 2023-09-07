<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Hash;
use App\Helpers\Func;


class Func {

    public static function generateCode($length){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = '';
        for ($i = 0; $i < $length; $i++) {
            $randomIndex = rand(0, strlen($characters) - 1);
            $code .= $characters[$randomIndex];
        }
        return $code;
    }

    public static function createUser($group,$campa) {
        $user= new \App\Models\User();
        $user->name=$campa->name;
        if($campa->phone!=null){
            $user->email=$campa->phone.'@gmail.com';
            $user->password=Hash::make($campa->phone);
        }else{
            $name = Func::reduceName($campa->name);
			$first_name = $name['first_name'];
            $user->email=$first_name.'0@gmail.com';
            $user->password=Hash::make(12345678);
        }

        $user->group_id=$group->id;
        $user->campamenti_id=$campa->id;
        $user->save();
        return $user;
    }

    public static function validate($campamentista) {
        if($campamentista->capacity==5){
            return 'free';
        }
        if($campamentista->capacity==4){
            return '';
        }
        if($campamentista->capacity==3){
            return 'friend-female';
        }
        if($campamentista->capacity==2){
            return ' friend-male';
        }
        if($campamentista->capacity==1){
            return 'female';
        }
        if($campamentista->capacity==0){
            return 'male';
        }
    }

    public static function reduceName($name) {
        $first_name = $last_name = null;
        $arr = explode(' ', $name);
        $num = count($arr);
        $count = floor($num/2);
        foreach($arr as $key => $arr_item){
            if($key==0||$key==1&&$num>3||$key==2&&$num>5){
                if($first_name){
                    $first_name .= ' ';
                }
                $first_name .= $arr_item;
            } else {
                if($last_name){
                    $last_name .= ' ';
                }
                $last_name .= $arr_item;
            }
        }
    return ['first_name'=>$first_name, 'last_name'=>$last_name];
  }

}
