<template>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profil Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profil Mahasiswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
        <div class="card">
          <div class="card-header">
              <h3 class="card-title">Rangkuman</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 350px;">
              <table id="rangkuman" class="table table-bordered table-striped table-head-fixed table-center">
                  <thead>
                      <tr>
                          <th rowspan="2">Tahun Akademik</th>
                          <th rowspan="2">Prodi</th>
                          <th colspan="4">Mahasiswa</th>
                          <th rowspan="2">Total Mahasiswa</th>
                          <th colspan="3">IPK</th>
                      </tr>
                      <tr>
                          <th>Mahasiswa Aktif</th>
                          <th>Mahasiswa Cuti</th>
                          <th>Mahasiswa DO</th>
                          <th>Mahasiswa Terevaluasi</th>
                          <th>IPK Min</th>
                          <th>IPK Rata</th>
                          <th>IPK Maks</th>
                      </tr>

                  </thead>
                  <tbody>
                      <tr v-for="n in 7" :key="n">
                          <td>201{{n}}</td>
                          <td>Teknik Informatika</td>
                          <td>1208</td>
                          <td>20</td>
                          <td>0</td>
                          <td>0</td>
                          <td>1228</td>
                          <td>3.27</td>
                          <td>3.56</td>
                          <td>3.40</td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
       </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Mahasiswa</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 300px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <select style="border : 1px solid #ced4da; color: #fff; background-color: #007bff;">
                        <option>NIM </option>
                        <option>Nama </option>
                        <option>Prodi </option>
                        <option>Tahun Masuk</option>
                        <option>Jalur Masuk </option>
                        
                      </select>
                      <!-- <button type="submit" class="btn btn-default"></i></button> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover table-center">
                  <thead>
                    <tr>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>TTL</th>
                      <th>Email</th>
                      <th>No. Hp</th>
                      <th>Prodi</th>
                      <th>Tahun Masuk</th>
                      <th>Jalur Masuk</th>
                      <th>Status</th>
                      <th>IPK Kumulatif</th>
                      <th>Jumlah SKS</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="n in 10" :key="n">
                      <td>15515020711{{n}}</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td>johndoe@student.ub.ac.id</td>
                      <td>0854946485</td>
                      <td>Teknik Informatika</td>
                      <td>2015</td>
                      <td>SPMK</td>
                      <td>Aktif</td>
                      <td>3.70</td>
                      <td>144</td>
                      <td class="text-center"><i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> | <i class="fas fa-trash " style="margin-left:5px ; cursor:pointer"></i></td>
                    </tr>                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

              <div class="card-footer"></div>
                <div class="row">
                  <div class="col-4">
                    <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#exampleModalCenter">
                      <i class="fas fa-plus" style="margin-right:5px"></i>Tambah Mahasiswa
                    </button>
                    <button class="btn btn-info btn-sm" type="button">
                      <i class="fas fa-file-import" style="margin-right:5px"></i>Import Data
                      </button>
                  </div>
                  <div class="col-8">
                    <ul class="pagination pagination m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
                  </div>
                </div>
                
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        
      </div><!-- /.container-fluid -->

    <div
      class="modal fade"
      id="exampleModalCenter"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Penerimaan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control" id="nim" placeholder="Masukan NIM"/>
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukan Nama"/>
              </div>
              <div class="form-group">
                <label for="tempatLahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempatLahir" placeholder="Masukan Tempat Lahir"/>
              </div>
              <div class="form-group">
                <label for="ttl">Tanggal Lahir</label>
                <input type="date" class="form-control" id="ttl" placeholder="Masukan Tanggal Lahir"/>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukan Email"/>
              </div>
              <div class="form-group">
                <label for="nohp">Nomor Handphone</label>
                <input type="text" class="form-control" id="nohp" placeholder="Masukan Nomor Handphone"/>
              </div>
              <div class="form-group">
                <label for="prodi">Program Studi</label>
                <input type="text" class="form-control" id="prodi" placeholder="Masukan Program Studi"/>
              </div>
              <div class="form-group">
                <label for="tahunMasuk">Tahun Masuk</label>
                <input type="number" class="form-control" id="tahunMasuk" placeholder="Masukan Tahun Masuk"/>
              </div>
              <div class="form-group">
                <label for="jalurMasuk">Jalur Masuk</label>
                <select class="form-control">
                      <option>SNMPTN</option>
                      <option>SBMPTN</option>
                      <option>SPMK</option>
                      <option>SAP</option>
                      <option>Non-Reguler</option>
                    </select>
              </div>
              <div class="form-group">
                <label for="prodi">Status</label>
                <select class="form-control">
                      <option>Aktif</option>
                      <option>Tidak Aktif</option>
                      <option>Cuti</option>
                      <option>Terdaftar</option>
                      <option>Drop Out</option>
                    </select>
              </div>
              <div class="form-group">
                <label for="ipk">IPK Kumulatif</label>
                <input type="number" class="form-control" id="ipk" placeholder="Masukan IPK Kumulatif"/>
              </div><div class="form-group">
                <label for="sks">Jumlah SKS</label>
                <input type="number" class="form-control" id="sks" placeholder="Masukan Jumlah SKS"/>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button
              type="submit"
              class="btn btn-primary"
              @click="showSuccessAlert"
              data-dismiss="modal"
            >Submit</button>
          </div>
        </div>
      </div>
    </div>

    </div>
    <!-- /.content -->

</template>

<script>

    export default {
      methods: {
    createChart(chartId, chartData) {
      const ctx = document.getElementById(chartId);
      const myChart = new Chart(ctx, {
        type: chartData.type,
        data: chartData.data,
        options: chartData.options
      });
    },
    showDeleteAlert() {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then(result => {
        if (result.value) {
          Swal.fire({
            title: "Deleted!",
            text: "Your file has been deleted.",
            type: "success",
            showConfirmButton: false,
            timer: 1500
          });
        }
      });
    },
    showSuccessAlert() {
      Swal.fire({
        type: "success",
        title: "Data Berhasil Disimpan",
        showConfirmButton: false,
        timer: 1500
      });
    }
  }
    }
</script>
