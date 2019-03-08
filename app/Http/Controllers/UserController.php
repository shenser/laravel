<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     * @author LaravelAcademy.org
     */
    public function show($id)
    {
        $result = DB::select("select * from users");
        //DB::insert('insert into users (name, email, password) values (?,?,?)', ['学院君','xueyuanjun.qq.com', 'shenser']);
        $user = DB::table('users')
            ->inRandomOrder()
            ->first();
        return view('user.profile', ['user' => $user]);
        //return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
