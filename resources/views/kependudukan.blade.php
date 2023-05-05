@extends('template')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Website</title>
<style>
    h3 {
        text-align: center;
        padding: 1px;
    }
    img {
        width: 50px;
        height: 50px;
    }

    .conta{
        background-color: rgb(32, 86, 236);
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        
    }

    body{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
    
</style>
</head>
  <body>
    <div class="conta p-3 rounded ">
    <img src="{{asset('admin/dist/img/tut.png')}}" alt="Tutwuri Logo" class="brand-image img-circle elevation-3 "  style="float:left; margin:0 9px 3px 0;" >
    <h2 style="margin-top: 10px; color: rgb(233, 247, 37)" >KOTA.SURAKARTA</h2>
    <h4 style="margin-top: 10px; color: white">SISTEM PENCATATAN PENDUDUK UNIVERSITAS DUTA BANGSA</h4>
    <h5 style="color: white">KEMENTRIAN PENDIDIKAN DAN KEBUDAYAAN</h5>
    <h6 style="color: white">Universitas Duta Bangsa Surakarta</h6>
    </div>
<div class="my-2 p-3 bg-body rounded shadow-sm">
    <form class="d-flex" action="/kependudukan" >
    <input class="form-control me-1" type="search" name="search" placeholder="Masukan Kata Kunci Pencarian" >
    <button class="btn btn-outline-success" type="submit"><i class="fas fa-search fa-fw"></i></button>
    </form>
        <div class="btn-group">
            <a href="/tambah" class="btn btn-info my-3" style="margin-left: 10px;"><i class="fa-solid fa-plus"></i> Catat Kependudukan Baru</a>
            <a href="/kependudukan/cetak_pdf" class="btn btn-warning my-3" style="margin-left: 5px;" target="blank"><i class="fas fa-print"></i> Cetak PDF</a>
            <a href="/kependudukan/export_excel" class="btn btn-success my-3" style="margin-left: 5px;" target="blank"> Export EXCEL</a>
        </div>
                <br>
                <div data-aos="fade-left" data-aos-duration="1500">
        <table border="10" class="table table-bordered table-hover table-striped" >
            <thead style="background-color: yellow;">
                 <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th> 
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Pendidikan</th>
                    <th>Opsi</th>
                 </tr>
             </thead>
             
             
              @foreach ($data as $kependudukan)
              
              
        <tr>
            <tbody>         
            <td>{{ $kependudukan->nik }}</td> 
            <td>{{ $kependudukan->nama }}</td>
            <td>{{ $kependudukan->alamat }}</td>
            <td>{{ $kependudukan->tempat_lahir }}</td>
            <td>{{ $kependudukan->tanggal_lahir }}</td>
            <td>{{ $kependudukan->agama }}</td>
            <td>{{ $kependudukan->pendidikan }}</td>
            <td>
                <a class="btn btn-warning" href='/kependudukan/ubah/{{ $kependudukan->nik }}'><i class="fas fa-eye-dropper"></i>Edit</a> |

                    @method('delete')
                    {{ csrf_field() }}
                <a class= "btn btn-danger" onClick="return confirm('Anda yakin ingin menghapus data ini ?')" href="/hapus/{{ $kependudukan->nik }}"><i class="fa fa-trash"></i>Hapus</a>
            </td>
        </tr> 
            @endforeach
        </tbody>
        </body>
        </table>
        {{ $data->links() }}
</div>
<!-- Scrolling animaton -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
</html>
@endsection

