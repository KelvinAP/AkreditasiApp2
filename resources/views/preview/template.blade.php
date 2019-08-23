
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" >
  <title>Filkom UB</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/css/app.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style>

      .kop-wrapper{
          margin: 0;
          font-family:Arial;
      }

      p{
        font-size: 12px;
        font-family:Arial;
        padding: 0;
        margin: 0;
      }

      .kop-surat{
          border-bottom: 4px solid black;
          padding-bottom: 5px;
          margin-bottom: 30px;
      }

      .logo-kop > img{
          height: 100px;
      }

      .nama-kop{
        text-align: center;
        vertical-align: middle;
      }

      .nama-kop > .instansi, .nama-kop > .instansi > b{

        font-size:12pt;
        margin: 0;
        padding: 0;
      }

      .nama-kop > .keterangan{  
        font-size:9pt;
        margin: 0;
        padding: 0;
      }

      .content{
          margin-bottom : 50px
      }

      .table-print > thead > tr> th, .table-print > tbody > tr > td{
          border : 1px solid black;
          font-size: 12px;
      }

      @page {
        size: A4;
        margin: 1cm;
        }

        @media print {
        html, body {
            width: 210mm;
            height: 297mm;
        }
    }


  </style>
</head>
<body>
<div class="kop-wrapper" id="app">

    <div class="kop-surat page">
        <div class="row">
            <div class="col-2 logo-kop">
                <img src="../img/UB-Logo.png" alt="User Image">
            </div>
            <div class="col-8 nama-kop">
                <h4 class="instansi">KEMENTRIAN RISET, TEKNOLOGI, DAN PENDIDIKAN TINGGI</h6>
                <h5 class="instansi">UNIVERSITAS BRAWIJAYA</h6>
                <h5 class="instansi"><b>FAKULTAS ILMU KOMPUTER</b></h4>
                <h6 class="keterangan">Jl. Veteran No.8, Malang, 65145, Indonesia</h6>
                <h6 class="keterangan">Telp.: +62-341-577911; Fax : +62-341577911</h6>
                <h6 class="keterangan">http://filkom.ub.ac.id Email : filkom@ub.ac.id</h6>
            </div>
        </div>
    </div>
    
    {{-- content --}}
    <div class="row content">
        <div class="col">
            @yield('content')
        </div>
    </div>
    {{-- content --}}

    {{-- TTD --}}
    <div class="row">
        <div class="col-3">
            <p>Malang, 15 Juli 2015</p>
            <p>Dekan Fakultas Ilmu Komputer</p>
            <div style="height: 100px"></div>
            <p>Adam Hendra Brata, S.Kom., M.T., M.Sc.</p>
            <p>NIP. 199001052019031009</p>
        </div>
        <div class="col-6"></div>
        <div class="col-3">
            <p>Malang, 15 Juli 2015</p>
            <p>Dekan Fakultas Ilmu Komputer</p>
            <div style="height: 100px"></div>
            <p>Adam Hendra Brata, S.Kom., M.T., M.Sc.</p>
            <p>NIP. 199001052019031009</p>
        </div>  
    </div>

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="/js/app.js"></script>
<script>
$(document).ready(function() {
          window.print();
        });
</script>
</body>
</html>
