@extends('master-box')

@section('title')
    Data Pendidikan Lanjutan
    @endSection

    @section('content')
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tracer Pendidikan Lanjut Alumni</h3>

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
                <table id="dataPendidikan" class="table table-bordered table-striped table-center">
                <thead>
                  <tr>
                    <th >NIM</th>
                    <th >Nama</th>
                    <th >Tahun Lulus</th>
                    <th >Nama Universitas</th>
                    <th >Negara</th>
                    <th>Jurusan</th>
                    <th >Tingkat</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>Universitas Brawijaya</td>
                    <td>Indonesia</td>
                    <td>Bisnis Manajemen</td>
                    <td>S2</td>
                  </tr>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>Universitas Brawijaya</td>
                    <td>Indonesia</td>
                    <td>Bisnis Manajemen</td>
                    <td>S2</td>
                  </tr>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>Universitas Brawijaya</td>
                    <td>Indonesia</td>
                    <td>Bisnis Manajemen</td>
                    <td>S2</td>
                  </tr>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>Universitas Brawijaya</td>
                    <td>Indonesia</td>
                    <td>Bisnis Manajemen</td>
                    <td>S2</td>
                  </tr>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>Universitas Brawijaya</td>
                    <td>Indonesia</td>
                    <td>Bisnis Manajemen</td>
                    <td>S2</td>
                  </tr>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>Universitas Brawijaya</td>
                    <td>Indonesia</td>
                    <td>Bisnis Manajemen</td>
                    <td>S2</td>
                  </tr>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>Universitas Brawijaya</td>
                    <td>Indonesia</td>
                    <td>Bisnis Manajemen</td>
                    <td>S2</td>
                  </tr>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>Universitas Brawijaya</td>
                    <td>Indonesia</td>
                    <td>Bisnis Manajemen</td>
                    <td>S2</td>
                  </tr>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>Universitas Brawijaya</td>
                    <td>Indonesia</td>
                    <td>Bisnis Manajemen</td>
                    <td>S2</td>
                  </tr>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>Universitas Brawijaya</td>
                    <td>Indonesia</td>
                    <td>Bisnis Manajemen</td>
                    <td>S2</td>
                  </tr>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>Universitas Brawijaya</td>
                    <td>Indonesia</td>
                    <td>Bisnis Manajemen</td>
                    <td>S2</td>
                  </tr>
                  <tr>
                    <td>155150207111018</td>
                    <td>Alfa Yolanda</td>
                    <td>2019</td>
                    <td>Universitas Brawijaya</td>
                    <td>Indonesia</td>
                    <td>Bisnis Manajemen</td>
                    <td>S2</td>
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