@extends('template')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Tambah Data Mahasiswa</title>
    <style>
      h3 {
        text-align: center;
      }
      body{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
    </style>
  </head>
    <body>
        <h3>Halaman Ubah Data Kependudukan</h3>
<br>
<div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="/kependudukan" class="btn btn-warning" style="margin-left: 10px;"> Kembali </a>
            <form action="/kependudukan/store" method="post">
              {{ csrf_field() }}
              <div class="my-3 p-3 bg-body rounded shadow-sm">
                  <div class="mb-3 row">
                      <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name='nik' required="required" >
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name='nama' required="required">
                      </div>
                  </div>
                  <div class="mb-3 row">
                      <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name='alamat' required="required">
                      </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name='tempat_lahir' required="required">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name='tanggal_lahir' required="required">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="agama" class="col-sm-2 col-form-label" id="agama">Agama</label>
                    <div class="col-sm-10">
                        
                        <select name="agama" class="form-select" aria-label="Default select example" id="agama" name="agama" required="required">
                            <<option selected>--Pilih Agama--</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katholik">Khatolik</option>
                            <option value="hindhu">Hindhu</option>
                            <option value="budha">Budha</option>
                            <option value="konghucu">konghucu</option>                   
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pendidikan" value="SD" required="required">
                            <label class="form-check-label" >
                              SD
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pendidikan" value="SMP/MTs" required="required">
                            <label class="form-check-label" >
                              SMP/MTs
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pendidikan" value="SMA/SMK" required="required">
                            <label class="form-check-label" >
                              SMA/SMK
                            </label>
                        </div><div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pendidikan" value="D3" required="required">
                            <label class="form-check-label" >
                              D3
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pendidikan" value="S1" required="required">
                            <label class="form-check-label" >
                              S1
                            </label>
                        </div>
                    </div>
                </div>
              </div>  
            <input type="submit" onclick="alert('Input Mahasiswa Berhasil.')" class="btn btn-info my-3" style="margin-left: 10px;" value="Simpan Data">     
         
         </form>
         @endsection
</body>
</html>