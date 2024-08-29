<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use PDF;

class C_publik extends Controller
{

    public function anggotaindex()
    {
        $anggota = DB::table('anggota')->get();
        return view('Anggota/index',['anggota' => $anggota]);
    }  

    public function bukuindex()
    {
    	$buku = DB::table('buku')->get();
    	return view('Buku/index',['buku' => $buku]);
    }  

    public function bukuindex1()
    {
        $buku = DB::table('buku')->get();
        return view('Buku/index1',['buku' => $buku]);
    }  

    public function eksindex()
    {
    	$eksemplar_buku = DB::table('eksemplar_buku')->get();
    	return view('Eksemplar/index',['eksemplar_buku' => $eksemplar_buku]);
    } 

    public function jenisindex()
    {
    	$jenis_buku = DB::table('jenis_buku')->get();
    	return view('Jenis_buku/index',['jenis_buku' => $jenis_buku]);
    } 

    public function penerbitindex()
    {
    	$penerbit = DB::table('penerbit')->get();
    	return view('Penerbit/index',['penerbit' => $penerbit]);
    }

    public function peminjamanindex()
    {
        $peminjaman = DB::table('peminjaman')->get();
        return view('Peminjaman/index',['peminjaman' => $peminjaman]);
    } 

    public function cetakpinjam_pdf()
    {
        $peminjaman = DB::table('peminjaman')->get();
        $pdf = PDF::loadview('Peminjaman/peminjaman_pdf',['peminjaman'=>$peminjaman]);
        return $pdf->download('laporan-peminjaman-pdf');
    }

    public function penerimaanindex()
    {
        $penerimaan = DB::table('penerimaan')->get();
        return view('Penerimaan/index',['penerimaan' => $penerimaan]);
    } 

    public function cetakterima_pdf()
    {
        $penerimaan = DB::table('penerimaan')->get();
        $pdf = PDF::loadview('Penerimaan/penerimaan_pdf',['penerimaan'=>$penerimaan]);
        return $pdf->download('laporan-penerimaan-pdf');
    }

    public function penggantianindex()
    {
        $penggantian_buku = DB::table('penggantian_buku')->get();
        return view('Penggantian/index',['penggantian_buku' => $penggantian_buku]);
    }  

    public function cetakganti_pdf()
    {
        $penggantian_buku = DB::table('penggantian_buku')->get();
        $pdf = PDF::loadview('Penggantian/penggantian_pdf',['penggantian_buku'=>$penggantian_buku]);
        return $pdf->download('laporan-penggantian-pdf');
    }

    public function detpinjamindex()
    {
        $detail_peminjaman = DB::table('detail_peminjaman')->get();
        return view('Detpinjam/index',['detail_peminjaman' => $detail_peminjaman]);
    }   

    public function detpinjamindex1()
    {
        $detail_peminjaman = DB::table('detail_peminjaman')->get();
        return view('Detpinjam/index1',['detail_peminjaman' => $detail_peminjaman]);
    } 

    public function detterimaindex()
    {
        $detail_penerimaan = DB::table('detail_penerimaan')->get();
        return view('Detterima/index',['detail_penerimaan' => $detail_penerimaan]);
    } 

