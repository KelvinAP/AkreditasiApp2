<template>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Alumni</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active">Alumni</li>
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
          <div class="col-3">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Status Alumni</h3>
              </div>
              <div class="card-body">
                <div class="chartjs-size-monitor">
                  <div class="chartjs-size-monitor-expand">
                    <div class></div>
                  </div>
                  <div class="chartjs-size-monitor-shrink">
                    <div class></div>
                  </div>
                </div>
                <canvas
                  id="statusAlumniChart"
                  style="height: 360px; min-height: 230px; display: block; "
                  height="360"
                  class="chartjs-render-monitor"
                ></canvas>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div class="col-9">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pengguna Lulusan</h3>
                <div class="card-tools">
                  <div class="row" style="width:250px">
                    <div class="col-5">
                  <select style="display : inline-block" class="form-control">
                    <option value="">2015</option>
                    <option value="">2019</option>
                    <option value="">2018</option>
                    <option value="">2017</option>
                    <option value="">2016</option>
                  </select>
                    </div>
                    <div class="col-2" style="text-align:center">
                      <p style="display : inline-block">to </p>
                    </div>
                    <div class="col-5">
                  <select style="display : inline-block" class="form-control">
                    <option value="">2019</option>
                    <option value="">2018</option>
                    <option value="">2017</option>
                    <option value="">2016</option>
                    <option value="">2015</option>
                  </select>
                    </div>
                  </div>

                  

                </div>
              </div>
              <div class="card-body">
                <div class="chartjs-size-monitor">
                  <div class="chartjs-size-monitor-expand">
                    <div class></div>
                  </div>
                  <div class="chartjs-size-monitor-shrink">
                    <div class></div>
                  </div>
                </div>
                <canvas
                  id="pendapatLulusanChart"
                  style="height: 360px; min-height: 230px; display: block;"
                  height="360"
                  class="chartjs-render-monitor"
                ></canvas>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Rangkuman</h3>
            <div class="card-tools">
              <a href="alumni/dataPendidikan">
                <button type="button" class="btn btn-primary btn-sm">
                  <i class="fas fa-eye" style="margin-right:5px"></i>Data Pendidikan
                </button>
              </a>
              <a href="alumni/dataPekerjaan">
                <button type="button" class="btn btn-success btn-sm">
                  <i class="fas fa-eye" style="margin-right:5px"></i>Data Pekerjaan
                </button>
              </a>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 350px;">
            <table
              id="alumni"
              class="table table-bordered table-striped table-head-fixed table-center"
            >
              <thead>
                <tr>
                  <th rowspan="2">Tahun</th>
                  <th rowspan="2">
                    Jumlah
                    <br />Lulusan
                  </th>
                  <th colspan="2">Lanjut</th>
                  <th rowspan="2">
                    Rata-rata
                    <br />Masa Tunggu
                  </th>
                  <th rowspan="2">
                    Kesesuaian
                    <br />Bidang
                  </th>
                  <th colspan="7">Rata-rata Nilai Kemampuan Alumni</th>
                </tr>
                <tr>
                  <td>Pendidikan</td>
                  <td>Bekerja</td>
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
                  <td>2018</td>
                  <td>240</td>
                  <td>50</td>
                  <td>190</td>
                  <td>18 Bulan</td>
                  <td>80%</td>
                  <td>68</td>
                  <td>89</td>
                  <td>87</td>
                  <td>68</td>
                  <td>97</td>
                  <td>57</td>
                  <td>97</td>
                </tr>
                <tr>
                  <td>2017</td>
                  <td>240</td>
                  <td>50</td>
                  <td>190</td>
                  <td>18 Bulan</td>
                  <td>80%</td>
                  <td>68</td>
                  <td>89</td>
                  <td>87</td>
                  <td>68</td>
                  <td>97</td>
                  <td>57</td>
                  <td>97</td>
                </tr>
                <tr>
                  <td>2016</td>
                  <td>240</td>
                  <td>50</td>
                  <td>190</td>
                  <td>18 Bulan</td>
                  <td>80%</td>
                  <td>68</td>
                  <td>89</td>
                  <td>87</td>
                  <td>68</td>
                  <td>97</td>
                  <td>57</td>
                  <td>97</td>
                </tr>
                <tr>
                  <td>2015</td>
                  <td>240</td>
                  <td>50</td>
                  <td>190</td>
                  <td>18 Bulan</td>
                  <td>80%</td>
                  <td>68</td>
                  <td>89</td>
                  <td>87</td>
                  <td>68</td>
                  <td>97</td>
                  <td>57</td>
                  <td>97</td>
                </tr>
                <tr>
                  <td>2014</td>
                  <td>240</td>
                  <td>50</td>
                  <td>190</td>
                  <td>18 Bulan</td>
                  <td>80%</td>
                  <td>68</td>
                  <td>89</td>
                  <td>87</td>
                  <td>68</td>
                  <td>97</td>
                  <td>57</td>
                  <td>97</td>
                </tr>
                <tr>
                  <td>2014</td>
                  <td>240</td>
                  <td>50</td>
                  <td>190</td>
                  <td>18 Bulan</td>
                  <td>80%</td>
                  <td>68</td>
                  <td>89</td>
                  <td>87</td>
                  <td>68</td>
                  <td>97</td>
                  <td>57</td>
                  <td>97</td>
                </tr>
                <tr>
                  <td>2014</td>
                  <td>240</td>
                  <td>50</td>
                  <td>190</td>
                  <td>18 Bulan</td>
                  <td>80%</td>
                  <td>68</td>
                  <td>89</td>
                  <td>87</td>
                  <td>68</td>
                  <td>97</td>
                  <td>57</td>
                  <td>97</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
