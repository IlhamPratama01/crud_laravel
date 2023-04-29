<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\kependudukan;

use PDF;
use App\Exports\KependudukanExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;


class KependudukanController extends Controller
{
    public function index(){
        return view('index');
    }


    public function tampil(Request $request)
    {
        
        if($request->has('search')){
            $data=kependudukan::where('nama','like','%'.$request->search.'%')
            ->orwhere('nik','like','%'.$request->search.'%')->paginate(3);
        }else{
            $data=kependudukan::paginate(3); 
        
        }
        return view('kependudukan', ['data'=>$data]);
    }

    public function tambah()
    {
        return view('tambah');
    }
    
    public function simpan(request $request)
    {
        $data=array(
            "nik"=>$request->nik,
            "nama"=>$request->nama,
            "alamat"=>$request->alamat,
            "tempat_lahir"=>$request->tempat_lahir,
            "tanggal_lahir"=>$request->tanggal_lahir,
            "agama"=>$request->agama,
            "pendidikan"=>$request->pendidikan
        );

        $data=kependudukan::create($data);
        if($data){
            return redirect('/kependudukan')->with(array('status'=>true,'Berhasil Tambah Data'));
      
        } else{
            return json_encode(array('status'=>false,'pesan'=>"Gagal Tambah data"));

        }
    }


        public function edit(request $request)
        {
            $data=kependudukan::where("nik", $request->nik)->update(array(
                "nama"=>$request->nama,
                "alamat"=>$request->alamat,
                "tempat_lahir"=>$request->tempat_lahir,
                "tanggal_lahir"=>$request->tanggal_lahir,
                "agama"=>$request->agama,
                "pendidikan"=>$request->pendidikan
            
            ));

            if($data){
                return redirect('/kependudukan')->with(array('status'=>true,'Berhasil Ubah Data'));
      
        } else{
            return json_encode(array('status'=>false,'pesan'=>"Gagal Ubah data"));

            }
        }

        public function ubah($nik){
            $data=kependudukan::where('nik',$nik)->get();
            return view('ubah', ['data'=>$data]);
        }

        public function hapus($nik)
        {
            $data = kependudukan::where("nik", $nik)->delete();

            if($data){
                return redirect('/kependudukan')->with(array('status'=>true,'Berhasil Hapus Data'));
          
            } else{
                return json_encode(array('status'=>false,'pesan'=>"Gagal Hapus data",
                ));

            }
        }

        public function cetak_pdf()
        {
            $kpd = kependudukan::all();
    
            $pdf = PDF::loadview('pdf',['kpd'=>$kpd]);
            return $pdf->download('laporan-kependudukan.pdf');
        }

        public function export_excel()
        {
            return Excel::download(new KependudukanExport,'kependudukna.xlsx');
        }
    }
