<?php

namespace App\Http\Controllers\Siswa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Image;
class Pengumuman extends Controller
{
    public function index()
    {
    	if(Session()->get('username')=="") { return redirect('login/loginsiswa')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $user_id = Session()->get('id_user');
        $kelas = DB::table('datasiswa')
                        ->join('kelas', 'kelas.id_kelas', '=', 'datasiswa.id_kelas','LEFT')
                        ->select('datasiswa.*', 'kelas.nama_kelas')
                        ->where('datasiswa.id_siswa','=',$user_id)
                        ->paginate(20);

        if (DB::table('datasiswa')->where('id_siswa','=', $user_id)->doesntExist()) {
            return redirect('siswa/dasbor')->with(['warning' => 'Data Kelas Tidak ADA']);
        }

        $data =array(  'title'   => 'Pengumuman Seleksi Kelas Berprestasi',
                        'kelas' => $kelas,
                        'content' => 'siswa/pengumuman/index'
                    );
        return view('siswa/layout/wrapper',$data);
    }
}
