<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task1Controller extends Controller
{
    public function taskAction(){
        $users = [
            ["id"=>1,"name"=>"Ahmed","age"=>19],
            ["id"=>2,"name"=>"Mohamed","age"=>20],
            ["id"=>3,"name"=>"Mahmoud","age"=>21]
        ];
        return view('task1',["users"=>$users]);
        
    }
    
    public function userAction($id){
        $users = [
            ["id"=>1,"name"=>"Ahmed","age"=>19],
            ["id"=>2,"name"=>"Mohamed","age"=>20],
            ["id"=>3,"name"=>"Mahmoud","age"=>21]
        ];
        --$id;
        if ($id<count($users)) {
             $users= $users[$id];
            return view('task1',["users"=>$users,"id"=>$id]);
        }else{
            return abort(404);
        }
        
    }
}