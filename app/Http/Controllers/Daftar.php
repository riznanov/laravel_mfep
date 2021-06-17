<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User_model;

class Daftar extends Controller
{
    // Homepage
    public function index()
    {
        $data = array(  'title'     => 'Registrasi Siswa');
        return view('daftar/index',$data);
    }

    // tambah
    public function tambah(Request $request)
    {
    	request()->validate([
                            'nama'     => 'required',
					        'username' => 'required|unique:users',
					        'password' => 'required',
                            'email'    => 'required',
					        ]);
        // UPLOAD START
        DB::table('users')->insert([
            'nama'          => $request->nama,
            'email'         => $request->email,
            'username'      => $request->username,
            'password'      => sha1($request->password),
            'akses_level'   => "siswa",
        ]);
        return redirect('login')->with(['sukses' => 'Anda Berhasil Registrasi. silahkan login']);
    }

    public function login(){
        $data = array(  'title'     => 'Login - SMP AL HUSAIN MGL');
        return view('daftar/login',$data);
    }

    // Cek
    public function cek(Request $request)
    {
        $username   = $request->username;
        $password   = $request->password;
        $model      = new User_model();
        $user       = $model->login($username,$password);
        if($user) {
            $request->session()->put('id_user', $user->id_user);
            $request->session()->put('nama', $user->nama);
            $request->session()->put('username', $user->username);
            $request->session()->put('akses_level', $user->akses_level);
            return redirect('daftar')->with(['sukses' => 'Anda berhasil login']);
        }else{
            return redirect('daftar/login')->with(['warning' => 'Mohon maaf, Username atau password salah']);
        }
    }

    // Homepage
    public function logout()
    {
        Session()->forget('id_user');
        Session()->forget('nama');
        Session()->forget('username');
        Session()->forget('akses_level');
        return redirect('login')->with(['sukses' => 'Anda berhasil logout']);
    }

    // Homepage
    public function lupa()
    {
        $data = array(  'title'     => 'Login - SMP AL HUSAIN MGL');
        return view('login/lupa',$data);
    }

    // form input data siswa
    public function inputdata(Request $request){
    	if(Session()->get('username')=="") { return redirect('daftar/login')->with(['warning' => 'Maaf, Anda belum login']);}
		$user 	= DB::table('users')->where('akses_level','siswa')->get();

        $data = array(  'title'     => 'Input Data Siswa',
						'user'      => $user,
                        'content'   => 'daftar/input1'
                    );
        return view('admin/layout/wrapper',$data);

    }
}
