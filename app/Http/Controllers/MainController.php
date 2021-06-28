<?php

namespace App\Http\Controllers;

use App\Models\TestUsers;
use Illuminate\Http\Request;

class MainController extends Controller {

    public function index(){
        return view('main.index');
    }
    public function getTable(Request $request){
        $test_users = TestUsers::query();
        $data = (object) $request->data;

        if(isset($data->name)){
            $test_users->where('name','like','%'.$data->name.'%');
        }
        if(isset($data->lastname)){
            $test_users->where('lastname','like','%'.$data->lastname.'%');
        }
        if(isset($data->country)){
            $test_users->where('country','like','%'.$data->country.'%');
        }
        if(isset($data->phone)){
            $test_users->where('phone','like','%'.$data->phone.'%');
        }
        if(isset($data->company)){
            $test_users->where('company','like','%'.$data->company.'%');
        }
        $test_users = $test_users->skip(50*($data->page - 1))->limit(50)->get();

        return view('main.table',['test_users'=>$test_users])->render();
    }
}
