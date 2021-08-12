<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mfep_model extends Model
{

	protected $table 		= "mfep";
	protected $primaryKey 	= 'id';

    // listing
    public function semua()
    {
        $query = DB::table('mfep')
            ->join('datasiswa', 'datasiswa.id_siswa', '=', 'mfep.id_siswa','LEFT')
            ->join('nilai_siswa', 'nilai_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
            ->join('dok_siswa', 'dok_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
            ->join('ortu_siswa', 'ortu_siswa.id_siswa', '=', 'datasiswa.id_siswa','LEFT')
            ->select('mfep.*','datasiswa.*', 'ortu_siswa.*','nilai_siswa.*'
                            , 'dok_siswa.ijazah AS ijazah', 'dok_siswa.pgm_kec AS dok_pgm_kec', 'dok_siswa.pgm_kab AS dok_pgm_kab','dok_siswa.pgm_prov AS dok_pgm_prov')
            ->whereNull('datasiswa.id_kelas')
            ->whereNotNull('nilai_siswa.id_nilai')
            ->orderBy('datasiswa.id_siswa','DESC')
            ->get();
        return $query;
    }

    public function getdatasiswa($tahun_ajaran){
        $query =DB::table('mfep')
            ->join('datasiswa', 'datasiswa.id_siswa', '=', 'mfep.id_siswa','LEFT')
            ->select('mfep.*', 'datasiswa.*')
            ->where('datasiswa.tahun_ajaran',$tahun_ajaran)
            ->orderBy('datasiswa.id_siswa','DESC')
            ->get();
        return $query;
    }

    // listing
    public function cari($keywords)
    {
        $query = DB::table('mfep')
            ->join('datasiswa', 'datasiswa.id_siswa', '=', 'mfep.id_siswa','LEFT')
            ->select('mfep.*', 'datasiswa.*')
            ->where('datasiswa.nama', 'LIKE', "%{$keywords}%")
            ->orWhere('datasiswa.alamat', 'LIKE', "%{$keywords}%")
            ->orderBy('datasiswa.id_siswa','DESC')
            ->get();
        return $query;
    }

    // listing
    public function listing()
    {
    	$query = DB::table('produk')
            ->join('kategori_produk', 'kategori_produk.id_kategori_produk', '=', 'produk.id_kategori_produk','LEFT')
            ->select('produk.*', 'kategori_produk.slug_kategori_produk', 'kategori_produk.nama_kategori_produk')
            ->where('status_produk','Publish')
            ->orderBy('id_produk','DESC')
            ->paginate(9);
        return $query;
    }

    // kategori
    public function kategori_produk($id_kategori_produk)
    {
        $query = DB::table('produk')
            ->join('kategori_produk', 'kategori_produk.id_kategori_produk', '=', 'produk.id_kategori_produk','LEFT')
            ->select('produk.*', 'kategori_produk.slug_kategori_produk', 'kategori_produk.nama_kategori_produk')
            ->where(array(  'produk.status_produk'         => 'Publish',
                            'produk.id_kategori_produk'    => $id_kategori_produk))
            ->orderBy('id_produk','DESC')
            ->get();
        return $query;
    }

    // kategori
    public function all_kategori_produk($id_kategori_produk)
    {
        $query = DB::table('produk')
            ->join('kategori_produk', 'kategori_produk.id_kategori_produk', '=', 'produk.id_kategori_produk','LEFT')
            ->select('produk.*', 'kategori_produk.slug_kategori_produk', 'kategori_produk.nama_kategori_produk')
            ->where(array(  'produk.id_kategori_produk'    => $id_kategori_produk))
            ->orderBy('id_produk','DESC')
            ->get();
        return $query;
    }

    // kategori
    public function status_produk($status_produk)
    {
        $query = DB::table('produk')
            ->join('kategori_produk', 'kategori_produk.id_kategori_produk', '=', 'produk.id_kategori_produk','LEFT')
            ->select('produk.*', 'kategori_produk.slug_kategori_produk', 'kategori_produk.nama_kategori_produk')
            ->where(array(  'produk.status_produk'         => $status_produk))
            ->orderBy('id_produk','DESC')
            ->get();
        return $query;
    }

    // kategori
    public function detail_kategori_produk($id_kategori_produk)
    {
        $query = DB::table('produk')
            ->join('kategori_produk', 'kategori_produk.id_kategori_produk', '=', 'produk.id_kategori_produk','LEFT')
            ->select('produk.*', 'kategori_produk.slug_kategori_produk', 'kategori_produk.nama_kategori_produk')
            ->where(array(  'produk.status_produk'         => 'Publish',
                            'produk.id_kategori_produk'    => $id_kategori_produk))
            ->orderBy('id_produk','DESC')
            ->first();
        return $query;
    }

    // kategori
    public function detail_slug_kategori_produk($slug_kategori_produk)
    {
        $query = DB::table('produk')
            ->join('kategori_produk', 'kategori_produk.id_kategori_produk', '=', 'produk.id_kategori_produk','LEFT')
            ->select('produk.*', 'kategori_produk.slug_kategori_produk', 'kategori_produk.nama_kategori_produk')
            ->where(array(  'produk.status_produk'                  => 'Publish',
                            'kategori_produk.slug_kategori_produk'  => $slug_kategori_produk))
            ->orderBy('id_produk','DESC')
            ->first();
        return $query;
    }


    // kategori
    public function slug_kategori_produk($slug_kategori_produk)
    {
        $query = DB::table('produk')
            ->join('kategori_produk', 'kategori_produk.id_kategori_produk', '=', 'produk.id_kategori_produk','LEFT')
            ->select('produk.*', 'kategori_produk.slug_kategori_produk', 'kategori_produk.nama_kategori_produk')
            ->where(array(  'produk.status_produk'                  => 'Publish',
                            'kategori_produk.slug_kategori_produk'  => $slug_kategori_produk))
            ->orderBy('id_produk','DESC')
            ->get();
        return $query;
    }

    // detail
    public function read($slug_produk)
    {
        $query = DB::table('produk')
            ->join('kategori_produk', 'kategori_produk.id_kategori_produk', '=', 'produk.id_kategori_produk','LEFT')
            ->select('produk.*', 'kategori_produk.slug_kategori_produk', 'kategori_produk.nama_kategori_produk')
            ->where('produk.slug_produk',$slug_produk)
            ->orderBy('id_produk','DESC')
            ->first();
        return $query;
    }

     // detail
    public function detail($id_produk)
    {
        $query = DB::table('produk')
            ->join('kategori_produk', 'kategori_produk.id_kategori_produk', '=', 'produk.id_kategori_produk','LEFT')
            ->select('produk.*', 'kategori_produk.slug_kategori_produk', 'kategori_produk.nama_kategori_produk')
            ->where('produk.id_produk',$id_produk)
            ->orderBy('id_produk','DESC')
            ->first();
        return $query;
    }

    // Gambar
    public function gambar($id_produk)
    {
        $query = DB::table('gambar_produk')
            ->select('*')
            ->where('gambar_produk.id_produk',$id_produk)
            ->orderBy('id_produk','DESC')
            ->get();
        return $query;
    }
}
