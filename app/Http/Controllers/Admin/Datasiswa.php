<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use App\Mfep_model;

class Datasiswa extends Controller
{
    // Main page
    public function index()
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
                    $user_id = Session()->get('id_user');
                    $datasiswa = DB::table('datasiswa')
                                ->join('ortu_siswa', 'ortu_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
                                ->join('nilai_siswa', 'nilai_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
                                ->join('dok_siswa', 'dok_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
                                ->select('datasiswa.*', 'ortu_siswa.*','nilai_siswa.*'
                                        , 'dok_siswa.ijazah AS ijazah', 'dok_siswa.pgm_kec AS dok_pgm_kec', 'dok_siswa.pgm_kab AS dok_pgm_kab','dok_siswa.pgm_prov AS dok_pgm_prov',
                                        'dok_siswa.rapot AS rapot')
                                ->orderBy('datasiswa.id_siswa','DESC')
                                ->paginate(20);

		$data = array(  'title'				=> 'Data Siswa',
						'datasiswa'			=> $data_siswa,
                        'content'			=> 'admin/datasiswa/index'
                    );

        return view('admin/layout/wrapper',$data);
    }
    public function datasiswa()
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $user_id = Session()->get('id_user');
        $datasiswa = DB::table('datasiswa')
                    ->join('ortu_siswa', 'ortu_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
                    ->join('nilai_siswa', 'nilai_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
                    ->join('dok_siswa', 'dok_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
                    ->select('datasiswa.*', 'ortu_siswa.*','nilai_siswa.*'
                            , 'dok_siswa.ijazah AS ijazah', 'dok_siswa.pgm_kec AS dok_pgm_kec', 'dok_siswa.pgm_kab AS dok_pgm_kab','dok_siswa.pgm_prov AS dok_pgm_prov',
                            'dok_siswa.rapot AS rapot')
                    ->orderBy('datasiswa.id_siswa','DESC')
                    ->paginate(20);


        $data = array(  'title'             => 'Data Siswa',
                        'content'           => 'admin/datasiswa/siswa',
                        'datasiswa'         => $datasiswa
                    );
        return view('admin/layout/wrapper',$data);
    }

}
