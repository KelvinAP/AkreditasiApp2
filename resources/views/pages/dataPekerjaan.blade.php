@extends('master-box')

@section('title')
    Data Pekerjaan
    @endSection

    @section('content')
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tracer Pekerjaan Alumni</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
                <table
                id="alumni"
                class="table table-bordered table-striped table-center"
              >
                <thead>
                  <tr>
                    <th rowspan="2">NIM</th>
                    <th rowspan="2">Nama</th>
                    <th rowspan="2">Tahun Lulus</th>
                    <th rowspan="2">
                        Masa Tunggu
                        <br>Bekerja
                        </th>
                    <th rowspan="2">Nama Pekerjaan</th>
                    <th rowspan="2">Nama Perusahaan</th>
                    <th rowspan="2">Bidang Kerja</th>
                    <th colspan="7">Penilaian Alumni</th>
                  </tr>
                  <tr>
                    <td>Integritas</td>
                    <td>Profesionalisme</td>
                    <td>Bahasa Inggris</td>
                    <td>Penggunaan TI</td>
                    <td>Komunikasi</td>
                    <td>Kerjasama Tim</td>
                    <td>Pengembangan Diri</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>1 Bulan</td>
                    <td>Business Development</td>
                    <td>PT. Kalbe Farma</td>
                    <td>IT</td>
                    <td>87</td>
                    <td>68</td>
                    <td>97</td>
                    <td>57</td>
                    <td>97</td>
                    <td>97</td>
                    <td>97</td>
                  </tr>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>1 Bulan</td>
                    <td>Business Development</td>
                    <td>PT. Kalbe Farma</td>
                    <td>IT</td>
                    <td>87</td>
                    <td>68</td>
                    <td>97</td>
                    <td>57</td>
                    <td>97</td>
                    <td>97</td>
                    <td>97</td>
                  </tr>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>1 Bulan</td>
                    <td>Business Development</td>
                    <td>PT. Kalbe Farma</td>
                    <td>IT</td>
                    <td>87</td>
                    <td>68</td>
                    <td>97</td>
                    <td>57</td>
                    <td>97</td>
                    <td>97</td>
                    <td>97</td>
                  </tr>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>1 Bulan</td>
                    <td>Business Development</td>
                    <td>PT. Kalbe Farma</td>
                    <td>IT</td>
                    <td>87</td>
                    <td>68</td>
                    <td>97</td>
                    <td>57</td>
                    <td>97</td>
                    <td>97</td>
                    <td>97</td>
                  </tr>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>1 Bulan</td>
                    <td>Business Development</td>
                    <td>PT. Kalbe Farma</td>
                    <td>IT</td>
                    <td>87</td>
                    <td>68</td>
                    <td>97</td>
                    <td>57</td>
                    <td>97</td>
                    <td>97</td>
                    <td>97</td>
                  </tr>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>1 Bulan</td>
                    <td>Business Development</td>
                    <td>PT. Kalbe Farma</td>
                    <td>IT</td>
                    <td>87</td>
                    <td>68</td>
                    <td>97</td>
                    <td>57</td>
                    <td>97</td>
                    <td>97</td>
                    <td>97</td>
                  </tr>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>1 Bulan</td>
                    <td>Business Development</td>
                    <td>PT. Kalbe Farma</td>
                    <td>IT</td>
                    <td>87</td>
                    <td>68</td>
                    <td>97</td>
                    <td>57</td>
                    <td>97</td>
                    <td>97</td>
                    <td>97</td>
                  </tr>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>1 Bulan</td>
                    <td>Business Development</td>
                    <td>PT. Kalbe Farma</td>
                    <td>IT</td>
                    <td>87</td>
                    <td>68</td>
                    <td>97</td>
                    <td>57</td>
                    <td>97</td>
                    <td>97</td>
                    <td>97</td>
                  </tr>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>1 Bulan</td>
                    <td>Business Development</td>
                    <td>PT. Kalbe Farma</td>
                    <td>IT</td>
                    <td>87</td>
                    <td>68</td>
                    <td>97</td>
                    <td>57</td>
                    <td>97</td>
                    <td>97</td>
                    <td>97</td>
                  </tr>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>1 Bulan</td>
                    <td>Business Development</td>
                    <td>PT. Kalbe Farma</td>
                    <td>IT</td>
                    <td>87</td>
                    <td>68</td>
                    <td>97</td>
                    <td>57</td>
                    <td>97</td>
                    <td>97</td>
                    <td>97</td>
                  </tr>
                </tbody>
              </table>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <div class="mo-0 float-right"><ul class="pagination m-0 float-right">
                <li class="page-item">
                    <a href="#" class="page-link">«</a></li> <li class="page-item">
                        <a href="#" class="page-link">1</a></li> <li class="page-item">
                            <a href="#" class="page-link">2</a></li> <li class="page-item"><a href="#" class="page-link">3</a>
                            </li> 
                            <li class="page-item"><a href="#" class="page-link">4</a></li> 
                            <li class="page-item">
                                <a href="#" class="page-link">5</a></li> <li class="page-item"><a href="#" class="page-link">»</a>
                                </li>
                            </ul>
                        </div>
                    </div>
      </div>
    @endSection