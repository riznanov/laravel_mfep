<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User_model extends Model
{
    // kategori
    public function login($username,$password)
    {
        $query = DB::table('users')
            ->select('*')
            ->where(array(  'users.username'	=> $username,
                            'users.password'    => sha1($password)))
            ->orderBy('id_user','DESC')
            ->first();
        return $query;
    }
    public function akses_level($akses_level){
        $query = DB::table('users')
            ->select('*')
            ->where(array(  'users.akses_level'	=> $akses_level))
            ->orderBy('id_user','DESC')
            ->first();
        return $query;
    }
}