    //tambah data buku
    public function tambahbuku()
    {
        $buku = DB::table('buku')->get();
        $penerbit = DB::table('penerbit')->get();
        $jenis_buku = DB::table('jenis_buku')->get();
        $bahasa = DB::table('bahasa')->get();
        return view('/Buku/tambah',['buku' => $buku, 'penerbit' => $penerbit, 'jenis_buku' => $jenis_buku, 'bahasa' => $bahasa]);
    }
    public function storebuku(Request $request)
    {
       $insert=DB::table('buku')->insert([
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
    
        return redirect('/buku');
    }
    public function showbuku($No_ISBN)
    {
    }


    //tambah data eksemplar

    public function tambaheks()
    {
        $buku = DB::table('buku')->get();
        $eksemplar_buku = DB::table('eksemplar_buku')->get();
        return view('Eksemplar/tambah',['buku' => $buku, 'eksemplar_buku' => $eksemplar_buku]);
    }
    public function storeeks(Request $request)
    {
       $insert=DB::table('eksemplar_buku')->insert([
        'No_ISBN'=> $request->No_ISBN,
        'Status_eksemplar_buku' => $request->Status_eksemplar_buku,
        'Kondisi_eksemplar_buku' => $request->Kondisi_eksemplar_buku
      ]);
        return redirect('/eksemplar');
    }
    public function showeks($Kode_buku)
    {
    }


    // tambah data penerbit 

    public function tambahpenerbit()
    {
        $penerbit = DB::table('penerbit')->get();
        return view('Penerbit/tambah',['penerbit' => $penerbit]);
    }
    public function storepenerbit(Request $request)
    {
       $insert=DB::table('penerbit')->insert([
        'Nama_penerbit' => $request->Nama_penerbit,
        'Alamat_penerbit' => $request->Alamat_penerbit,
        'No_tlp_penerbit' => $request->No_tlp_penerbit,
        'Email_penerbit' => $request->Email_penerbit
      ]);
        return redirect('/penerbit');
    }
    public function showpenerbit($Id_penerbit)
    {
    }

    //tambah anggota 
    public function tambahanggota()
    {
        $anggota = DB::table('anggota')->get();
        return view('Anggota/tambah',['anggota' => $anggota]);
    }
    public function storeanggota(Request $request)
    {
       $insert=DB::table('anggota')->insert([
        'Nama_anggota' => $request->Nama_anggota,
        'Tahun_masuk' => $request->Tahun_masuk,
        'Kelas' => $request->Kelas,
        'Username_anggota' => $request->Username_anggota,
        'Password_anggota' => $request->Password_anggota,
        'Status_anggota' => $request->Status_anggota
      ]);
        return redirect('/anggota');
    }
    public function showanggota($NIS_NIP)
    {
    }

    // tambah data peminjaman

    public function tambahpeminjaman()
    {
        $peminjaman = DB::table('peminjaman')->get();
        $anggota = DB::table('anggota')->get();
        $pegawai = DB::table('pegawai')->get();
        return view('Peminjaman/tambah',['peminjaman' => $peminjaman,'anggota' => $anggota,'pegawai' => $pegawai]);
    }
    public function storepeminjaman(Request $request)
    {
       $insert=DB::table('peminjaman')->insert([
        'NIS_NIP' => $request->NIS_NIP,
        'NIP' => $request->NIP,
        'Jumlah_buku' => $request->Jumlah_buku,
        'Tanggal_peminjaman' => $request->Tanggal_peminjaman
      ]);
        return redirect('/detpinjam/tambah');
    }
    public function showpeminjaman($Id_peminjaman)
    {
    }

    // tambah data detail peminjaman 

    public function tambahdetpinjam()
    {
        $detail_peminjaman = DB::table('detail_peminjaman')->get();
        $eksemplar_buku = DB::table('eksemplar_buku')->get();
        $peminjaman = DB::table('peminjaman')->get();
        return view('Detpinjam/tambah',['detail_peminjaman' => $detail_peminjaman,'eksemplar_buku' => $eksemplar_buku,'peminjaman' => $peminjaman]);
    }
    public function storedetpinjam(Request $request)
    {
       $insert=DB::table('detail_peminjaman')->insert([
        'Kode_buku' => $request->Kode_buku,
        'Id_peminjaman' => $request->Id_peminjaman,
        'Status_peminjaman' => $request->Status_peminjaman,
        'Denda_perbuku' => $request->Denda_perbuku,
        'Tanggal_haruskembali' => $request->Tanggal_haruskembali,
        'Tanggal_kembali' => $request->Tanggal_kembali,
        'Perpanjangan' => $request->Perpanjangan,
        'Status_verifikasi' => $request->Status_verifikasi
      ]);
        return redirect('/detpinjam/tambah1');
    }
    public function showdetpinjam($Id_penerbit)
    {
    }

    public function tambahdetpinjam1()
    {
        $detail_peminjaman = DB::table('detail_peminjaman')->get();
        $eksemplar_buku = DB::table('eksemplar_buku')->get();
        $peminjaman = DB::table('peminjaman')->get();
        return view('Detpinjam/tambah1',['detail_peminjaman' => $detail_peminjaman,'eksemplar_buku' => $eksemplar_buku,'peminjaman' => $peminjaman]);
    }
    public function storedetpinjam1(Request $request)
    {
       $insert=DB::table('detail_peminjaman')->insert([
        'Kode_buku' => $request->Kode_buku,
        'Id_peminjaman' => $request->Id_peminjaman,
        'Status_peminjaman' => $request->Status_peminjaman,
        'Denda_perbuku' => $request->Denda_perbuku,
        'Tanggal_haruskembali' => $request->Tanggal_haruskembali,
        'Tanggal_kembali' => $request->Tanggal_kembali,
        'Perpanjangan' => $request->Perpanjangan,
        'Status_verifikasi' => $request->Status_verifikasi
      ]);
        return redirect('/detpinjam');
    }
    public function showdetpinjam1($Id_penerbit)
    {
    }


    // tambah data penerimaan 

    public function tambahpenerimaan()
    {
        $penerimaan = DB::table('penerimaan')->get();
        $asal = DB::table('asal')->get();
        $pegawai = DB::table('pegawai')->get();
        return view('Penerimaan/tambah',['penerimaan' => $penerimaan,'asal' => $asal, 'pegawai' => $pegawai]);
    }
    public function storepenerimaan(Request $request)
    {
       $insert=DB::table('penerimaan')->insert([
        'NIP' => $request->NIP,
        'Id_asal' => $request->Id_asal,
        'Tanggal_penerimaan' => $request->Tanggal_penerimaan,
        'Jumlah_buku_diterima' => $request->Jumlah_buku_diterima,
        'Keterangan' => $request->Keterangan
      ]);
        return redirect('/detterima/tambah');
    }
    public function showpenerimaan($Id_penerimaan)
    {
    }


    // tambah data detail penerimaan 

    public function tambahdetterima()
    {
        $detail_penerimaan = DB::table('detail_penerimaan')->get();
        $penerimaan = DB::table('penerimaan')->get();
        $buku = DB::table('buku')->get();
        return view('Detterima/tambah',['detail_penerimaan' => $detail_penerimaan,'penerimaan' => $penerimaan, 'buku'=> $buku]);
    }
    public function storedetterima(Request $request)
    {
       $insert=DB::table('detail_penerimaan')->insert([
        'Id_penerimaan' => $request->Id_penerimaan,
        'No_ISBN' => $request->No_ISBN,
        'Jumlah_eksemplar_perbuku' => $request->Jumlah_eksemplar_perbuku
      ]);
        return redirect('/detterima');
    }
    public function showdetterima($Id_penerimaan)
    {
    }


    // tambah data penggantian 

    public function tambahpenggantian()
    {
        $penggantian_buku = DB::table('penggantian_buku')->get();
        $eksemplar_buku = DB::table('eksemplar_buku')->get();
        $peminjaman = DB::table('peminjaman')->get();
        return view('Penggantian/tambah',['penggantian_buku' => $penggantian_buku,'eksemplar_buku' => $eksemplar_buku,'peminjaman' => $peminjaman]);
    }
    public function storepenggantian(Request $request)
    {
       $insert=DB::table('penggantian_buku')->insert([
        'Kode_buku' => $request->Kode_buku,
        'Id_peminjaman' => $request->Id_peminjaman,
        'Jenis_penggantian' => $request->Jenis_penggantian,
        'Jumlah_uang_buku' => $request->Jumlah_uang_buku
      ]);
        return redirect('/penggantian');
    }
    public function showpenggantian($Id_penggantian)
    {
    }
}
