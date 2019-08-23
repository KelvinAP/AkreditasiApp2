<template>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Penerimaan Mahasiswa</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="/dashboard">Home</a>
              </li>
              <li class="breadcrumb-item active">Penerimaan Mahasiswa</li>
            </ol>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-10 offset-md-1">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Statistik</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="penerimaanChart" style="height:400px"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Detail Penerimaan</h3>

                <div class="card-tools">
                  <button
                    type="button"
                    class="btn btn-primary btn-sm"
                    data-toggle="modal"
                    data-target="#exampleModalCenter"
                  >
                    <i class="fas fa-plus" style="margin-right:5px"></i>Add Data
                  </button>
                  <button type="button" class="btn btn-success btn-sm">
                    <i class="fas fa-upload" style="margin-right:5px"></i>Export Validasi
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 400px;">
                <table class="table table-bordered table-head-fixed table-center">
                  <thead>
                    <tr>
                      <th style="width: 10px" rowspan="2">Thn</th>
                      <th colspan="5">Daya Tampung</th>
                      <th colspan="5">Ikut Seleksi</th>
                      <th colspan="5">Lulus Seleksi</th>
                      <th colspan="5">Mendaftar Ulang</th>
                      <th rowspan="2" style="width: 20px">Lampiran</th>
                      <th colspan="2">Operasi</th>
                    </tr>
                    <tr>
                      <th>SNMPTN</th>
                      <th>SBMPTN</th>
                      <th>SPMK</th>
                      <th>SAP</th>
                      <th>Non-Reg</th>
                      <th>SNMPTN</th>
                      <th>SBMPTN</th>
                      <th>SPMK</th>
                      <th>SAP</th>
                      <th>Non-Reg</th>
                      <th>SNMPTN</th>
                      <th>SBMPTN</th>
                      <th>SPMK</th>
                      <th>SAP</th>
                      <th>Non-Reg</th>
                      <th>SNMPTN</th>
                      <th>SBMPTN</th>
                      <th>SPMK</th>
                      <th>SAP</th>
                      <th>Non-Reg</th>
                      <th style="width: 70px">Edit</th>
                      <th style="width: 70px">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>2018</td>
                      <td>1500</td>
                      <td>0</td>
                      <td>50</td>
                      <td>0</td>
                      <td>50</td>
                      <td>1500</td>
                      <td>0</td>
                      <td>50</td>
                      <td>0</td>
                      <td>50</td>
                      <td>1500</td>
                      <td>0</td>
                      <td>50</td>
                      <td>0</td>
                      <td>50</td>
                      <td>1500</td>
                      <td>0</td>
                      <td>50</td>
                      <td>0</td>
                      <td>50</td>
                      <td>
                        <a href="#">
                          <i class="fas fa-file-pdf table-icon red"></i>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <i class="fas fa-edit table-icon"></i>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <i class="fas fa-trash table-icon"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>2017</td>
                      <td>1500</td>
                      <td>0</td>
                      <td>50</td>
                      <td>0</td>
                      <td>50</td>
                      <td>1500</td>
                      <td>0</td>
                      <td>50</td>
                      <td>0</td>
                      <td>50</td>
                      <td>1500</td>
                      <td>0</td>
                      <td>50</td>
                      <td>0</td>
                      <td>50</td>
                      <td>1500</td>
                      <td>0</td>
                      <td>50</td>
                      <td>0</td>
                      <td>50</td>
                      <td>
                        <a href="#">
                          <i class="fas fa-file-pdf table-icon red"></i>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <i class="fas fa-edit table-icon"></i>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <i class="fas fa-trash table-icon"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>2016</td>
                      <td>1500</td>
                      <td>0</td>
                      <td>50</td>
                      <td>0</td>
                      <td>50</td>
                      <td>1500</td>
                      <td>0</td>
                      <td>50</td>
                      <td>0</td>
                      <td>50</td>
                      <td>1500</td>
                      <td>0</td>
                      <td>50</td>
                      <td>0</td>
                      <td>50</td>
                      <td>1500</td>
                      <td>0</td>
                      <td>50</td>
                      <td>0</td>
                      <td>50</td>
                      <td>
                        <a href="#">
                          <i class="fas fa-file-pdf table-icon red"></i>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <i class="fas fa-edit table-icon"></i>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <i class="fas fa-trash table-icon"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>2015</td>
                      <td>1500</td>
                      <td>0</td>
                      <td>50</td>
                      <td>0</td>
                      <td>50</td>
                      <td>1500</td>
                      <td>0</td>
                      <td>50</td>
                      <td>0</td>
                      <td>50</td>
                      <td>1500</td>
                      <td>0</td>
                      <td>50</td>
                      <td>0</td>
                      <td>50</td>
                      <td>1500</td>
                      <td>0</td>
                      <td>50</td>
                      <td>0</td>
                      <td>50</td>
                      <td>
                        <a href="#">
                          <i class="fas fa-file-pdf table-icon red"></i>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <i class="fas fa-edit table-icon"></i>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <i class="fas fa-trash table-icon"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>2014</td>
                      <td>1500</td>
                      <td>0</td>
                      <td>50</td>
                      <td>0</td>
                      <td>50</td>
                      <td>1500</td>
                      <td>0</td>
                      <td>50</td>
                      <td>0</td>
                      <td>50</td>
                      <td>1500</td>
                      <td>0</td>
                      <td>50</td>
                      <td>0</td>
                      <td>50</td>
                      <td>1500</td>
                      <td>0</td>
                      <td>50</td>
                      <td>0</td>
                      <td>50</td>
                      <td>
                        <a href="#">
                          <i class="fas fa-file-pdf table-icon red"></i>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <i class="fas fa-edit table-icon"></i>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <i class="fas fa-trash table-icon"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModalCenter"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
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
                <label for="exampleInputEmail1">Tahun</label>
                <input
                  type="number"
                  class="form-control"
                  id="exampleInputEmail1"
                  placeholder="Masukan Tahun"
                />
              </div>
              <label for="exampleInputPassword1">Daya Tampung</label>
              <div class="form-row">
                <div class="col-4">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Reguler</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Jumlah" />
                  </div>
                </div>
                <div class="col-4">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Non-Reg</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Jumlah" />
                  </div>
                </div>
                <div class="col-4">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Transfer</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Jumlah" />
                  </div>
                </div>
              </div>
              <label for="exampleInputPassword1">Ikut Seleksi</label>
              <div class="form-row">
                <div class="col-4">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Reguler</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Jumlah" />
                  </div>
                </div>
                <div class="col-4">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Non-Reg</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Jumlah" />
                  </div>
                </div>
                <div class="col-4">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Transfer</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Jumlah" />
                  </div>
                </div>
              </div>
              <label for="exampleInputPassword1">Lulus Seleksi</label>
              <div class="form-row">
                <div class="col-4">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Reguler</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Jumlah" />
                  </div>
                </div>
                <div class="col-4">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Non-Reg</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Jumlah" />
                  </div>
                </div>
                <div class="col-4">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Transfer</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Jumlah" />
                  </div>
                </div>
              </div>
              <label for="exampleInputPassword1">Daftar Ulang</label>
              <div class="form-row">
                <div class="col-4">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Reguler</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Jumlah" />
                  </div>
                </div>
                <div class="col-4">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Non-Reg</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Jumlah" />
                  </div>
                </div>
                <div class="col-4">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Transfer</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Jumlah" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Lampiran</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" />
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                </div>
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
    <!-- modal -->
  </div>
