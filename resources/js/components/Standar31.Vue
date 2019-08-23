<template>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Standar 3.1</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Borang</li>
              <li class="breadcrumb-item active">Standar 3</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

     <div class="content">
      <div class="container-fluid">

      <!--table 3.1.1 -->
        <div class="card collapsed-card">
          <div class="card-header">
              <h3 class="card-title">Poin 3.1.1 Data Mahasiswa Reguler & Lulusan</h3>
              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
              </div>
          </div>
          <div class="card-body">
          <div class="row">
            <div class="col">
              <table class="table table-bordered table-center">
                  <thead>
              <tr>
                <th rowspan="2">Tahun <br>Akademik</th>
                <th rowspan="2">Daya <br>Tampung</th>
                <th colspan="2">Jumlah Calon<br><br>Mahasiswa Reguler</th>
                <th colspan="2">Jumlah Mahasiswa<br>Baru</th>
                <th colspan="2">Jumlah Total<br>Mahasiswa</th>
                <th colspan="2">Jumlah Lulusan</th>
                <th colspan="3">IPK<br>Lulusan Reguler</th>
                <th colspan="3">Presentasi Lulusan Refuler<br>dengan IPK</th>
              </tr>
              <tr>
                <td>Ikut<br>Seleksi</td>
                <td>Lulus<br>Seleksi</td>
                <td>Reguler<br>bukan<br>Transfer</td>
                <td>Transfer</td>
                <td>Reguler<br>bukan<br>Transfer</td>
                <td>Transfer</td>
                <td>Reguler<br>bukan<br>Transfer</td>
                <td>Transfer</td>
                <td>Min</td>
                <td>Rat</td>
                <td>Mak</td>
                <td>&lt; 2,75</td>
                <td>2,75-3.50</td>
                <td>&gt;3,50</td>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>(1)</td>
                <td>(2)</td>
                <td>(3)</td>
                <td>(4)</td>
                <td>(5)</td>
                <td>(6)</td>
                <td>(7)</td>
                <td>(8)</td>
                <td>(9)</td>
                <td>(10)</td>
                <td>(11)</td>
                <td>(12)</td>
                <td>(13)</td>
                <td>(14)</td>
                <td>(15)</td>
                <td>(16)</td>
              </tr>
              <tr>
                <td>TS-4</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>TS-3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>TS-2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>TS-1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>TS</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Jumlah</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              </tbody>
            </table>
            </div>
          </div>

          <div class="row">
            <div class="col-5">
               <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Lampiran</h3>

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
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-center">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Lampiran</th>
                      <th>Dibuat pada</th>
                      <th>Download</th>
                      <th>Operasi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Alur Pendaftaran Mahasiswa Baru</td>
                      <td>11-7-2014</td>
                      <td><i class="fas fa-file-pdf table-icon red"></i></td>
                      <td><button class="btn btn-sm btn-danger">x</button></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Alur Pendaftaran Mahasiswa Baru</td>
                      <td>11-7-2014</td>
                      <td><i class="fas fa-file-pdf table-icon red"></i></td>
                      <td><button class="btn btn-sm btn-danger">x</button></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Alur Pendaftaran Mahasiswa Baru</td>
                      <td>11-7-2014</td>
                      <td><i class="fas fa-file-pdf table-icon red"></i></td>
                      <td><button class="btn btn-sm btn-danger">x</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
                <div class="card-footer text-right">
                  <button type="button" class="btn btn-primary">Download All</button>
                </div>
            </div>
            </div>
            <div class="col-4">
               <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pendukung</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-center">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Lampiran</th>
                      <th>Lihat</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Data Penerimaan Mahasiswa</td>
                      <td><i class="fas fa-eye table-icon indigo" @click.prevent = "printpreview(1)"></i></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Lampiran 2</td>
                      <td><i class="fas fa-eye table-icon indigo"></i></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Lampiran 3</td>
                      <td><i class="fas fa-eye table-icon indigo"></i></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
                <div class="card-footer text-right">
                  <button type="button" class="btn btn-primary">Download All</button>
                </div>
            </div>
            </div>

            <div class="col-3">
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Lampiran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="namaLampiran">Nama Lampiran</label>
                    <input type="email" class="form-control" id="namaLampiran" placeholder="Enter lampiran">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>

          </div>

          </div>
        </div>
        <!--table 3.1.1 -->

          <!-- row table 3.1.2 -->
           <div class="card collapsed-card">
          <div class="card-header">
              <h3 class="card-title">Poin 3.1.2 Data Mahasiswa Non-Reguler</h3>
              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
              </div>
          </div>
          <div class="card-body">
          <div class="row">
            <div class="col">
              <table class="table table-bordered table-center">
                  <thead>
              <tr>
                <th rowspan="2">Tahun <br>Akademik</th>
                <th rowspan="2">Daya <br>Tampung</th>
                <th colspan="2">Jumlah Calon Mahasiswa</th>
                <th colspan="2">Jumlah Mahasiswa<br>Baru</th>
                <th colspan="2">Jumlah Total<br>Mahasiswa</th>
              </tr>
              <tr>
                <td>Ikut<br>Seleksi</td>
                <td>Lulus<br>Seleksi</td>
                <td>Non-<br>Reguler</td>
                <td>Transfer</td>
                <td>Non-<br>Reguler</td>
                <td>Transfer</td>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>(1)</td>
                <td>(2)</td>
                <td>(3)</td>
                <td>(4)</td>
                <td>(5)</td>
                <td>(6)</td>
                <td>(7)</td>
                <td>(8)</td>
              </tr>
              <tr>
                <td>TS-4</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>TS-3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>TS-2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>TS-1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>TS</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              </tbody>
            </table>
            </div>
          </div>
          <div class="row">
            <div class="col-5">
               <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Lampiran</h3>

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
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-center">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Lampiran</th>
                      <th>Dibuat pada</th>
                      <th>Download</th>
                      <th>Operasi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Alur Pendaftaran Mahasiswa Baru</td>
                      <td>11-7-2014</td>
                      <td><i class="fas fa-file-pdf table-icon red"></i></td>
                      <td><button class="btn btn-sm btn-danger">x</button></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Alur Pendaftaran Mahasiswa Baru</td>
                      <td>11-7-2014</td>
                      <td><i class="fas fa-file-pdf table-icon red"></i></td>
                      <td><button class="btn btn-sm btn-danger">x</button></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Alur Pendaftaran Mahasiswa Baru</td>
                      <td>11-7-2014</td>
                      <td><i class="fas fa-file-pdf table-icon red"></i></td>
                      <td><button class="btn btn-sm btn-danger">x</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
                <div class="card-footer text-right">
                  <button type="button" class="btn btn-primary">Download All</button>
                </div>
            </div>
            </div>
            <div class="col-4">
               <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pendukung</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-center">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Lampiran</th>
                      <th>Lihat</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Lampiran 1</td>
                      <td><i class="fas fa-eye table-icon indigo"></i></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Lampiran 2</td>
                      <td><i class="fas fa-eye table-icon indigo"></i></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Lampiran 3</td>
                      <td><i class="fas fa-eye table-icon indigo"></i></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
                <div class="card-footer text-right">
                  <button type="button" class="btn btn-primary">Download All</button>
                </div>
            </div>
            </div>

            <div class="col-3">
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Lampiran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="namaLampiran">Nama Lampiran</label>
                    <input type="email" class="form-control" id="namaLampiran" placeholder="Enter lampiran">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>

          </div>
          </div>
           </div>
          <!-- row table 3.1.2 -->

          <!-- row table 3.1.3 -->
           <div class="card collapsed-card">
          <div class="card-header">
              <h3 class="card-title">Poin 3.1.3 Data Prestasi & Reputasi</h3>
              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
              </div>
          </div>
          <div class="card-body">
          <div class="row">
            <div class="col">
              <table class="table table-bordered table-center">
                <tr>
                  <th>No</th>
                  <th>Nama Kegiatan dan Waktu Penyelenggaraan</th>
                  <th>Tingkat (Lokal, Regional,<br>Nasional, atau Internasional)</th>
                  <th>Prestasi yang Dicapai</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-5">
               <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Lampiran</h3>

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
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-center">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Lampiran</th>
                      <th>Dibuat pada</th>
                      <th>Download</th>
                      <th>Operasi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Alur Pendaftaran Mahasiswa Baru</td>
                      <td>11-7-2014</td>
                      <td><i class="fas fa-file-pdf table-icon red"></i></td>
                      <td><button class="btn btn-sm btn-danger">x</button></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Alur Pendaftaran Mahasiswa Baru</td>
                      <td>11-7-2014</td>
                      <td><i class="fas fa-file-pdf table-icon red"></i></td>
                      <td><button class="btn btn-sm btn-danger">x</button></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Alur Pendaftaran Mahasiswa Baru</td>
                      <td>11-7-2014</td>
                      <td><i class="fas fa-file-pdf table-icon red"></i></td>
                      <td><button class="btn btn-sm btn-danger">x</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
                <div class="card-footer text-right">
                  <button type="button" class="btn btn-primary">Download All</button>
                </div>
            </div>
            </div>
            <div class="col-4">
               <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pendukung</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-center">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Lampiran</th>
                      <th>Lihat</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Lampiran 1</td>
                      <td><i class="fas fa-eye table-icon indigo"></i></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Lampiran 2</td>
                      <td><i class="fas fa-eye table-icon indigo"></i></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Lampiran 3</td>
                      <td><i class="fas fa-eye table-icon indigo"></i></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
                <div class="card-footer text-right">
                  <button type="button" class="btn btn-primary">Download All</button>
                </div>
            </div>
            </div>

            <div class="col-3">
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Lampiran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="namaLampiran">Nama Lampiran</label>
                    <input type="email" class="form-control" id="namaLampiran" placeholder="Enter lampiran">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>

          </div>
          </div>
           </div>
          <!-- row table 3.1.3 -->

          <!-- row table 3.1.4 -->
           <div class="card collapsed-card">
          <div class="card-header">
              <h3 class="card-title">Poin 3.1.4 Jumlah Mahasiswa Reguler</h3>
              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-plus"></i>
                  </button>
              </div>
          </div>
          <div class="card-body">
          <div class="row">
            <div class="col">
              <table class="table table-bordered table-center">
                  <thead>
                  <tr>
                    <th rowspan="2">Tahun Masuk</th>
                    <th colspan="7">Jumlah Mahasiswa Reguler per Angkatan pada Tahun*</th>
                    <th rowspan="2">Jumlah Lulusan s.d. TS<br>(dari Mahasiswa Reguler)</th>
                  </tr>
                  <tr>
                    <td>TS-6</td>
                    <td>TS-5</td>
                    <td>TS-4</td>
                    <td>TS-3</td>
                    <td>TS-2</td>
                    <td>TS-1</td>
                    <td>TS</td>
                  </tr>
                  </thead>
                  <tbody>   
                  <tr>
                    <td>(1)</td>
                    <td>(1)</td>
                    <td>(2)</td>
                    <td>(3)</td>
                    <td>(4)</td>
                    <td>(5)</td>
                    <td>(6)</td>
                    <td>(7)</td>
                    <td>(8)</td>
                  </tr>
                  <tr>
                    <td>TS-6</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>TS-5</td>
                    <td rowspan="6" style="background-color:lightgray"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>TS-4</td>
                    <td rowspan="5" style="background-color:lightgray"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>TS-3</td>
                    <td rowspan="4" style="background-color:lightgray"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>TS-2</td>
                    <td rowspan="3" style="background-color:lightgray"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td rowspan="3" style="background-color:lightgray"></td>
                  </tr>
                  <tr>
                    <td>TS-1</td>
                    <td rowspan="2" style="background-color:lightgray"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>TS</td>
                    <td style="background-color:lightgray"></td>
                    <td></td>
                    <td></td>
                  </tr>
                  </tbody>
                </table>
            </div>
          </div>
          <div class="row">
            <div class="col-5">
               <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Lampiran</h3>

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
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-center">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Lampiran</th>
                      <th>Dibuat pada</th>
                      <th>Download</th>
                      <th>Operasi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Alur Pendaftaran Mahasiswa Baru</td>
                      <td>11-7-2014</td>
                      <td><i class="fas fa-file-pdf table-icon red"></i></td>
                      <td><button class="btn btn-sm btn-danger">x</button></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Alur Pendaftaran Mahasiswa Baru</td>
                      <td>11-7-2014</td>
                      <td><i class="fas fa-file-pdf table-icon red"></i></td>
                      <td><button class="btn btn-sm btn-danger">x</button></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Alur Pendaftaran Mahasiswa Baru</td>
                      <td>11-7-2014</td>
                      <td><i class="fas fa-file-pdf table-icon red"></i></td>
                      <td><button class="btn btn-sm btn-danger">x</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
                <div class="card-footer text-right">
                  <button type="button" class="btn btn-primary">Download All</button>
                </div>
            </div>
            </div>
            <div class="col-4">
               <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pendukung</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-center">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Lampiran</th>
                      <th>Lihat</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Lampiran 1</td>
                      <td><i class="fas fa-eye table-icon indigo"></i></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Lampiran 2</td>
                      <td><i class="fas fa-eye table-icon indigo"></i></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Lampiran 3</td>
                      <td><i class="fas fa-eye table-icon indigo"></i></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
                <div class="card-footer text-right">
                  <button type="button" class="btn btn-primary">Download All</button>
                </div>
            </div>
            </div>

            <div class="col-3">
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Lampiran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="namaLampiran">Nama Lampiran</label>
                    <input type="email" class="form-control" id="namaLampiran" placeholder="Enter lampiran">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>

          </div>
          </div>
           </div>
          <!-- row tablle 3.1.4 -->

      </div>
     </div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods : {
          printpreview(id){
            switch(id) {
              case 1 : window.location.href = "/preview/dataMahasiswaBaru"; break;
              case 2 : window.location.href = "/preview/dataAkademik"; break;
            } 
          }
        }
    }
</script>
