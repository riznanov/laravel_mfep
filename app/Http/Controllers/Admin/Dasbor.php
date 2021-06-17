<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Konfigurasi_model;
use Image;
use App\Pemesanan_model;
use App\Produk_model;
use App\Mfep_model;
use PDF;

class Dasbor extends Controller
{


    // Index
    public function index()
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
    	$mysite = new Konfigurasi_model();
		$site 	= $mysite->listing();

        $datasiswa = DB::table('datasiswa')
                    ->join('ortu_siswa', 'ortu_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
                    ->join('nilai_siswa', 'nilai_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
                    ->join('dok_siswa', 'dok_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
                    ->select('datasiswa.*', 'ortu_siswa.*','nilai_siswa.*'
                            , 'dok_siswa.ijazah AS ijazah', 'dok_siswa.pgm_kec AS dok_pgm_kec', 'dok_siswa.pgm_kab AS dok_pgm_kab','dok_siswa.pgm_prov AS dok_pgm_prov',
                            'dok_siswa.rapot AS rapot')
                    ->orderBy('datasiswa.id_siswa','DESC')
                    ->paginate(20);

		$data = array(  'title'     => $site->namaweb.' - '.$site->tagline,
                        'datasiswa'         => $datasiswa,
                        'content'   => 'admin/dasbor/index'
                    );
        return view('admin/layout/wrapper',$data);
    }
}