</template>

<script>
export default {
  mounted() {
    const lineData = {
      type: "line",
      data: {
        labels: ["2013", "2014", "2015", "2016", "2017"],
        datasets: [
          {
            // one line graph
            label: "Daya Tampung",
            data: [50, 65, 40, 40, 65],
            backgroundColor: [
              "rgba(31,23,12,.1)" // Blue
            ],
            borderColor: [
              "rgba(31,23,12,1)",
              "rgba(31,23,12,1)",
              "rgba(31,23,12,1)",
              "rgba(31,23,12,1)",
              "rgba(31,23,12,1)"
            ],
            borderWidth: 3
          },
          {
            // one line graph
            label: "Ikut Seleksi",
            data: [100, 50, 100, 50, 100],
            backgroundColor: [
              "rgba(71, 183,132,.1)" // Green
            ],
            borderColor: [
              "rgba(71, 183,132,1)",
              "rgba(71, 183,132,1)",
              "rgba(71, 183,132,1)",
              "rgba(71, 183,132,1)",
              "rgba(71, 183,132,1)"
            ],
            borderWidth: 3
          },
          {
            // one line graph
            label: "Lulus Seleksi",
            data: [50, 100, 50, 100, 50],
            backgroundColor: [
              "rgba(63,127,191,.1)" // Blue
            ],
            borderColor: [
              "rgba(63,127,191,1)",
              "rgba(63,127,191,1)",
              "rgba(63,127,191,1)",
              "rgba(63,127,191,1)",
              "rgba(63,127,191,1)"
            ],
            borderWidth: 3
          },
          {
            // another line graph
            label: "Mendaftar Ulang",
            data: [4.8, 12.1, 12.7, 6.7, 139.8],
            backgroundColor: [
              "rgba(191,63,63,.1)" // red
            ],
            borderColor: [
              "rgba(191,63,63,1)",
              "rgba(191,63,63,1)",
              "rgba(191,63,63,1)",
              "rgba(191,63,63,1)",
              "rgba(191,63,63,1)"
            ],
            borderWidth: 3
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        lineTension: 1,
        scales: {
          yAxes: [
            {
              ticks: {
                beginAtZero: true,
                padding: 25
              }
            }
          ]
        }
      }
    };
    this.createChart("penerimaanChart", lineData);
  },
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
};
</script>