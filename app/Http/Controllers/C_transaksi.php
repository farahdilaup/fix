<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_transaksi extends Controller
{
    // method untuk edit data pegawai
    public function editeks($id)
    {
        $buku = DB::table('buku')->get();
        $eksemplar_buku = DB::table('eksemplar_buku')->where('Kode_buku',$id)->get();
        return view('Eksemplar/edit',['eksemplar_buku' => $eksemplar_buku,'buku'=> $buku]);
    }
     // update data eksemplar_buku
    public function updateeks(Request $request)
    {
        DB::table('eksemplar_buku')->where('Kode_buku',$request->id)->update([
        'No_ISBN'=> $request->No_ISBN,
        'Status_eksemplar_buku' => $request->Status_eksemplar_buku,
        'Kondisi_eksemplar_buku' => $request->Kondisi_eksemplar_buku
        ]);
        // alihkan halaman ke halaman eksemplar_buku
        return redirect('/eksemplar');
    }
 
    // method untuk hapus data eksemplar_buku
    public function hapuseks($id)
    {
        // menghapus data eksemplar_buku berdasarkan id yang dipilih
        DB::table('eksemplar_buku')->where('Kode_buku',$id)->delete();
        
        // alihkan halaman ke halaman eksemplar_buku
        return redirect('/eksemplar');
    }  

    // tambah data penerbit 

    public function editpenerbit($id)
    {
        $penerbit = DB::table('penerbit')->where('Id_penerbit',$id)->get();
        return view('Penerbit/edit',['penerbit' => $penerbit]);
    }

    public function updatepenerbit(Request $request)
    {
        DB::table('penerbit')->where('Id_penerbit',$request->id)->update([
         'Nama_penerbit' => $request->Nama_penerbit,
        'Alamat_penerbit' => $request->Alamat_penerbit,
        'No_tlp_penerbit' => $request->No_tlp_penerbit,
        'Email_penerbit' => $request->Email_penerbit
        ]);
        // alihkan halaman ke halaman eksemplar_buku
        return redirect('/penerbit');
    }
 
    // method untuk hapus data penerbit_buku
    public function hapuspenerbit($id)
    {
        // menghapus data penerbit_buku berdasarkan id yang dipilih
        DB::table('penerbit')->where('Id_penerbit',$id)->delete();
        
        // alihkan halaman ke halaman penerbit_buku
        return redirect('/penerbit');
    }  

    //tambah data anggota 

    public function editanggota($id)
    {
        $anggota = DB::table('anggota')->where('NIS_NIP',$id)->get();
        return view('Anggota/edit',['anggota' => $anggota]);
    }

    public function updateanggota(Request $request)
    {
        DB::table('anggota')->where('NIS_NIP',$request->id)->update([
        'Nama_anggota' => $request->Nama_anggota,
        'Tahun_masuk' => $request->Tahun_masuk,
        'Kelas' => $request->Kelas,
        'Username_anggota' => $request->Username_anggota,
        'Password_anggota' => $request->Password_anggota,
        'Status_anggota' => $request->Status_anggota
        ]);
        // alihkan halaman ke halaman eksemplar_buku
        return redirect('/anggota');
    }
 
    // method untuk hapus data anggota_buku
    public function hapusanggota($id)
    {
        // menghapus data penerbit_buku berdasarkan id yang dipilih
        DB::table('anggota')->where('NIS_NIP',$id)->delete();
        
        // alihkan halaman ke halaman anggota_buku
        return redirect('/anggota');
    }  
    

    // tambah data peminjaman

    public function editpeminjaman($id)
    {
        $peminjaman = DB::table('peminjaman')->get();
        $anggota = DB::table('anggota')->get();
        $pegawai = DB::table('pegawai')->get();
        $peminjaman = DB::table('peminjaman')->where('Id_peminjaman',$id)->get();
        return view('peminjaman/edit',['peminjaman' => $peminjaman,'anggota' => $anggota,'pegawai' => $pegawai]);
    }

    public function updatepeminjaman(Request $request)
    {
        DB::table('peminjaman')->where('Id_peminjaman',$request->id)->update([
        'NIS_NIP' => $request->NIS_NIP,
        'NIP' => $request->NIP,
        'Jumlah_buku' => $request->Jumlah_buku,
        'Tanggal_peminjaman' => $request->Tanggal_peminjaman
        ]);
        // alihkan halaman ke halaman eksemplar_buku
        return redirect('/peminjaman');
    }
 
    // method untuk hapus data penerbit_buku
    public function hapuspeminjaman($id)
    {
        // menghapus data peminjaman_buku berdasarkan id yang dipilih
        DB::table('peminjaman')->where('Id_peminjaman',$id)->delete();
        
        // alihkan halaman ke halaman peminjaman_buku
        return redirect('/peminjaman');
    }  


    // tambah data detail peminjaman 

    public function editdetpinjam($id)
    {
        $eksemplar_buku = DB::table('eksemplar_buku')->get();
        $peminjaman = DB::table('peminjaman')->get();
        $detail_peminjaman = DB::table('detail_peminjaman')->where('Id_peminjaman',$id)->get();
        return view('Detpinjam/edit',['detail_peminjaman' => $detail_peminjaman,'eksemplar_buku' => $eksemplar_buku,'peminjaman' => $peminjaman]);
    }

    public function updatedetpinjam(Request $request)
    {
        DB::table('detail_peminjaman')->where('Id_peminjaman',$request->id)->update([
        'Kode_buku' => $request->Kode_buku,
        'Id_peminjaman' => $request->Id_peminjaman,
        'Status_peminjaman' => $request->Status_peminjaman,
        'Denda_perbuku' => $request->Denda_perbuku,
        'Tanggal_haruskembali' => $request->Tanggal_haruskembali,
        'Tanggal_kembali' => $request->Tanggal_kembali,
        'Perpanjangan' => $request->Perpanjangan,
        'Status_verifikasi' => $request->Status_verifikasi
        ]);
        // alihkan halaman ke halaman eksemplar_buku
        return redirect('/detpinjam');
    }

    public function editdetpinjam1($id)
    {
        $eksemplar_buku = DB::table('eksemplar_buku')->get();
        $peminjaman = DB::table('peminjaman')->get();
        $detail_peminjaman = DB::table('detail_peminjaman')->where('Id_peminjaman',$id)->get();
        return view('Detpinjam/pengembalian',['detail_peminjaman' => $detail_peminjaman,'eksemplar_buku' => $eksemplar_buku,'peminjaman' => $peminjaman]);
    }

    public function updatedetpinjam1(Request $request)
    {
        DB::table('detail_peminjaman')->where('Id_peminjaman',$request->id)->update([
        'Kode_buku' => $request->Kode_buku,
        'Id_peminjaman' => $request->Id_peminjaman,
        'Status_peminjaman' => $request->Status_peminjaman,
        'Denda_perbuku' => $request->Denda_perbuku,
        'Tanggal_haruskembali' => $request->Tanggal_haruskembali,
        'Tanggal_kembali' => $request->Tanggal_kembali,
        'Perpanjangan' => $request->Perpanjangan,
        'Status_verifikasi' => $request->Status_verifikasi
        ]);
        // alihkan halaman ke halaman eksemplar_buku
        return redirect('/detpinjam');
    }
 
    // method untuk hapus data penerbit_buku
    public function hapusdetpinjam($id)
    {
        // menghapus data detail_peminjaman_buku berdasarkan id yang dipilih
        DB::table('detail_peminjaman')->where('Id_peminjaman',$id)->delete();
        
        // alihkan halaman ke halaman detail_peminjaman_buku
        return redirect('/detpinjam');
    }  

    // tambah data penerimaan 

        public function editpenerimaan($id)
    {
        $asal = DB::table('asal')->get();
        $pegawai = DB::table('pegawai')->get();
        $penerimaan = DB::table('penerimaan')->where('Id_penerimaan',$id)->get();
        return view('penerimaan/edit',['penerimaan' => $penerimaan,'asal' => $asal, 'pegawai' => $pegawai]);
    }

    public function updatepenerimaan(Request $request)
    {
        DB::table('penerimaan')->where('Id_penerimaan',$request->id)->update([
        'NIP' => $request->NIP,
        'Id_asal' => $request->Id_asal,
        'Tanggal_penerimaan' => $request->Tanggal_penerimaan,
        'Jumlah_buku_diterima' => $request->Jumlah_buku_diterima,
        'Keterangan' => $request->Keterangan
        ]);
        // alihkan halaman ke halaman eksemplar_buku
        return redirect('/penerimaan');
    }
 
    // method untuk hapus data penerbit_buku
    public function hapuspenerimaan($id)
    {
        // menghapus data penerimaan_buku berdasarkan id yang dipilih
        DB::table('penerimaan')->where('Id_penerimaan',$id)->delete();
        
        // alihkan halaman ke halaman detail_peminjaman_buku
        return redirect('/penerimaan');
    }  


    // tambah data detail penerimaan 

     public function editdetterima($id)
    {
        $penerimaan = DB::table('penerimaan')->get();
        $buku = DB::table('buku')->get();
        $detail_penerimaan = DB::table('detail_penerimaan')->where('Id_penerimaan',$id)->get();
        return view('Detterima/edit',['detail_penerimaan' => $detail_penerimaan,'penerimaan' => $penerimaan, 'buku'=> $buku]);
    }

    public function updatedetterima(Request $request)
    {
        DB::table('detail_penerimaan')->where('Id_penerimaan',$request->id)->update([
        'Id_penerimaan' => $request->Id_penerimaan,
        'No_ISBN' => $request->No_ISBN,
        'Jumlah_eksemplar_perbuku' => $request->Jumlah_eksemplar_perbuku
        ]);
        // alihkan halaman ke halaman eksemplar_buku
        return redirect('/detterima');
    }
 
    // method untuk hapus data penerbit_buku
    public function hapusdetterima($id)
    {
        // menghapus data detail_penerimaan_buku berdasarkan id yang dipilih
        DB::table('detail_penerimaan')->where('Id_penerimaan',$id)->delete();
        
        // alihkan halaman ke halaman detail_peminjaman_buku
        return redirect('/detterima');
    }  


    // tambah data penggantian 

    public function editpenggantian($id)
    {
        $eksemplar_buku = DB::table('eksemplar_buku')->get();
        $peminjaman = DB::table('peminjaman')->get();
        $asal = DB::table('asal')->get();
        $pegawai = DB::table('pegawai')->get();
        $penggantian_buku = DB::table('penggantian_buku')->where('Id_penggantian',$id)->get();
        return view('Penggantian/edit',['penggantian_buku' => $penggantian_buku,'eksemplar_buku' => $eksemplar_buku,'peminjaman' => $peminjaman]);
    }

    public function updatepenggantian(Request $request)
    {
        DB::table('penggantian_buku')->where('Id_penggantian',$request->id)->update([
        'Kode_buku' => $request->Kode_buku,
        'Id_peminjaman' => $request->Id_peminjaman,
        'Jenis_penggantian' => $request->Jenis_penggantian,
        'Jumlah_uang_buku' => $request->Jumlah_uang_buku
        ]);
        // alihkan halaman ke halaman eksemplar_buku
        return redirect('/penggantian');
    }
 
    // method untuk hapus data penerbit_buku
    public function hapuspenggantian($id)
    {
        // menghapus data penggantian_buku berdasarkan id yang dipilih
        DB::table('penggantian_buku')->where('Id_penggantian',$id)->delete();
        
        // alihkan halaman ke halaman detail_peminjaman_buku
        return redirect('/penggantian');
    } 

        //tambah data buku

    public function editbuku($id)
    {
        $penerbit = DB::table('penerbit')->get();
        $jenis_buku = DB::table('jenis_buku')->get();
        $bahasa = DB::table('bahasa')->get();
        $buku = DB::table('buku')->where('No_ISBN',$id)->get();
        return view('Buku/edit',['buku' => $buku,'penerbit' => $penerbit, 'jenis_buku' => $jenis_buku, 'bahasa' => $bahasa]);
    }

    public function updatebuku(Request $request)
    {
        DB::table('buku')->where('No_ISBN',$request->id)->update([
        'No_ISBN'=> $request->No_ISBN,
        'Id_penerbit' => $request->Id_penerbit,
        'Id_jenis' => $request->Id_jenis,
        'Id_bahasa' => $request->Id_bahasa,
        'Judul_buku' => $request->Judul_buku,
        'Tahun_terbit' => $request->Tahun_terbit,
        'Penulis' => $request->Penulis,
        'Cetakan' => $request->Cetakan,
        'Harga' => $request->Harga,
        'Jumlah_eksemplar' => $request->Jumlah_eksemplar,
        'Kategori_buku' => $request->Kategori_buku,
        'Status' => $request->Status
        ]);
        // alihkan halaman ke halaman eksemplar_buku
        return redirect('/buku');
    }
 
    // method untuk hapus data penerbit_buku
    public function hapusbuku($id)
    {
        // menghapus data buku_buku berdasarkan id yang dipilih
        DB::table('buku')->where('No_ISBN',$id)->delete();
        
        // alihkan halaman ke halaman detail_peminjaman_buku
        return redirect('/buku');
    } 

    

}
    
