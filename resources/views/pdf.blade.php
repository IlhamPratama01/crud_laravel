<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

  <body>
    
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
        h5 {
        text-align: center;
        padding: 1px;
    }
        </style>
            <h5> Membuat Laporan  PDF Dengan DOMPDF Laravel </h5>
            <h5> Data Kependudukan Universitas Duta Bangsa Surakarta</h5>
<br>
        <table class="table table-borded" >
            <thead>
                 <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th> 
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Pendidikan</th>
                 </tr>
             </thead>
             <tbody>
                
                @php $i=1 @endphp
              @foreach ($kpd as $p)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $p->nik }}</td> 
            <td>{{ $p->nama }}</td>
            <td>{{ $p->alamat }}</td>
            <td>{{ $p->tempat_lahir }}</td>
            <td>{{ $p->tanggal_lahir }}</td>
            <td>{{ $p->agama }}</td>
            <td>{{ $p->pendidikan }}</td>
        </tr> 
            @endforeach
        </tbody>
        </table>
    </body>
</html>