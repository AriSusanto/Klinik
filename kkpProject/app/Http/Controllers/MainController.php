<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Hash; //bila memakai hash
use App\TblDaftar;
use App\TblAnak;
use App\TblGigi;
use App\TblPasien;
use App\TblRiwayat;
use App\TblObat;
use App\TblKamar;
use Illuminate\Support\Facades\Validator; // Untuk menggantikan required

class MainController extends Controller
{
    //
    function ibuanak()
    {
        $data = TblAnak::all();
    return view('home.ibuanak',["list_anak"=>$data]);
        
    }

    function gigi()
    {
        $data = TblGigi::all();
    return view('home.gigi',["list_gigi"=>$data]);
    }

     function register()
    {
    	return view('home.register');
    }

    function beranda()
    {
        return view('home.beranda');
    }

    function apotik()
    {
        $data = TblObat::all();
    return view('home.apotik',["list_obat"=>$data]);
    }

    function pesanan()
    {
        return view('home.pesanan');
    }

    function obat()
    {
        return view('home.obat');
    }

    function login()
    {
    	return view('home.login');
    }

    function gabung()
    {
        $kamar_pas= TblKamar::all();

        return view::make('kamar')->with('kamar',$kamar_pas);
    }

    function pasien()
    {
         $data = TblPasien::all();
    return view('home.pasien',["list_pasien"=>$data]);
    }

    function dokter()
    {
        $data = TblPasien::all();
    return view('home.dokter',["list_pasien"=>$data]);
    }

    function info_pasien()
    {
      /* $data = TblRiwayat::all();
    return view('home.info_pasien',["list_pasien"=>$data]); */

    TblRiwayat::join('tblpasien','tblriwayat.nama_pas','tblpasien.jenis_kelamin');
    $data = TblRiwayat::all();
    return view('home.info_pasien',["list_pasien"=>$data]);

    }

    function proses_daftar(Request $request)
    {
    	$nama = $request -> input("nama");
    	$email = $request -> input("email");
    	$password = Hash::make ($request -> input("password")); //hash untuk enkripsi

    	// input data ke database
    	$data = new TblDaftar;
    	$data->nama = $nama;
    	$data->email = $email;
    	$data->password = $password;
        $data->akses = 'user';
    	$data->save(); // = menggantikan insert into ...

    	return redirect('login'); // untuk pindah ke form login
    }

    function proses_login(Request $request)
    {
    	$email = $request -> input("email");
    	$password = $request->input("password");

    	//cek login
    	if(Auth::attempt(['email'=>$email, 'password'=>$password]))
    		{
    			// login sukses
    			return redirect('/beranda');
    		}
    		else
    		{
    			//Login gagal
    			$request->Session()->flash("status", 0);
    			return redirect('/login');
    		}
    }

     function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    function proses_simpan_pasien(Request $request)
    {
        $nama_pasien   = $request->input("nama_pasien");
        $jenis_kelamin = $request->input("jenis_kelamin");
        $umur          = $request->input("umur");
        $alamat_pasien = $request->input("alamat_pasien");
        $telepon       = $request->input("telepon");

        $data = new TblPasien;
        $data->nama_pasien = $nama_pasien;
        $data->jenis_kelamin = $jenis_kelamin;
        $data->umur = $umur;
        $data->alamat_pasien = $alamat_pasien;
        $data->telepon = $telepon;
        $data->save();

        return redirect('/pasien');
    }

    function proses_simpan_pasien_gigi(Request $request)
    {
        $nama_pasien   = $request->input("nama_pasien");
        $jenis_kelamin = $request->input("jenis_kelamin");
        $umur          = $request->input("umur");
        $alamat_pasien = $request->input("alamat_pasien");
        $telepon       = $request->input("telepon");

        $data = new TblGigi;
        $data->nama_pasien = $nama_pasien;
        $data->jenis_kelamin = $jenis_kelamin;
        $data->umur = $umur;
        $data->alamat_pasien = $alamat_pasien;
        $data->telepon = $telepon;
        $data->save();

        return redirect('/gigi');
    }

    function proses_simpan_pasien_anak(Request $request)
    {
        $nama_pasien   = $request->input("nama_pasien");
        $jenis_kelamin = $request->input("jenis_kelamin");
        $umur          = $request->input("umur");
        $alamat_pasien = $request->input("alamat_pasien");
        $telepon       = $request->input("telepon");

        $data = new TblAnak;
        $data->nama_pasien = $nama_pasien;
        $data->jenis_kelamin = $jenis_kelamin;
        $data->umur = $umur;
        $data->alamat_pasien = $alamat_pasien;
        $data->telepon = $telepon;
        $data->save();

        return redirect('/ibuanak');
    }


    /*function data_pasien()
    {
          $data = TblPasien::all();
    return view('home.pasien',["list_pasien"=>$data]);
    }*/

   function proses_update_pasien(Request $request)
   {
        $id             = $request->input("id");
        $nama_pasien    = $request->input("nama_pasien");
        $jenis_kelamin  = $request->input("jenis_kelamin");
        $umur           = $request->input("umur");
        $alamat_pasien  = $request->input("alamat_pasien");
        $telepon        = $request->input("telepon");

        $data =TblPasien::find($id);

        $data->nama_pasien   = $nama_pasien;
        $data->jenis_kelamin = $jenis_kelamin;
        $data->umur          = $umur;
        $data->alamat_pasien = $alamat_pasien;
        $data->telepon       = $telepon;
        $data->save();

        return redirect('/pasien');
   }

