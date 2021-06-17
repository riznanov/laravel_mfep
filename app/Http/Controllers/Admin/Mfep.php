<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use App\Mfep_model;

class Mfep extends Controller
{
    // Main page
    public function index()
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $data_siswa = DB::table('datasiswa')
                    ->join('nilai_siswa', 'nilai_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
                    ->select('datasiswa.*', 'nilai_siswa.*')
                    ->whereNull('id_kelas')
                    ->orderBy('datasiswa.id_siswa','DESC')
                    ->paginate(20);

		$data = array(  'title'				=> 'Kelas Berprestasi',
						'datasiswa'			=> $data_siswa,
                        'content'			=> 'admin/mfep/index'
                    );

        return view('admin/layout/wrapper',$data);
    }
    // Tambah
    public function seleksi()
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $mymodel 			= new Mfep_model();
		$datasiswa 			= $mymodel->semua();

        $data = array(  'title'             => 'Seleksi Kelas Berprestasi',
                        'content'           => 'admin/mfep/seleksi',
                        'datasiswa'         => $datasiswa
                    );
        return view('admin/layout/wrapper',$data);
    }

    // tambah proses
    public function seleksi_proses(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $mymodel            = new Mfep_model();
        $tahun_ajaran       = $request->tahun_ajaran;
        $datasiswa          = $mymodel->getdatasiswa($tahun_ajaran);
        $query_kelas = DB::raw("if(mfep.total_nilai = (SELECT MAX(total_nilai) FROM mfep), 'Ya', 'Tidak') as kelas");
        $data_siswa = DB::table('datasiswa')
                    ->join('nilai_siswa', 'nilai_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
                    ->join('mfep', 'mfep.id_siswa', '=', 'nilai_siswa.id_siswa','LEFT')
                    ->select('datasiswa.*', 'nilai_siswa.*','mfep.*', $query_kelas)
                    ->where('datasiswa.tahun_ajaran',$tahun_ajaran)
                    // ->whereNull('datasiswa.id_kelas')
                    ->orderBy('datasiswa.id_siswa','DESC')
                    ->paginate(20);


        foreach($data_siswa as $datasiswa) {
            // bobot tiap kriteria
            $bobot_pgmkec= 0.2;
            $bobot_pgmkab= 0.3;
            $bobot_pgmprov= 0.5;

            $bobot_bind = 0.15;
            $bobot_mtk = 0.35;
            $bobot_bing = 0.35;
            $bobot_ipa = 0.15;

            $bobot_rapot4 =0.2;
            $bobot_rapot5 =0.3;
            $bobot_rapot6 =0.5;

            // total nilai kriteria
            $nilai_pgmkec = $datasiswa->pgm_kec * $bobot_pgmkec;
            $nilai_pgmkab = $datasiswa->pgm_kab * $bobot_pgmkab;
            $nilai_pgmprov = $datasiswa->pgm_prov * $bobot_pgmprov;
            $total_kriteria_piagam = $nilai_pgmkec + $nilai_pgmkab + $nilai_pgmprov;

            $nilai_bind = $datasiswa->ujian_bind * $bobot_bind;
            $nilai_mtk = $datasiswa->ujian_mtk * $bobot_mtk;
            $nilai_bing = $datasiswa->ujian_bing * $bobot_bing;
            $nilai_ipa = $datasiswa->ujian_ipa * $bobot_ipa;
            $total_kriteria_ujian = $nilai_bind + $nilai_mtk + $nilai_bing + $nilai_ipa;

            $nilai_rapot4 = (($datasiswa->rapot4a+$datasiswa->rapot4b)/2)*$bobot_rapot4;
            $nilai_rapot5 = (($datasiswa->rapot5a+$datasiswa->rapot5b)/2)*$bobot_rapot5;
            $nilai_rapot6 = (($datasiswa->rapot6a+$datasiswa->rapot6b)/2)*$bobot_rapot6;
            $total_kriteria_rapot = $nilai_rapot4 + $nilai_rapot5 + $nilai_rapot6;

            // bobot nilai kriteria
            $bobot_nilai_piagam = 0.2;
            $bobot_nilai_ujian = 0.4;
            $bobot_nilai_rapot = 0.4;

            // bobot * nilai kriteria
            $nilai_sub_piagam = $total_kriteria_piagam * $bobot_nilai_piagam;
            $nilai_sub_ujian = $total_kriteria_ujian * $bobot_nilai_ujian;
            $nilai_sub_rapot = $total_kriteria_rapot * $bobot_nilai_rapot;

            // total nilai kriteria
            $total_nilai_kriteria = $nilai_sub_piagam + $nilai_sub_ujian + $nilai_sub_rapot;

            DB::table('mfep')->where('id_siswa',$datasiswa->id_siswa)->update([
                'nilai_piagam' => $total_kriteria_piagam,
                'nilai_ujian' => $total_kriteria_ujian,
                'nilai_rapot' => $total_kriteria_rapot,
                'nilai_sub_piagam' => $nilai_sub_piagam,
                'nilai_sub_ujian' => $nilai_sub_ujian,
                'nilai_sub_rapot' => $nilai_sub_rapot,
                'total_nilai' => $total_nilai_kriteria
            ]);

            if($datasiswa->kelas == 'Ya'){
                DB::table('datasiswa')->where('id_siswa', $datasiswa->id_siswa)->update([
                    'id_kelas' => '1'
                ]);
                DB::table('mfep')->where('id_siswa', $datasiswa->id_siswa)->update([
                    'id_kelas' => '1'
                ]);
            } else{
                DB::table('datasiswa')->where('id_siswa', $datasiswa->id_siswa)->update([
                    'id_kelas' => '2'
                ]);
                DB::table('mfep')->where('id_siswa', $datasiswa->id_siswa)->update([
                    'id_kelas' => '1'
                ]);
            }


        }
        $data = array(  'title'				=> 'Kelas Berprestasi',
						'datasiswa'			=> $data_siswa,
                        'total_kriteria_piagam' => $total_kriteria_piagam,
                        'total_kriteria_ujian' =>$total_kriteria_ujian,
                        'total_kriteria_rapot' => $total_kriteria_rapot,
                        'nilai_sub_piagam' => $nilai_sub_piagam,
                        'nilai_sub_ujian' => $nilai_sub_ujian,
                        'nilai_sub_rapot' => $nilai_sub_rapot,
                        'total_nilai' => $total_nilai_kriteria,
                        'content'			=> 'admin/mfep/index'
        );

        return view('admin/layout/wrapper',$data);
    }

    // pembagian kelas
    public function pembagian_kelas()
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        // $mymodel 			= new Mfep_model();
		// $datasiswa 			= $mymodel->semua();
        $query_kelas = DB::raw("if(mfep.total_nilai = (SELECT MAX(total_nilai) FROM mfep), 'Ya', 'Tidak') as kelas");
        $data_siswa = DB::table('datasiswa')
                    ->join('nilai_siswa', 'nilai_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
                    ->join('mfep', 'mfep.id_siswa', '=', 'nilai_siswa.id_siswa','LEFT')
                    ->select('datasiswa.*', 'nilai_siswa.*','mfep.*', $query_kelas)
                    ->where('datasiswa.id_kelas',1)
                    // ->whereNull('datasiswa.id_kelas')
                    ->orderBy('datasiswa.id_siswa','DESC')
                    ->paginate(20);

        $id_kelas_berprestasi = DB::select('select count(id_kelas) from datasiswa where id_kelas = 2', [1]);
        $kelas_berprestasi = DB::table('datasiswa')
                            ->select(DB::raw('COUNT(id_kelas) as jumlah_kelas'))
                            ->where('id_kelas','=',1)
                            ->get();

        $data = array(  'title'             => 'Pembagian Kelas Berprestasi',
                        'content'           => 'admin/mfep/kelas',
                        'datasiswa'         => $data_siswa,
                        'kelas_berprestasi'             => $kelas_berprestasi
                    );
        return view('admin/layout/wrapper',$data);
    }
      // Cari
      public function cari(Request $request)
      {
          if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
          $mysiswa            = new Mfep_model();
          $keywords           = $request->keywords;
          $datasiswa          = $mysiswa->cari($keywords);

          $data = array(  'title'             => 'Kelas Berprestasi',
                          'datasiswa'         => $datasiswa,
                          'content'           => 'admin/mfep/index'
                      );
          return view('admin/layout/wrapper',$data);
      }

    // edit
    public function edit($id_produk)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $myproduk           = new Produk_model();
        $produk             = $myproduk->detail($id_produk);
        $kategori_produk    = DB::table('kategori_produk')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Edit Produk',
                        'produk'            => $produk,
                        'kategori_produk'   => $kategori_produk,
                        'content'           => 'admin/produk/edit'
                    );
        return view('admin/layout/wrapper',$data);
    }


    // edit
    public function edit_proses(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                            'nama_produk'   => 'required',
                            'kode_produk'   => 'required',
                            'isi'           => 'required',
                            'gambar'        => 'file|image|mimes:jpeg,png,jpg|max:2048',
                            ]);
        // UPLOAD START
        $image                  = $request->file('gambar');
        if(!empty($image)) {
            $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = str_slug($filename, '-').'-'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath        = public_path('upload/image/thumbs/');
            $img = Image::make($image->getRealPath(),array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath.'/'.$input['nama_file']);
            $destinationPath = public_path('upload/image/');
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD
            $slug_nama_produk = str_slug($request->nama_produk, '-');
            if($request->mulai_diskon=='') {
                $mulai_diskon = NULL;
            }else{
                $mulai_diskon = date('Y-m-d',strtotime($request->mulai_diskon));
            }
            if($request->selesai_diskon=='') {
                $selesai_diskon = NULL;
            }else{
                $selesai_diskon = date('Y-m-d',strtotime($request->selesai_diskon));
            }
            DB::table('produk')->where('id_produk',$request->id_produk)->update([
                'id_user'                => Session()->get('id_user'),
                'id_kategori_produk'    => $request->id_kategori_produk,
                'slug_produk'           => $slug_nama_produk,
                'kode_produk'           => strtoupper(str_replace(' ','',$request->kode_produk)),
                'nama_produk'           => $request->nama_produk,
                'status_produk'         => $request->status_produk,
                'satuan'                => $request->satuan,
                'urutan'                => $request->urutan,
                'deskripsi'             => $request->deskripsi,
                'isi'                   => $request->isi,
                'harga_jual'            => $request->harga_jual,
                'harga_beli'            => $request->harga_beli,
                'harga_terendah'        => $request->harga_terendah,
                'harga_tertinggi'       => $request->harga_tertinggi,
                'gambar'                => $input['nama_file'],
                'keywords'              => $request->keywords,
                'mulai_diskon'          => $mulai_diskon,
                'selesai_diskon'        => $selesai_diskon,
                'besar_diskon'          => $request->besar_diskon,
                'jenis_diskon'          => $request->jenis_diskon,
                'jumlah_order_min'      => $request->jumlah_order_min,
                'jumlah_order_max'      => $request->jumlah_order_max,
                'stok'                  => $request->stok,
                'berat'                 => $request->berat,
                'ukuran'                => $request->ukuran,
            ]);
        }else{
            $slug_nama_produk = str_slug($request->nama_produk, '-');
            if($request->mulai_diskon=='') {
                $mulai_diskon = NULL;
            }else{
                $mulai_diskon = date('Y-m-d',strtotime($request->mulai_diskon));
            }
            if($request->selesai_diskon=='') {
                $selesai_diskon = NULL;
            }else{
                $selesai_diskon = date('Y-m-d',strtotime($request->selesai_diskon));
            }
            DB::table('produk')->where('id_produk',$request->id_produk)->update([
                'id_user'                => Session()->get('id_user'),
                'id_kategori_produk'    => $request->id_kategori_produk,
                'slug_produk'           => $slug_nama_produk,
                'kode_produk'           => strtoupper(str_replace(' ','',$request->kode_produk)),
                'nama_produk'           => $request->nama_produk,
                'status_produk'         => $request->status_produk,
                'satuan'                => $request->satuan,
                'urutan'                => $request->urutan,
                'deskripsi'             => $request->deskripsi,
                'isi'                   => $request->isi,
                'harga_jual'            => $request->harga_jual,
                'harga_beli'            => $request->harga_beli,
                'harga_terendah'        => $request->harga_terendah,
                'harga_tertinggi'       => $request->harga_tertinggi,
                'keywords'              => $request->keywords,
                'mulai_diskon'          => $mulai_diskon,
                'selesai_diskon'        => $selesai_diskon,
                'besar_diskon'          => $request->besar_diskon,
                'jenis_diskon'          => $request->jenis_diskon,
                'jumlah_order_min'      => $request->jumlah_order_min,
                'jumlah_order_max'      => $request->jumlah_order_max,
                'stok'                  => $request->stok,
                'berat'                 => $request->berat,
                'ukuran'                => $request->ukuran,
            ]);
        }
        return redirect('admin/produk')->with(['sukses' => 'Data telah ditambah']);
    }

    // Delete
    public function delete($id_produk)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        DB::table('produk')->where('id_produk',$id_produk)->delete();
        return redirect('admin/produk')->with(['sukses' => 'Data telah dihapus']);
    }
}
