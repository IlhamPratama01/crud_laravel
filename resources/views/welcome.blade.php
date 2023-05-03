@extends('template')
@section('content')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
    .kotak{
        background-color: rgb(206, 200, 200);
    }

</style>
</head>
<body>
    
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
    <div class="kotak my-2 p-3 rounded  ">
      <h2 style="text-align: center" >SISTEM INFORMASI UNIVERSITAS DUTA BANGSA</h2>
      <P style="text-align: justify">Pendahuluan: Halaman ini memberikan gambaran umum tentang website pendidikan dan tujuan dibuatnya.Visi dan Misi: Menjelaskan visi dan misi website pendidikan untuk memberikan pemahaman tentang apa yang ingin dicapai.     
        Tentang Kami: Berisi profil dan informasi tentang tim atau individu yang mengelola website pendidikan.       
        Program Studi: Menyajikan informasi lengkap tentang program studi yang tersedia di website pendidikan.        
        Fasilitas: Memberikan penjelasan tentang fasilitas yang tersedia di website pendidikan, seperti forum diskusi, ruang kelas virtual, dan sebagainya.        
        Metode Pembelajaran: Menjelaskan bagaimana metode pembelajaran dilakukan di website pendidikan, seperti penggunaan video pembelajaran, modul, atau tanya jawab langsung dengan pengajar.        
        Sertifikat: Menyajikan informasi tentang sertifikat yang diberikan setelah menyelesaikan program pendidikan di website.        
        Harga dan Pembayaran: Berisi informasi tentang harga program dan cara pembayaran yang tersedia di website pendidikan.        
        Testimoni: Menampilkan testimoni dari para pengguna website pendidikan yang telah mengikuti program pendidikan sebelumnya.        
        Kontak Kami: Memberikan informasi tentang cara menghubungi tim pengelola website pendidikan untuk pertanyaan atau bantuan lebih lanjut.</P>
      
    
    </div>
    
    </body>
    </html>
    
@endsection