   function proses_update_pasien_gigi(Request $request)
   {
        $id             = $request->input("id");
        $nama_pasien    = $request->input("nama_pasien");
        $jenis_kelamin  = $request->input("jenis_kelamin");
        $umur           = $request->input("umur");
        $alamat_pasien  = $request->input("alamat_pasien");
        $telepon        = $request->input("telepon");

        $data =TblGigi::find($id);

        $data->nama_pasien   = $nama_pasien;
        $data->jenis_kelamin = $jenis_kelamin;
        $data->umur          = $umur;
        $data->alamat_pasien = $alamat_pasien;
        $data->telepon       = $telepon;
        $data->save();

        return redirect('/gigi');
   }

    function proses_update_pasien_anak(Request $request)
   {
        $id             = $request->input("id");
        $nama_pasien    = $request->input("nama_pasien");
        $jenis_kelamin  = $request->input("jenis_kelamin");
        $umur           = $request->input("umur");
        $alamat_pasien  = $request->input("alamat_pasien");
        $telepon        = $request->input("telepon");

        $data =TblAnak::find($id);

        $data->nama_pasien   = $nama_pasien;
        $data->jenis_kelamin = $jenis_kelamin;
        $data->umur          = $umur;
        $data->alamat_pasien = $alamat_pasien;
        $data->telepon       = $telepon;
        $data->save();

        return redirect('/ibuanak');
   }

   function simpan_riwayat(Request $request)
   { 
        $id            = $request->input("id");
        $nama_pas      = $request->input("nama_pas");
        $jenis_kelamin = $request->input("jenis_kelamin");
        $umur          = $request->input("umur");
        $dokter        = $request->input("dokter");
        $tanggal       = $request->input("tanggal");
        $diag          = $request->input("diag");
        $tindakan      = $request->input("tindakan");
        $obat          = $request->input("obat");

        $data = new TblRiwayat;

        $data->nama_pas     = $nama_pas;
        $data->jenis_kelamin = $jenis_kelamin;
        $data->umur        = $umur;
        $data->dokter      = $dokter;
        $data->tanggal     = $tanggal;
        $data->diag        = $diag;
        $data->tindakan    = $tindakan;
        $data->obat        = $obat;
        $data->save();
  
        return redirect('/dokter');

   }

   function proses_update_riwayat(Request $request)
   { 
        $id            = $request->input("id");
        $nama_pas      = $request->input("nama_pas");
        $jenis_kelamin = $request->input("jenis_kelamin");
        $umur          = $request->input("umur");
        $dokter        = $request->input("dokter");
        $tanggal       = $request->input("tanggal");
        $diag          = $request->input("diag");
        $tindakan      = $request->input("tindakan");
        $obat          = $request->input("obat");

        $data =TblRiwayat::find($id);

        $data->nama_pas     = $nama_pas;
        $data->jenis_kelamin = $jenis_kelamin;
        $data->umur        = $umur;
        $data->dokter      = $dokter;
        $data->tanggal     = $tanggal;
        $data->diag        = $diag;
        $data->tindakan    = $tindakan;
        $data->obat        = $obat;
        $data->save();
  
        return redirect('/dokter');

   }


   function hapus_pasien(Request $request)
   {
        $id= $request->input("id");

        $data = TblPasien::find($id);
        $data->delete();

        return redirect('/pasien');
   }


   function hapus_pasien_gigi(Request $request)
   {
        $id= $request->input("id");

        $data = TblGigi::find($id);
        $data->delete();

        return redirect('/gigi');
   }

   function hapus_pasien_anak(Request $request)
   {
        $id= $request->input("id");

        $data = TblAnak::find($id);
        $data->delete();

        return redirect('/ibuanak');
   }

   function simpan_obat(Request $request)
   {
        $id = $request->input("id");
        $kode_obat = $request->input("kode_obat");
        $nama_obat = $request->input("nama_obat");
        $jenis_obat = $request->input("jenis_obat");
        $harga = $request->input("harga");

        $data = new TblObat;

        $data->kode_obat = $kode_obat;
        $data->kode      = uniqid();
        $data->nama_obat = $nama_obat;
        $data->jenis_obat= $jenis_obat;
        $data->harga     = $harga;
        $data->save();

        return redirect('/apotik');
   }

    function proses_update_obat(Request $request)
   {
        $id             = $request->input("id");
        $nama_obat      = $request->input("nama_obat");
        $jenis_obat     = $request->input("jenis_obat");
        $harga          = $request->input("harga");

        $data =TblObat::find($id);

        $data->nama_obat     = $nama_obat;
        $data->jenis_obat    = $jenis_obat;
        $data->harga         = $harga;
        $data->save();

        return redirect('/apotik');
   }

   function hapus_obat(Request $request)
   {

        $id= $request->input("id");

        $data = TblObat::find($id);
        $data->delete();

        return redirect('/apotik');
   }

}
