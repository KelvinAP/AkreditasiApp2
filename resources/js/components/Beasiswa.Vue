<template>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Beasiswa</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active">Beasiswa</li>
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
          <div class="col-6">
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
                  <canvas id="beasiswaChart" style="height:400px"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Beasiswa</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input
                      type="text"
                      name="table_search"
                      class="form-control float-right"
                      placeholder="Search"
                    />

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height:385px">
                <table class="table table-head-fixed table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Beasiswa</th>
                      <th>Penyedia Beasiswa</th>
                      <th>Bentuk Beasiswa</th>
                      <th class="text-center">Jumlah Peserta</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Karya Salemba Empat</td>
                      <td>KSE Indonesia</td>
                      <td>Uang Tunai</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-info">
                          10
                          <i class="fas fa-eye" style="margin-left:5px"></i>
                        </button>
                      </td>
                      <td class="text-center">
                        <i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> |
                        <i
                          class="fas fa-trash"
                          style="margin-left:5px ; cursor:pointer"
                          @click="showDeleteAlert"
                        ></i>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Karya Salemba Empat</td>
                      <td>KSE Indonesia</td>
                      <td>Uang Tunai</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-info">
                          10
                          <i class="fas fa-eye" style="margin-left:5px"></i>
                        </button>
                      </td>
                      <td class="text-center">
                        <i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> |
                        <i class="fas fa-trash" style="margin-left:5px ; cursor:pointer"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Karya Salemba Empat</td>
                      <td>KSE Indonesia</td>
                      <td>Uang Tunai</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-info">
                          10
                          <i class="fas fa-eye" style="margin-left:5px"></i>
                        </button>
                      </td>
                      <td class="text-center">
                        <i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> |
                        <i class="fas fa-trash" style="margin-left:5px ; cursor:pointer"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Karya Salemba Empat</td>
                      <td>KSE Indonesia</td>
                      <td>Uang Tunai</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-info">
                          10
                          <i class="fas fa-eye" style="margin-left:5px"></i>
                        </button>
                      </td>
                      <td class="text-center">
                        <i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> |
                        <i class="fas fa-trash" style="margin-left:5px ; cursor:pointer"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Karya Salemba Empat</td>
                      <td>KSE Indonesia</td>
                      <td>Uang Tunai</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-info">
                          10
                          <i class="fas fa-eye" style="margin-left:5px"></i>
                        </button>
                      </td>
                      <td class="text-center">
                        <i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> |
                        <i class="fas fa-trash" style="margin-left:5px ; cursor:pointer"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Karya Salemba Empat</td>
                      <td>KSE Indonesia</td>
                      <td>Uang Tunai</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-info">
                          10
                          <i class="fas fa-eye" style="margin-left:5px"></i>
                        </button>
                      </td>
                      <td class="text-center">
                        <i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> |
                        <i class="fas fa-trash" style="margin-left:5px ; cursor:pointer"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Karya Salemba Empat</td>
                      <td>KSE Indonesia</td>
                      <td>Uang Tunai</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-info">
                          10
                          <i class="fas fa-eye" style="margin-left:5px"></i>
                        </button>
                      </td>
                      <td class="text-center">
                        <i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> |
                        <i class="fas fa-trash" style="margin-left:5px ; cursor:pointer"></i>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="mo-0 float-right">
                  <button
                    class="btn btn-sm btn-primary"
                    data-toggle="modal"
                    data-target="#addBeasiswaModal"
                  >
                    <i class="fas fa-plus"></i>Add Beasiswa
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Karya Salemba Empat</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input
                      type="text"
                      name="table_search"
                      class="form-control float-right"
                      placeholder="Search"
                    />

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height:300px">
                <table class="table table-head-fixed table-hover table-center">
                  <thead>
                    <tr>
                      <th>NIM</th>
                      <th>Nama Peserta</th>
                      <th>Program Studi</th>
                      <th>Tanggal Terima</th>
                      <th>Tanggal Berakhir</th>
                      <th>Status</th>
                      <th>Bukti Dukung</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>115601561</td>
                      <td>John DOe</td>
                      <td>Teknik Informatika</td>
                      <td>12-01-2018</td>
                      <td>12-01-2019</td>
                      <td>Aktif</td>
                      <td>
                        <i class="fas fa-file-pdf red" style="cursor:pointer"></i>
                      </td>
                      <td class="text-center">
                        <i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> |
                        <i
                          class="fas fa-trash"
                          style="margin-left:5px ; cursor:pointer"
                          @click="showDeleteAlert"
                        ></i>
                      </td>
                    </tr>
                    <tr>
                      <td>115601561</td>
                      <td>John DOe</td>
                      <td>Teknik Informatika</td>
                      <td>12-01-2018</td>
                      <td>12-01-2019</td>
                      <td>Aktif</td>
                      <td>
                        <i class="fas fa-file-pdf red"></i>
                      </td>
                      <td class="text-center">
                        <i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> |
                        <i class="fas fa-trash" style="margin-left:5px ; cursor:pointer"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>115601561</td>
                      <td>John DOe</td>
                      <td>Teknik Informatika</td>
                      <td>12-01-2018</td>
                      <td>12-01-2019</td>
                      <td>Aktif</td>
                      <td>
                        <i class="fas fa-file-pdf red"></i>
                      </td>
                      <td class="text-center">
                        <i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> |
                        <i class="fas fa-trash" style="margin-left:5px ; cursor:pointer"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>115601561</td>
                      <td>John DOe</td>
                      <td>Teknik Informatika</td>
                      <td>12-01-2018</td>
                      <td>12-01-2019</td>
                      <td>Aktif</td>
                      <td>
                        <i class="fas fa-file-pdf red"></i>
                      </td>
                      <td class="text-center">
                        <i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> |
                        <i class="fas fa-trash" style="margin-left:5px ; cursor:pointer"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>115601561</td>
                      <td>John DOe</td>
                      <td>Teknik Informatika</td>
                      <td>12-01-2018</td>
                      <td>12-01-2019</td>
                      <td>Aktif</td>
                      <td>
                        <i class="fas fa-file-pdf red"></i>
                      </td>
                      <td class="text-center">
                        <i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> |
                        <i class="fas fa-trash" style="margin-left:5px ; cursor:pointer"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>115601561</td>
                      <td>John DOe</td>
                      <td>Teknik Informatika</td>
                      <td>12-01-2018</td>
                      <td>12-01-2019</td>
                      <td>Aktif</td>
                      <td>
                        <i class="fas fa-file-pdf red"></i>
                      </td>
                      <td class="text-center">
                        <i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> |
                        <i class="fas fa-trash" style="margin-left:5px ; cursor:pointer"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>115601561</td>
                      <td>John DOe</td>
                      <td>Teknik Informatika</td>
                      <td>12-01-2018</td>
                      <td>12-01-2019</td>
                      <td>Aktif</td>
                      <td>
                        <i class="fas fa-file-pdf red"></i>
                      </td>
                      <td class="text-center">
                        <i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> |
                        <i class="fas fa-trash" style="margin-left:5px ; cursor:pointer"></i>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="mo-0 float-right">
                  <button
                    class="btn btn-sm btn-primary"
                    data-toggle="modal"
                    data-target="#addPesertaModal"
                  >
                    <i class="fas fa-plus"></i>Add Peserta
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="addBeasiswaModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="addBeasiswaModalTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="addBeasiswaModalTitle">Tambah Beasiswa</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Beasiswa</label>
                <input type="text" class="form-control" id="exampleInputEmail1" />
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Penyedia Beasiswa</label>
                <input type="text" class="form-control" id="exampleInputEmail1" />
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Bentuk Beasiswa</label>
                <input type="text" class="form-control" id="exampleInputEmail1" />
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

    <!-- Modal -->
    <div
      class="modal fade"
      id="addPesertaModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="addPesertaModalTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="addPesertaModalTitle">Tambah Peserta</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">NIM</label>
                <input type="text" class="form-control" id="exampleInputEmail1" />
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Peserta</label>
                <input type="text" class="form-control" id="exampleInputEmail1" />
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Program Studi</label>
                <input type="text" class="form-control" id="exampleInputEmail1" />
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Terima</label>
                <input type="date" class="form-control" id="exampleInputEmail1" />
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Berakhit</label>
                <input type="date" class="form-control" id="exampleInputEmail1" />
              </div>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile" />
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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
    <!-- /.content -->
  </div>
</template>

<script>
export default {
  mounted() {
    const lineData = {
      type: "bar",
      data: {
        labels: ["2013", "2014", "2015", "2016", "2017"],
        datasets: [
          {
            // one line graph
            label: "Jumlah Penerima Beasiswa",
            data: [50, 65, 40, 40, 65],
            backgroundColor: [
              "rgba(16, 59, 250, 0.4)", // Blue
              "rgba(16, 59, 250, 0.4)", // Blue
              "rgba(16, 59, 250, 0.4)", // Blue
              "rgba(16, 59, 250, 0.4)", // Blue
              "rgba(16, 59, 250, 0.4)" // Blue
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
    this.createChart("beasiswaChart", lineData);
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
