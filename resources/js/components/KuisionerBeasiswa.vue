<template>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kuisioner Beasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kuisioner Beasiswa</li>
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
                <div class="row">
                <div class="col-7">
                <div class="chart">
                  <canvas id="kuisionerBeasiswaChart" style="height:400px"></canvas>
                </div>
              </div>
              <div class="col-5">
            <table class="table table-striped table-bordered table-center">
              <thead>
                <tr>
                  <th></th>
                  <th>Sangat Baik<br>(4)</th>
                  <th>Baik<br>(3)</th>
                  <th>Cukup Baik<br>(2)</th>
                  <th>Kurang Baik<br>(1)</th>
                  <th>Sangat Kurang<br>(0)</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Penyebaran Info</td>
                  <td>41</td>
                  <td>12</td>
                  <td>24</td>
                  <td>14</td>
                  <td>2</td>
                  <td>3 (Baik)</td>
                </tr>
                <tr>
                  <td>Efektivitas</td>
                  <td>41</td>
                  <td>12</td>
                  <td>24</td>
                  <td>14</td>
                  <td>2</td>
                  <td>3 (Baik)</td>
                </tr>
                <tr>
                  <td>Sikap SDM</td>
                  <td>41</td>
                  <td>12</td>
                  <td>24</td>
                  <td>14</td>
                  <td>2</td>
                  <td>3 (Baik)</td>
                </tr>
                <tr>
                  <td>Kemudahan <br> Pemahaman</td>
                  <td>41</td>
                  <td>12</td>
                  <td>24</td>
                  <td>14</td>
                  <td>2</td>
                  <td>3 (Baik)</td>
                </tr>
                <tr>
                  <td>Jumlah</td>
                  <td>200</td>
                  <td>100</td>
                  <td>142</td>
                  <td>151</td>
                  <td>20</td>
                  <td>2 (Cukup Baik)</td>
                </tr>
              </tbody>
            </table>
          </div>
          </div>
            </div>
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kuisioner Beasiswa</h3>
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
              <div class="card-body">
                <table class="table table-hover table-center">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>
                        Jenis
                        <br />Kegiatan
                      </th>
                      <th>
                        LSO
                      </th>
                      <th>
                        Prodi
                      </th>
                      <th>
                        Kemudahan
                        <br />Info
                      </th>
                      <th>
                        Efektivitas
                      </th>
                      <th>
                        Sikap
                        <br />SDM
                      </th>
                      <th>
                        Kemudahan
                        <br />Pemahaman
                      </th>
                      <th>Kritik dan Saran</th>
                      <th>
                        Diambil
                        <br />tanggal
                      </th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="n  in 10 " :key="n">
                      <td>{{n}}</td>
                      <td>Lorem Ipsum</td>
                      <td>HMIF</td>
                      <td>Teknik Informatika</td>
                      <td>Sangat Baik</td>
                      <td>Sangat Baik</td>
                      <td>Baik</td>
                      <td>Sangat Baik</td>
                      <td>Lorem Ipsum Masangsakbahsa</td>
                      <td>20-02-2018</td>
                      <td class="text-center">
                        <i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> |
                        <i
                          class="fas fa-trash"
                          style="margin-left:5px ; cursor:pointer"
                          @click="showDeleteAlert()"
                        ></i>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-4">
                    <button
                      type="button"
                      data-toggle="modal"
                      data-target="#exampleModalCenter"
                      class="btn btn-primary btn-sm"
                    >
                      <i class="fas fa-plus" style="margin-right: 5px;"></i>Tambah Kuisioner
                    </button>
                    <button type="button" class="btn btn-info btn-sm">
                      <i class="fas fa-file-import" style="margin-right: 5px;"></i>Import Data
                    </button>
                  </div>
                  <div class="col-8">
                    <ul class="pagination pagination m-0 float-right">
                      <li class="page-item">
                        <a href="#" class="page-link">«</a>
                      </li>
                      <li class="page-item">
                        <a href="#" class="page-link">1</a>
                      </li>
                      <li class="page-item">
                        <a href="#" class="page-link">2</a>
                      </li>
                      <li class="page-item">
                        <a href="#" class="page-link">3</a>
                      </li>
                      <li class="page-item">
                        <a href="#" class="page-link">4</a>
                      </li>
                      <li class="page-item">
                        <a href="#" class="page-link">5</a>
                      </li>
                      <li class="page-item">
                        <a href="#" class="page-link">»</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->

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
              <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Kuisioner</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Kegiatan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1">
                            </div>
                  <div class="form-group">
                                <label for="exampleInputEmail1">Lembaga Semi Otonom</label>
                                <input type="text" class="form-control" id="exampleInputEmail1">
                            </div>
                  <div class="form-group">
                                <label for="exampleInputEmail1">Prodi</label>
                                <input type="text" class="form-control" id="exampleInputEmail1">
                            </div>
                  <label
                    for="integritas"
                  >1.	Tingkat Kemudahan penyebaran informasi tentang beasiswa</label>
                  <div class="form-check-group">
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio1"
                        value="option1"
                      />
                      <label class="form-check-label" for="inlineRadio1">Sangat Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio2"
                        value="option2"
                      />
                      <label class="form-check-label" for="inlineRadio2">Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio3"
                        value="option3"
                      />
                      <label class="form-check-label" for="inlineRadio3">Cukup Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio3"
                        value="option3"
                      />
                      <label class="form-check-label" for="inlineRadio3">Kurang Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio3"
                        value="option3"
                      />
                      <label class="form-check-label" for="inlineRadio3">Sangat Kurang Baik</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label
                    for="integritas"
                  >2.	Efektivitas terhadap penerima beasiswa</label>
                  <div class="form-check-group">
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio1"
                        value="option1"
                      />
                      <label class="form-check-label" for="inlineRadio1">Sangat Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio2"
                        value="option2"
                      />
                      <label class="form-check-label" for="inlineRadio2">Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio3"
                        value="option3"
                      />
                      <label class="form-check-label" for="inlineRadio3">Cukup Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio3"
                        value="option3"
                      />
                      <label class="form-check-label" for="inlineRadio3">Kurang Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio3"
                        value="option3"
                      />
                      <label class="form-check-label" for="inlineRadio3">Sangat Kurang Baik</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label
                    for="integritas"
                  >3.	Sikap SDM (Tendik) dalam memberikan pelayanan & informasi beasiswa</label>
                  <div class="form-check-group">
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio1"
                        value="option1"
                      />
                      <label class="form-check-label" for="inlineRadio1">Sangat Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio2"
                        value="option2"
                      />
                      <label class="form-check-label" for="inlineRadio2">Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio3"
                        value="option3"
                      />
                      <label class="form-check-label" for="inlineRadio3">Cukup Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio3"
                        value="option3"
                      />
                      <label class="form-check-label" for="inlineRadio3">Kurang Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio3"
                        value="option3"
                      />
                      <label class="form-check-label" for="inlineRadio3">Sangat Kurang Baik</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label
                    for="integritas"
                  >4.	Tingkat kemudahan dalam memahami informasi terkait jenis & persyaratan beasiswa </label>
                  <div class="form-check-group">
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio1"
                        value="option1"
                      />
                      <label class="form-check-label" for="inlineRadio1">Sangat Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio2"
                        value="option2"
                      />
                      <label class="form-check-label" for="inlineRadio2">Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio3"
                        value="option3"
                      />
                      <label class="form-check-label" for="inlineRadio3">Cukup Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio3"
                        value="option3"
                      />
                      <label class="form-check-label" for="inlineRadio3">Kurang Baik</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio3"
                        value="option3"
                      />
                      <label class="form-check-label" for="inlineRadio3">Sangat Kurang Baik</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="integritas">
                    5. Kritik dan Saran                  </label>
                    <input
                      type="text"
                      class="form-control"
                      id="prodi"
                      placeholder="Masukan Kritik dan Saran"
                    />

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
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
</template>