</template>

<script>
export default {
  mounted() {
    const pieData = {
      type: "pie",
      data: {
        labels: ["Bekerja", "Pendidikan", "Tanpa Status"],
        datasets: [
          {
            data: [1000, 450, 100],
            backgroundColor: ["#f56954", "#f39c12", "#00c0ef"]
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true
      }
    };
    this.createChart("statusAlumniChart", pieData);
    const barData = {
      type: "bar",
      data: {
        labels: ["Sangat Baik", "Baik", "Cukup", "Kurang"],
        datasets: [
          {
            // one line graph
            label: "Integritas",
            data: [50, 65, 40, 40],
            backgroundColor: [
              "rgba(31,23,12,.4)", // Blue
              "rgba(31,23,12,.4)", // Blue
              "rgba(31,23,12,.4)", // Blue
              "rgba(31,23,12,.4)" // Blue
            ]
          },
          {
            // one line graph
            label: "Profesionalisme",
            data: [100, 50, 100, 50],
            backgroundColor: [
              "rgba(71, 183,132,.4)", // Green
              "rgba(71, 183,132,.4)", // Green
              "rgba(71, 183,132,.4)", // Green
              "rgba(71, 183,132,.4)" // Green
            ]
          },
          {
            // one line graph
            label: "Bahasa Inggris",
            data: [50, 100, 50, 100],
            backgroundColor: [
              "rgba(63,127,191,.4)", // Blue
              "rgba(63,127,191,.4)", // Blue
              "rgba(63,127,191,.4)", // Blue
              "rgba(63,127,191,.4)" // Blue
            ]
          },
          {
            // one line graph
            label: "Teknologi Informasi",
            data: [50, 100, 50, 100],
            backgroundColor: [
              "rgba(63,127,191,.4)", // Blue
              "rgba(63,127,191,.4)", // Blue
              "rgba(63,127,191,.4)", // Blue
              "rgba(63,127,191,.4)" // Blue
            ]
          },
          {
            // one line graph
            label: "Komunikasi",
            data: [50, 100, 50, 100],
            backgroundColor: [
              "rgba(63,127,191,.4)", // Blue
              "rgba(63,127,191,.4)", // Blue
              "rgba(63,127,191,.4)", // Blue
              "rgba(63,127,191,.4)" // Blue
            ]
          },
          {
            // one line graph
            label: "Kerjasama tim",
            data: [50, 100, 50, 100],
            backgroundColor: [
              "rgba(14, 240, 14, 0.1);",
              "rgba(14, 240, 14, 0.1);",
              "rgba(14, 240, 14, 0.1);",
              "rgba(14, 240, 14, 0.1);"
            ]
          },
          {
            // another line graph
            label: "Pengembangan Diri",
            data: [4.8, 12.1, 12.7, 6.7],
            backgroundColor: [
              "rgba(191,63,63,.4)", // red
              "rgba(191,63,63,.4)", // red
              "rgba(191,63,63,.4)", // red
              "rgba(191,63,63,.4)" // red
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
    this.createChart("pendapatLulusanChart", barData);
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
