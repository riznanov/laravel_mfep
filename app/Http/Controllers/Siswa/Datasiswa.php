<?php

namespace App\Http\Controllers\Siswa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Image;
use App\Produk_model;

class Datasiswa extends Controller
{
    // Main page
    public function index()
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
		$produk = DB::table('datasiswa')
                    ->orderBy('id_siswa','DESC')
                    ->paginate(20);
		// $kategori_produk 	= DB::table('kategori_produk')->orderBy('urutan','ASC')->get();

		$data = array(  'title'				=> 'Data Siswa',
						'produk'			=> $produk,
						// 'kategori_produk'	=> $kategori_produk,
                        'content'			=> 'siswa/datasiswa/index'
                    );
        return view('siswa/layout/wrapper',$data);
    }

    // Cari
    public function cari(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $myproduk           = new Produk_model();
        $keywords           = $request->keywords;
        $produk             = $myproduk->cari($keywords);
        $kategori_produk    = DB::table('kategori_produk')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Data Produk',
                        'produk'            => $produk,
                        'kategori_produk'   => $kategori_produk,
                        'content'           => 'siswa/datasiswa/index'
                    );
        return view('siswa/layout/wrapper',$data);
    }

    // Proses
    public function proses(Request $request)
    {
        $site   = DB::table('konfigurasi')->first();
        // PROSES HAPUS MULTIPLE
        if(isset($_POST['hapus'])) {
            $id_produknya       = $request->id_produk;
            for($i=0; $i < sizeof($id_produknya);$i++) {
                DB::table('produk')->where('id_produk',$id_produknya[$i])->delete();
            }
            return redirect('siswa/datasiswa')->with(['sukses' => 'Data telah dihapus']);
        // PROSES SETTING DRAFT
        }elseif(isset($_POST['draft'])) {
            $id_produknya       = $request->id_produk;
            for($i=0; $i < sizeof($id_produknya);$i++) {
                DB::table('produk')->where('id_produk',$id_produknya[$i])->update([
                        'id_user'       => Session()->get('id_user'),
                        'status_produk' => 'Draft'
                    ]);
            }
            return redirect('siswa/datasiswa')->with(['sukses' => 'Data telah diubah menjadi Draft']);
        // PROSES SETTING PUBLISH
        }elseif(isset($_POST['publish'])) {
            $id_produknya       = $request->id_produk;
            for($i=0; $i < sizeof($id_produknya);$i++) {
                DB::table('produk')->where('id_produk',$id_produknya[$i])->update([
                        'id_user'       => Session()->get('id_user'),
                        'status_produk' => 'Publish'
                    ]);
            }
            return redirect('siswa/datasiswa')->with(['sukses' => 'Data telah diubah menjadi Publish']);
        }elseif(isset($_POST['update'])) {
            $id_produknya       = $request->id_produk;
            for($i=0; $i < sizeof($id_produknya);$i++) {
                DB::table('produk')->where('id_produk',$id_produknya[$i])->update([
                        'id_user'               => Session()->get('id_user'),
                        'id_kategori_produk'    => $request->id_kategori_produk
                    ]);
            }
            return redirect('siswa/datasiswa')->with(['sukses' => 'Data kategori telah diubah']);
        }
    }

    //Status
    public function status_produk($status_produk)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $myproduk           = new Produk_model();
        $produk             = $myproduk->status_produk($status_produk);
        $kategori_produk    = DB::table('kategori_produk')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Data Produk',
                        'produk'            => $produk,
                        'kategori_produk'   => $kategori_produk,
                        'content'           => 'siswa/datasiswa/index'
                    );
        return view('siswa/layout/wrapper',$data);
    }

    //Kategori
    public function kategori($id_kategori_produk)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $myproduk           = new Produk_model();
        $produk             = $myproduk->all_kategori_produk($id_kategori_produk);
        $kategori_produk    = DB::table('kategori_produk')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Data Produk',
                        'produk'            => $produk,
                        'kategori_produk'   => $kategori_produk,
                        'content'           => 'siswa/datasiswa/index'
                    );
        return view('siswa/layout/wrapper',$data);
    }

    // Tambah data siswa
    public function tambah()
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $kategori_produk    = DB::table('kategori_produk')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Input Data Siswa',
                        'kategori_produk'   => $kategori_produk,
                        'content'           => 'siswa/datasiswa/tambah'
                    );
        return view('siswa/layout/wrapper',$data);
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
                        'content'           => 'siswa/datasiswa/edit'
                    );
        return view('siswa/layout/wrapper',$data);
    }

    // proses tambah datasiswa
    public function tambah_proses(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                            'nama'   => 'required',
                            'alamat'   => 'required',
                            'tmp_lahir'           => 'required',
                            'tgl_lahir'        => 'required',
                            'asal_sekolah'        => 'required',
                            ]);

        if($request->tgl_lahir=='') {
            $tgl_lahir = NULL;
        }else{
            $tgl_lahir = date('Y-m-d',strtotime($request->tgl_lahir));
        }
        DB::table('datasiswa')->insert([
            'id_siswa'              => Session()->get('id_user'),
            'nama'                  => $request->nama,
            'alamat'                => $request->alamat,
            'tmp_lahir'             => $request->tmp_lahir,
            'tgl_lahir'             => $tgl_lahir,
            'asal_sekolah'          => $request->asal_sekolah,
            'agama'                 => $request->agama,
            'email'                 => $request->email,
            'tahun_ajaran'          =>date('Y')
        ]);
        return redirect('siswa/datasiswa/tambah_data_ortu')->with(['sukses' => 'Data telah ditambah']);
    }
    // tambah data ortu
    public function tambah_data_ortu()
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $data = array(  'title'             => 'Input Data Orang Tua / Wali',
                        'content'           => 'siswa/datasiswa/tambah_data_ortu'
                    );
        return view('siswa/layout/wrapper',$data);
    }

    // proses tambah data ortu
    public function tambah_2_proses(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                            'ayah'   => 'required',
                            'ibu'   => 'required',
                            'alamat_ayah'           => 'required',
                            'alamat_ibu'        => 'required',
                            'krj_ayah'        => 'required',
                            ]);

        if($request->tgl_lahirayah && $request->tgl_lahiribu=='') {
            $tgl_lahirayah = NULL;
            $tgl_lahiribu = NULL;
        }else{
            $tgl_lahirayah = date('Y-m-d',strtotime($request->tgl_lahirayah));
            $tgl_lahiribu = date('Y-m-d',strtotime($request->tgl_lahiribu));
        }
        DB::table('ortu_siswa')->insert([
            'id_siswa'              => Session()->get('id_user'),
            'ayah'                  => $request->ayah,
            'alamat_ayah'           => $request->alamat_ayah,
            'tgl_lahirayah'         => $tgl_lahirayah,
            'agama_ayah'            => $request->agama_ayah,
            'krj_ayah'              => $request->krj_ayah,
            'ibu'                   => $request->ibu,
            'alamat_ibu'           => $request->alamat_ibu,
            'tgl_lahiribu'         => $tgl_lahiribu,
            'agama_ibu'            => $request->agama_ibu,
            'krj_ibu'              => $request->krj_ibu
        ]);
        return redirect('siswa/datasiswa/tambah_data_dokumen')->with(['sukses' => 'Data Orang Tua telah ditambah']);
    }

     // tambah data dokumen
     public function tambah_data_dokumen()
     {
         if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
         $data = array(  'title'             => 'Input Data Nilai Siswa',
                         'content'           => 'siswa/datasiswa/tambah_nilai'
                     );
         return view('siswa/layout/wrapper',$data);
     }

     // proses tambah data nilai / dokumen siswa
    public function tambah_nilai_proses(Request $request)
    {
        $user_id = Session()->get('id_user');

        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}

        if($request->pgm_kec == "1"){$pgm_kec = "10";}elseif($request->pgm_kec == "2"){ $pgm_kec = "9";}elseif($request->pgm_kec == "3"){ $pgm_kec = "8"; }else{$pgm_kec = "0";}

        if($request->pgm_kab == "1"){$pgm_kab = "10";}elseif($request->pgm_kab == "2"){ $pgm_kab = "9";}elseif($request->pgm_kab == "3"){ $pgm_kab = "8"; }else{$pgm_kab = "0";}

        if($request->pgm_prov == "1"){$pgm_prov = "10";}elseif($request->pgm_prov == "2"){ $pgm_prov = "9";}elseif($request->pgm_prov == "3"){ $pgm_prov = "8"; }else{$pgm_prov = "0";}

        if(DB::table('nilai_siswa')->where('id_siswa','=', $user_id)->exists()){
            DB::table('nilai_siswa')->where('id_siswa',$user_id)->delete();
            DB::table('nilai_siswa')->insert([
                'id_siswa'              => Session()->get('id_user'),
                'pgm_kec'               => $pgm_kec,
                'pgm_kab'               => $pgm_kab,
                'pgm_prov'              => $pgm_prov,
                'ujian_bing'            => $request->ujian_bing,
                'ujian_bind'            => $request->ujian_bind,
                'ujian_ipa'             => $request->ujian_ipa,
                'ujian_mtk'             => $request->ujian_mtk,
                'rapot4a'               => $request->rapot4a,
                'rapot4b'               => $request->rapot4b,
                'rapot5a'               => $request->rapot5a,
                'rapot5b'               => $request->rapot5b,
                'rapot6a'               => $request->rapot6a,
                'rapot6b'               => $request->rapot6b,
            ]);
            DB::table('mfep')->insert([
                'id_siswa'              => Session()->get('id_user'),
                'pgm_kec'               => $pgm_kec,
                'pgm_kab'               => $pgm_kab,
                'pgm_prov'              => $pgm_prov,
                'ujian_bing'            => $request->ujian_bing,
                'ujian_bind'            => $request->ujian_bind,
                'ujian_ipa'             => $request->ujian_ipa,
                'ujian_mtk'             => $request->ujian_mtk,
                'rapot4a'               => $request->rapot4a,
                'rapot4b'               => $request->rapot4b,
                'rapot5a'               => $request->rapot5a,
                'rapot5b'               => $request->rapot5b,
                'rapot6a'               => $request->rapot6a,
                'rapot6b'               => $request->rapot6b,
            ]);
        } else{
            DB::table('nilai_siswa')->insert([
                'id_siswa'              => Session()->get('id_user'),
                'pgm_kec'               => $pgm_kec,
                'pgm_kab'               => $pgm_kab,
                'pgm_prov'              => $pgm_prov,
                'ujian_bing'            => $request->ujian_bing,
                'ujian_bind'            => $request->ujian_bind,
                'ujian_ipa'             => $request->ujian_ipa,
                'ujian_mtk'             => $request->ujian_mtk,
                'rapot4a'               => $request->rapot4a,
                'rapot4b'               => $request->rapot4b,
                'rapot5a'               => $request->rapot5a,
                'rapot5b'               => $request->rapot5b,
                'rapot6a'               => $request->rapot6a,
                'rapot6b'               => $request->rapot6b,
            ]);
            DB::table('mfep')->insert([
                'id_siswa'              => Session()->get('id_user'),
                'pgm_kec'               => $pgm_kec,
                'pgm_kab'               => $pgm_kab,
                'pgm_prov'              => $pgm_prov,
                'ujian_bing'            => $request->ujian_bing,
                'ujian_bind'            => $request->ujian_bind,
                'ujian_ipa'             => $request->ujian_ipa,
                'ujian_mtk'             => $request->ujian_mtk,
                'rapot4a'               => $request->rapot4a,
                'rapot4b'               => $request->rapot4b,
                'rapot5a'               => $request->rapot5a,
                'rapot5b'               => $request->rapot5b,
                'rapot6a'               => $request->rapot6a,
                'rapot6b'               => $request->rapot6b,
            ]);
        }

        return redirect('siswa/datasiswa/upload_dokumen')->with(['sukses' => 'Data Nilai Siswa telah ditambah']);
    }

     // tambah upload dokumen
     public function upload_dokumen()
     {
         if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
         $data = array(  'title'             => 'Upload Dokumen Siswa',
                         'content'           => 'siswa/datasiswa/upload_dokumen'
                     );
         return view('siswa/layout/wrapper',$data);
     }

     public function upload_proses(Request $request)
     {
         if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
         request()->validate([
                             'ijazah'   => 'file|image|mimes:jpeg,png,jpg|max:2048',
                             'pgm_kec'  => 'file|image|mimes:jpeg,png,jpg|max:2048',
                             'pgm_kab'  => 'file|image|mimes:jpeg,png,jpg|max:2048',
                             'pgm_prov' => 'file|image|mimes:jpeg,png,jpg|max:2048',
                             'rapot'    => 'file|image|mimes:jpeg,png,jpg|max:2048'
                             ]);

         // UPLOAD START
        $user_id = Session()->get('id_user');
         $image                  = array('ijazah' => $request->file('ijazah'),
                                         'pgm_kec' => $request->file('pgm_kec'),
                                         'pgm_kab' => $request->file('pgm_kab'),
                                         'pgm_prov' => $request->file('pgm_prov'),
                                         'rapot' => $request->file('rapot'),
                                        );
         if(!empty($image)) {
            $filenamewithextension_ijazah  = $request->file('ijazah')->getClientOriginalName();
            $filenamewithextension_pgmkec  = $request->file('pgm_kec')->getClientOriginalName();
            $filenamewithextension_pgmkab  = $request->file('pgm_kab')->getClientOriginalName();
            $filenamewithextension_pgmprov  = $request->file('pgm_prov')->getClientOriginalName();
            $filenamewithextension_rapot  = $request->file('rapot')->getClientOriginalName();

            $filename_ijazah               = pathinfo($filenamewithextension_ijazah, PATHINFO_FILENAME);
            $filename_pgmkec               = pathinfo($filenamewithextension_pgmkec, PATHINFO_FILENAME);
            $filename_pgmkab               = pathinfo($filenamewithextension_pgmkab, PATHINFO_FILENAME);
            $filename_pgmprov              = pathinfo($filenamewithextension_pgmprov, PATHINFO_FILENAME);
            $filename_rapot                = pathinfo($filenamewithextension_rapot, PATHINFO_FILENAME);

            $ijazah = $image["ijazah"];
            $pgm_kec = $image["pgm_kec"];
            $pgm_kab = $image["pgm_kab"];
            $pgm_prov = $image["pgm_prov"];
            $rapot = $image["rapot"];

            $input_ijazah['nama_file']     = str_slug($filename_ijazah, '-').'-'.time().'.'.$ijazah->getClientOriginalExtension();
            $input_pgmkec['nama_file']     = str_slug($filename_pgmkec, '-').'-'.time().'.'.$pgm_kec->getClientOriginalExtension();
            $input_pgmkab['nama_file']     = str_slug($filename_pgmkab, '-').'-'.time().'.'.$pgm_kab->getClientOriginalExtension();
            $input_pgmprov['nama_file']    = str_slug($filename_pgmprov, '-').'-'.time().'.'.$pgm_prov->getClientOriginalExtension();
            $input_rapot['nama_file']      = str_slug($filename_rapot, '-').'-'.time().'.'.$rapot->getClientOriginalExtension();


            $destinationPath        = public_path('upload/dokumen siswa/');

            $img_ijazah = Image::make($image["ijazah"]->getRealPath(),array(
                        'width'     => 150,
                        'height'    => 150,
                        'grayscale' => false
            ));
            $img_ijazah->save($destinationPath.'/ijazah/'.$input_ijazah['nama_file']);
#############################
            $img_pgmkec = Image::make($image["pgm_kec"]->getRealPath(),array(
                        'width'     => 150,
                        'height'    => 150,
                        'grayscale' => false
            ));
            $img_pgmkec->save($destinationPath.'/piagam/'.$input_pgmkec['nama_file']);

###########################
            $img_pgmkab = Image::make($image["pgm_kab"]->getRealPath(),array(
                        'width'     => 150,
                        'height'    => 150,
                        'grayscale' => false
            ));
            $img_pgmkab->save($destinationPath.'/piagam/'.$input_pgmkab['nama_file']);

#########################
            $img_pgmprov = Image::make($image["pgm_prov"]->getRealPath(),array(
                        'width'     => 150,
                        'height'    => 150,
                        'grayscale' => false
            ));
            $img_pgmprov->save($destinationPath.'/piagam/'.$input_pgmprov['nama_file']);
########################
            $img_rapot = Image::make($image["rapot"]->getRealPath(),array(
                        'width'     => 150,
                        'height'    => 150,
                        'grayscale' => false
            ));
            $img_rapot->save($destinationPath.'/rapot/'.$input_rapot['nama_file']);

             // END UPLOAD
            if(DB::table('dok_siswa')->where('id_siswa','=', $user_id)->exists()){
                DB::table('dok_siswa')->where('id_siswa',$user_id)->delete();
                DB::table('dok_siswa')->insert([
                    'id_siswa'           => Session()->get('id_user'),
                    'ijazah'             => $input_ijazah['nama_file'],
                    'pgm_kec'            => $input_pgmkec['nama_file'],
                    'pgm_kab'            => $input_pgmkab['nama_file'],
                    'pgm_prov'           => $input_pgmprov['nama_file'],
                    'rapot'              => $input_rapot['nama_file']

                ]);
            } else{
                DB::table('dok_siswa')->insert([
                    'id_siswa'           => Session()->get('id_user'),
                    'ijazah'             => $input_ijazah['nama_file'],
                    'pgm_kec'            => $input_pgmkec['nama_file'],
                    'pgm_kab'            => $input_pgmkab['nama_file'],
                    'pgm_prov'           => $input_pgmprov['nama_file'],
                    'rapot'              => $input_rapot['nama_file']

                ]);
            }
        }else{
            DB::table('dok_siswa')->insert([
                'id_siswa'           => Session()->get('id_user'),
                'ijazah'             => NULL,
                'pgm_kec'            => NULL,
                'pgm_kab'            => NULL,
                'pgm_prov'           => NULL,
                'rapot'              => NULL
            ]);
         }
        return redirect('siswa/datasiswa/done_datasiswa')->with(['sukses' => 'Data Nilai Siswa telah ditambah']);
    }
    // data siswa done
    public function done_datasiswa()
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $user_id = Session()->get('id_user');
        $datasiswa = DB::table('datasiswa')->where('datasiswa.id_siswa','=', $user_id)
                    ->join('ortu_siswa', 'ortu_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
                    ->join('nilai_siswa', 'nilai_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
                    ->join('dok_siswa', 'dok_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
                    ->select('datasiswa.*', 'ortu_siswa.*','nilai_siswa.*'
                            , 'dok_siswa.ijazah AS ijazah', 'dok_siswa.pgm_kec AS dok_pgm_kec', 'dok_siswa.pgm_kab AS dok_pgm_kab','dok_siswa.pgm_prov AS dok_pgm_prov',
                            'dok_siswa.rapot AS rapot')
                    ->orderBy('datasiswa.id_siswa','DESC')
                    ->paginate(20);

		$data = array(  'title'       => 'Data Siswa',
						'datasiswa'   => $datasiswa,
                        'content'     => 'siswa/datasiswa/data_siswa'
                    );
        return view('siswa/layout/wrapper',$data);
    }
     // data siswa done
     public function view_datasiswa()
     {
         if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
         $user_id = Session()->get('id_user');
         $datasiswa = DB::table('datasiswa')->where('datasiswa.id_siswa','=', $user_id)
                     ->join('ortu_siswa', 'ortu_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
                     ->join('nilai_siswa', 'nilai_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
                     ->join('dok_siswa', 'dok_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
                     ->select('datasiswa.*', 'ortu_siswa.*','nilai_siswa.*'
                             , 'dok_siswa.ijazah AS ijazah', 'dok_siswa.rapot AS rapot','dok_siswa.pgm_kec AS dok_pgm_kec', 'dok_siswa.pgm_kab AS dok_pgm_kab','dok_siswa.pgm_prov AS dok_pgm_prov')
                     ->orderBy('datasiswa.id_siswa','DESC')
                     ->paginate(20);

         $data = array(  'title'       => 'Data Siswa',
                         'datasiswa'   => $datasiswa,
                         'content'     => 'siswa/datasiswa/view_datasiswa'
                     );
         return view('siswa/layout/wrapper',$data);
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
        return redirect('siswa/datasiswa')->with(['sukses' => 'Data telah ditambah']);
    }

    // Delete
    public function delete($id_produk)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        DB::table('produk')->where('id_produk',$id_produk)->delete();
        return redirect('siswa/datasiswa')->with(['sukses' => 'Data telah dihapus']);
    }
}