<script>
export default {
  mounted() {
    const barData = {
      type: "bar",
      data: {
        labels: [
          "Penyebaran Info",
          "Efektivitas",
          "Sikap SDM",
          "Pemahaman Info"
        ],
        datasets: [
          {
            // one line graph
            label: "Sangat Baik",
            data: [41, 96, 76, 96],
            backgroundColor: [
              "rgba(31,23,12,.7)", // Blue
              "rgba(31,23,12,.7)", // Blue
              "rgba(31,23,12,.7)", // Blue
              "rgba(31,23,12,.7)" // Blue
            ]
          },
          {
            // one line graph
            label: "Baik",
            data: [57, 64, 53, 62],
            backgroundColor: [
              "rgba(71, 183,132,.7)", // Green
              "rgba(71, 183,132,.7)", // Green
              "rgba(71, 183,132,.7)", // Green
              "rgba(71, 183,132,.7)" // Green
            ]
          },
          {
            // one line graph
            label: "Cukup Baik",
            data: [84, 62, 53, 42],
            backgroundColor: [
              "rgba(63,127,191,.7)", // Blue
              "rgba(63,127,191,.7)", // Blue
              "rgba(63,127,191,.7)", // Blue
              "rgba(63,127,191,.7)" // Blue
            ]
          },
          {
            // another line graph
            label: "Kurang Baik",
            data: [52, 63, 42, 31],
            backgroundColor: [
              "rgba(51,142,232,.7)", // Blue
              "rgba(51,142,232,.7)", // Blue
              "rgba(51,142,232,.7)", // Blue
              "rgba(51,142,232,.7)" // Blue
            ]
          },
          {
            // another line graph
            label: "Sangat Kurang Baik",
            data: [41, 31, 21, 22],
            backgroundColor: [
              "rgba(191,63,63,.7)", // red
              "rgba(191,63,63,.7)", // red
              "rgba(191,63,63,.7)", // red
              "rgba(191,63,63,.7)" // red
            ]
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
    this.createChart("kuisionerBeasiswaChart", barData);
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
