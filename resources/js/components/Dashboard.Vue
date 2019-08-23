<template>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active">Dashboard</li>
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
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Penerimaan Mahasiswa Baru</h3>

            <div class="card-tools">
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
          </div>
          <!-- /.card-header -->

          <div class="card-body">
            <div class="row">
              <div class="col-3">
                <div class="chart">
                  <canvas id="chart1" style="height:400px"></canvas>
                </div>
              </div>
              <div class="col-3">
                <div class="chart">
                  <canvas id="chart2" style="height:400px"></canvas>
                </div>
              </div>
              <div class="col-3">
                <div class="chart">
                  <canvas id="chart3" style="height:400px"></canvas>
                </div>
              </div>
              <div class="col-3">
                <div class="chart">
                  <canvas id="chart4" style="height:400px"></canvas>
                </div>
              </div>
            </div>
          </div>
          <!-- /. card-body -->
        </div>
        <!-- /. card -->

        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">Profil Mahasiswa</h3>

            <div class="card-tools">
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
          </div>
          <!-- /.card-header -->

          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <div class="chart">
                  <canvas id="chart5" style="height:400px"></canvas>
                </div>
              </div>
              <div class="col-4">
                <div class="chart">
                  <canvas id="chart6" style="height:400px"></canvas>
                </div>
              </div>
              <div class="col-4">
                <div class="chart">
                  <canvas id="chart7" style="height:400px"></canvas>
                </div>
              </div>
            </div>
          </div>
          <!-- /. card-body -->
        </div>
        <!-- /. card -->

        <div class="row">
          <div class="col-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Beasiswa</h3>

                <div class="card-tools">
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->

              <div class="card-body">
                <div class="chart">
                  <canvas id="chart8" style="height:400px"></canvas>
                </div>
              </div>
              <!-- /. card-body -->
            </div>
            <!-- /. card -->
          </div>
          <div class="col-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Prestasi Reputasi</h3>

                <div class="card-tools">
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->

              <div class="card-body">
                <div class="chart">
                  <canvas id="chart9" style="height:400px"></canvas>
                </div>
              </div>
              <!-- /. card-body -->
            </div>
            <!-- /. card -->
          </div>
        </div>

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Alumni</h3>
          </div>
          <div class="card-body">
            <div class="row">
            <div class="col-3">
              <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                  <div class></div>
                </div>
                <div class="chartjs-size-monitor-shrink">
                  <div class></div>
                </div>
              </div>
              <canvas
                id="chart10"
                style="height: 360px; min-height: 230px; display: block; "
                height="360"
                class="chartjs-render-monitor"
              ></canvas>
            </div>
            <div class="col-6">
                <div class="chart">
                  <canvas id="chart11" style="height:400px"></canvas>
                </div>
            </div>
            <div class="col-3">
              <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                  <div class></div>
                </div>
                <div class="chartjs-size-monitor-shrink">
                  <div class></div>
                </div>
              </div>
              <canvas
                id="chart12"
                style="height: 360px; min-height: 230px; display: block; "
                height="360"
                class="chartjs-render-monitor"
              ></canvas>
            </div>
            </div>
          </div>
          <!-- /.card-body -->
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
    const chart1Data = {
      type: "bar",
      data: {
        labels: ["2016", "2017", "2018"],
        datasets: [
          {
            // one line graph
            label: "Daya Tampung",
            data: [31, 21, 42],
            backgroundColor: [
              "rgba(181, 5, 5,.4)",
              "rgba(181, 5, 5,.4)",
              "rgba(181, 5, 5,.4)"
            ],
            borderColor: ["rgb(181, 5, 5)", "rgb(181, 5, 5)", "rgb(181, 5, 5)"],
            borderWidth: 1
          },
          {
            // one line graph
            label: "Peminat",
            data: [41, 52, 21],
            borderColor: [
              "rgb(22, 166, 0)",
              "rgb(22, 166, 0)",
              "rgb(22, 166, 0)"
            ],
            backgroundColor: [
              "rgba(22, 166, 0,.4)",
              "rgba(22, 166, 0,.4)",
              "rgba(22, 166, 0,.4)"
            ],
            borderWidth: 1
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        title: {
          display: true,
          text: "Jumlah Peminat : Daya Tampung"
        },
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

    const chart2Data = {
      type: "bar",
      data: {
        labels: ["2016", "2017", "2018"],
        datasets: [
          {
            // one line graph
            label: "Daya Tampung",
            data: [41, 52, 21],
            backgroundColor: [
              "rgba(191,63,63,.4)",
              "rgba(191,63,63,.4)",
              "rgba(191,63,63,.4)"
            ],
            borderColor: ["rgb(191,63,63)", "rgb(191,63,63)", "rgb(191,63,63)"],
            borderWidth: 1
          },
          {
            // one line graph
            label: "Lulus Seleksi",
            data: [51, 21, 32],
            backgroundColor: [
              "rgba(224, 153, 0,.4)",
              "rgba(224, 153, 0,.4)",
              "rgba(224, 153, 0,.4)"
            ],
            borderColor: [
              "rgb(224, 153, 0)",
              "rgb(224, 153, 0)",
              "rgb(224, 153, 0)"
            ],
            borderWidth: 1
          },
          {
            // one line graph
            label: "Daftar Ulang",
            data: [31, 21, 42],
            backgroundColor: [
              "rgba(71, 183,132,.4)",
              "rgba(71, 183,132,.4)",
              "rgba(71, 183,132,.4)"
            ],
            borderColor: [
              "rgb(71, 183,132)",
              "rgb(71, 183,132)",
              "rgb(71, 183,132)"
            ],
            borderWidth: 1
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        title: {
          display: true,
          text: "Daya Tampung : Lulus Seleksi : Daftar Ulang"
        },
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

    const chart3Data = {
      type: "bar",
      data: {
        labels: ["2016", "2017", "2018"],
        datasets: [
          {
            // one line graph
            label: "SNMPTN",
            data: [41, 52, 21],
            backgroundColor: [
              "rgba(191,63,63,.4)", // red
              "rgba(191,63,63,.4)", // red
              "rgba(191,63,63,.4)" // red
            ],
            borderColor: [
              "rgb(191,63,63)", // red
              "rgb(191,63,63)", // red
              "rgb(191,63,63)" // red
            ],
            borderWidth: 1
          },
          {
            // one line graph
            label: "SBMPTN",
            data: [63, 42, 31],
            backgroundColor: [
              "rgba(224, 153, 0,.4)", // red
              "rgba(224, 153, 0,.4)", // red
              "rgba(224, 153, 0,.4)" // red
            ],
            borderColor: [
              "rgb(224, 153, 0)", // red
              "rgb(224, 153, 0)", // red
              "rgb(224, 153, 0)" // red
            ],
            borderWidth: 1
          },
          {
            // one line graph
            label: "SPMK",
            data: [53, 85, 42],
            borderColor: [
              "rgb(22, 166, 0)",
              "rgb(22, 166, 0)",
              "rgb(22, 166, 0)"
            ],
            backgroundColor: [
              "rgba(22, 166, 0,.4)",
              "rgba(22, 166, 0,.4)",
              "rgba(22, 166, 0,.4)"
            ],
            borderWidth: 1
          },
          {
            // one line graph
            label: "SAP",
            data: [54, 75, 34],
            backgroundColor: [
              "rgba(71, 183,132,.4)",
              "rgba(71, 183,132,.4)",
              "rgba(71, 183,132,.4)"
            ],
            borderColor: [
              "rgb(71, 183,132)",
              "rgb(71, 183,132)",
              "rgb(71, 183,132)"
            ],
            borderColor: 1
          },
          {
            // one line graph
            label: "Non-Reguler",
            data: [31, 21, 42],
            backgroundColor: [
              "rgba(31,23,12,.4)", // Blue
              "rgba(31,23,12,.4)", // Blue
              "rgba(31,23,12,.4)" // Blue
            ],
            borderColor: [
              "rgb(31,23,12)", // Blue
              "rgb(31,23,12)", // Blue
              "rgb(31,23,12)" // Blue
            ],
            borderWidth: 1
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        title: {
          display: true,
          text: "Peminat Berdasarkan Jalur Masuk"
        },
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

    const chart4Data = {
      type: "bar",
      data: {
        labels: ["2016", "2017", "2018"],
        datasets: [
          {
            // one line graph
            label: "SNMPTN",
            data: [41, 52, 21],
            backgroundColor: [
              "rgba(191,63,63,.4)", // red
              "rgba(191,63,63,.4)", // red
              "rgba(191,63,63,.4)" // red
            ],
            borderColor: [
              "rgb(191,63,63)", // red
              "rgb(191,63,63)", // red
              "rgb(191,63,63)" // red
            ],
            borderWidth: 1
          },
          {
            // one line graph
            label: "SBMPTN",
            data: [63, 42, 31],
            backgroundColor: [
              "rgba(224, 153, 0,.4)", // red
              "rgba(224, 153, 0,.4)", // red
              "rgba(224, 153, 0,.4)" // red
            ],
            borderColor: [
              "rgb(224, 153, 0)", // red
              "rgb(224, 153, 0)", // red
              "rgb(224, 153, 0)" // red
            ],
            borderWidth: 1
          },
          {
            // one line graph
            label: "SPMK",
            data: [53, 85, 42],
            borderColor: [
              "rgb(22, 166, 0)",
              "rgb(22, 166, 0)",
              "rgb(22, 166, 0)"
            ],
            backgroundColor: [
              "rgba(22, 166, 0,.4)",
              "rgba(22, 166, 0,.4)",
              "rgba(22, 166, 0,.4)"
            ],
            borderWidth: 1
          },
          {
            // one line graph
            label: "SAP",
            data: [54, 75, 34],
            backgroundColor: [
              "rgba(71, 183,132,.4)",
              "rgba(71, 183,132,.4)",
              "rgba(71, 183,132,.4)"
            ],
            borderColor: [
              "rgb(71, 183,132)",
              "rgb(71, 183,132)",
              "rgb(71, 183,132)"
            ],
            borderColor: 1
          },
          {
            // one line graph
            label: "Non-Reguler",
            data: [31, 21, 42],
            backgroundColor: [
              "rgba(31,23,12,.4)", // Blue
              "rgba(31,23,12,.4)", // Blue
              "rgba(31,23,12,.4)" // Blue
            ],
            borderColor: [
              "rgb(31,23,12)", // Blue
              "rgb(31,23,12)", // Blue
              "rgb(31,23,12)" // Blue
            ],
            borderWidth: 1
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        title: {
          display: true,
          text: "Daya Tampung Berdasarkan Jalur Masuk"
        },
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

    const chart5Data = {
      type: "bar",
      data: {
        labels: ["2016", "2017", "2018"],
        datasets: [
          {
            // one line graph
            label: "Semester 1",
            data: [41, 52, 21],
            backgroundColor: [
              "rgba(191,63,63,.4)", // red
              "rgba(191,63,63,.4)", // red
              "rgba(191,63,63,.4)" // red
            ],
            borderColor: [
              "rgb(191,63,63)", // red
              "rgb(191,63,63)", // red
              "rgb(191,63,63)" // red
            ],
            borderWidth: 1
          },
          {
            // one line graph
            label: "Semester 2",
            data: [63, 42, 31],
            backgroundColor: [
              "rgba(224, 153, 0,.4)", // red
              "rgba(224, 153, 0,.4)", // red
              "rgba(224, 153, 0,.4)" // red
            ],
            borderColor: [
              "rgb(224, 153, 0)", // red
              "rgb(224, 153, 0)", // red
              "rgb(224, 153, 0)" // red
            ],
            borderWidth: 1
          },
          {
            // one line graph
            label: "Semester 3",
            data: [53, 85, 42],
            borderColor: [
              "rgb(22, 166, 0)",
              "rgb(22, 166, 0)",
              "rgb(22, 166, 0)"
            ],
            backgroundColor: [
              "rgba(22, 166, 0,.4)",
              "rgba(22, 166, 0,.4)",
              "rgba(22, 166, 0,.4)"
            ],
            borderWidth: 1
          },
          {
            // one line graph
            label: "Semester 4",
            data: [54, 75, 34],
            backgroundColor: [
              "rgba(71, 183,132,.4)",
              "rgba(71, 183,132,.4)",
              "rgba(71, 183,132,.4)"
            ],
            borderColor: [
              "rgb(71, 183,132)",
              "rgb(71, 183,132)",
              "rgb(71, 183,132)"
            ],
            borderColor: 1
          },
          {
            // one line graph
            label: "Semester 5",
            data: [31, 21, 42],
            backgroundColor: [
              "rgba(31,23,12,.4)", // Blue
              "rgba(31,23,12,.4)", // Blue
              "rgba(31,23,12,.4)" // Blue
            ],
            borderColor: [
              "rgb(31,23,12)", // Blue
              "rgb(31,23,12)", // Blue
              "rgb(31,23,12)" // Blue
            ],
            borderWidth: 1
          },
          {
            // one line graph
            label: "Semester 6",
            data: [32, 26, 48],
            backgroundColor: [
              "rgba(196, 196, 196,.4)", // Blue
              "rgba(196, 196, 196,.4)", // Blue
              "rgba(196, 196, 196,.4)" // Blue
            ],
            borderColor: [
              "rgb(196, 196, 196)", // Blue
              "rgb(196, 196, 196)", // Blue
              "rgb(196, 196, 196)" // Blue
            ],
            borderWidth: 1
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        title: {
          display: true,
          text: "IPK Maksimal"
        },
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

    const chart6Data = {
      type: "bar",
      data: {
        labels: ["2016", "2017", "2018"],
        datasets: [
          {
            // one line graph
            label: "Semester 1",
            data: [41, 52, 21],
            backgroundColor: [
              "rgba(191,63,63,.4)", // red
              "rgba(191,63,63,.4)", // red
              "rgba(191,63,63,.4)" // red
            ],
            borderColor: [
              "rgb(191,63,63)", // red
              "rgb(191,63,63)", // red
              "rgb(191,63,63)" // red
            ],
            borderWidth: 1
          },
          {
            // one line graph
            label: "Semester 2",
            data: [63, 42, 31],
            backgroundColor: [
              "rgba(224, 153, 0,.4)", // red
              "rgba(224, 153, 0,.4)", // red
              "rgba(224, 153, 0,.4)" // red
            ],
            borderColor: [
              "rgb(224, 153, 0)", // red
              "rgb(224, 153, 0)", // red
              "rgb(224, 153, 0)" // red
            ],
            borderWidth: 1
          },
          {
            // one line graph
            label: "Semester 3",
            data: [53, 85, 42],
            borderColor: [
              "rgb(22, 166, 0)",
              "rgb(22, 166, 0)",
              "rgb(22, 166, 0)"
            ],
            backgroundColor: [
              "rgba(22, 166, 0,.4)",
              "rgba(22, 166, 0,.4)",
              "rgba(22, 166, 0,.4)"
            ],
            borderWidth: 1
          },
          {
            // one line graph
            label: "Semester 4",
            data: [54, 75, 34],
            backgroundColor: [
              "rgba(71, 183,132,.4)",
              "rgba(71, 183,132,.4)",
              "rgba(71, 183,132,.4)"
            ],
            borderColor: [
              "rgb(71, 183,132)",
              "rgb(71, 183,132)",
              "rgb(71, 183,132)"
            ],
            borderColor: 1
          },
          {
            // one line graph
            label: "Semester 5",
            data: [31, 21, 42],
            backgroundColor: [
              "rgba(31,23,12,.4)", // Blue
              "rgba(31,23,12,.4)", // Blue
              "rgba(31,23,12,.4)" // Blue
            ],
            borderColor: [
              "rgb(31,23,12)", // Blue
              "rgb(31,23,12)", // Blue
              "rgb(31,23,12)" // Blue
            ],
            borderWidth: 1
          },
          {
            // one line graph
            label: "Semester 6",
            data: [32, 26, 48],
            backgroundColor: [
              "rgba(196, 196, 196,.4)", // Blue
              "rgba(196, 196, 196,.4)", // Blue
              "rgba(196, 196, 196,.4)" // Blue
            ],
            borderColor: [
              "rgb(196, 196, 196)", // Blue
              "rgb(196, 196, 196)", // Blue
              "rgb(196, 196, 196)" // Blue
            ],
            borderWidth: 1
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        title: {
          display: true,
          text: "IPK Minimal"
        },
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

    const chart7Data = {
      type: "bar",
      data: {
        labels: ["2016", "2017", "2018"],
        datasets: [
          {
            // one line graph
            label: "Semester 1",
            data: [41, 52, 21],
            backgroundColor: [
              "rgba(191,63,63,.4)", // red
              "rgba(191,63,63,.4)", // red
              "rgba(191,63,63,.4)" // red
            ],
            borderColor: [
              "rgb(191,63,63)", // red
              "rgb(191,63,63)", // red
              "rgb(191,63,63)" // red
            ],
            borderWidth: 1
          },
          {
            // one line graph
            label: "Semester 2",
            data: [63, 42, 31],
            backgroundColor: [
              "rgba(224, 153, 0,.4)", // red
              "rgba(224, 153, 0,.4)", // red
              "rgba(224, 153, 0,.4)" // red
            ],
            borderColor: [
              "rgb(224, 153, 0)", // red
              "rgb(224, 153, 0)", // red
              "rgb(224, 153, 0)" // red
            ],
            borderWidth: 1
          },
          {
            // one line graph
            label: "Semester 3",
            data: [53, 85, 42],
            borderColor: [
              "rgb(22, 166, 0)",
              "rgb(22, 166, 0)",
              "rgb(22, 166, 0)"
            ],
            backgroundColor: [
              "rgba(22, 166, 0,.4)",
              "rgba(22, 166, 0,.4)",
              "rgba(22, 166, 0,.4)"
            ],
            borderWidth: 1
          },
          {
            // one line graph
            label: "Semester 4",
            data: [54, 75, 34],
            backgroundColor: [
              "rgba(71, 183,132,.4)",
              "rgba(71, 183,132,.4)",
              "rgba(71, 183,132,.4)"
            ],
            borderColor: [
              "rgb(71, 183,132)",
              "rgb(71, 183,132)",
              "rgb(71, 183,132)"
            ],
            borderColor: 1
          },
          {
            // one line graph
            label: "Semester 5",
            data: [31, 21, 42],
            backgroundColor: [
              "rgba(31,23,12,.4)", // Blue
              "rgba(31,23,12,.4)", // Blue
              "rgba(31,23,12,.4)" // Blue
            ],
            borderColor: [
              "rgb(31,23,12)", // Blue
              "rgb(31,23,12)", // Blue
              "rgb(31,23,12)" // Blue
            ],
            borderWidth: 1
          },
          {
            // one line graph
            label: "Semester 6",
            data: [32, 26, 48],
            backgroundColor: [
              "rgba(196, 196, 196,.4)", // Blue
              "rgba(196, 196, 196,.4)", // Blue
              "rgba(196, 196, 196,.4)" // Blue
            ],
            borderColor: [
              "rgb(196, 196, 196)", // Blue
              "rgb(196, 196, 196)", // Blue
              "rgb(196, 196, 196)" // Blue
            ],
            borderWidth: 1
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        title: {
          display: true,
          text: "IPK Rata-rata"
        },
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

    const chart8Data = {
      type: "line",
      data: {
        labels: ["2015", "2016", "2017"],
        datasets: [
          {
            // one line graph
            label: "Jumlah Penerima Beasiswa",
            data: [40, 40, 65],
            backgroundColor: ["rgba(63,127,191,.1)"],
            borderColor: [
              "rgba(63,127,191,1)",
              "rgba(63,127,191,1)",
              "rgba(63,127,191,1)"
            ],
            borderWidth: 2
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        title: {
          display: true,
          text: "Beasiswa Per Tahun"
        },
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

    const chart9Data = {
      type: "bar",
      data: {
        labels: ["2015", "2016", "2017"],
        datasets: [
          {
            // one line graph
            label: "Lokal",
            data: [40, 40, 65],
            backgroundColor: [
              "rgba(31,23,12,.4)", // Blue
              "rgba(31,23,12,.4)", // Blue
              "rgba(31,23,12,.4)" // Blue
            ],
            borderColor: [
              "rgb(31,23,12)", // Blue
              "rgb(31,23,12)", // Blue
              "rgb(31,23,12)" // Blue
            ]
          },
          {
            // one line graph
            label: "Regional",
            data: [100, 50, 100],
            backgroundColor: [
              "rgba(71, 183,132,.4)", // Green
              "rgba(71, 183,132,.4)", // Green
              "rgba(71, 183,132,.4)" // Green
            ],
            borderColor: [
              "rgb(71, 183,132)", // Green
              "rgb(71, 183,132)", // Green
              "rgb(71, 183,132)" // Green
            ]
          },
          {
            // one line graph
            label: "Nasional",
            data: [50, 100, 50],
            backgroundColor: [
              "rgba(63,127,191,.4)", // Blue
              "rgba(63,127,191,.4)", // Blue
              "rgba(63,127,191,.4)" // Blue
            ],
            borderColor: [
              "rgb(63,127,191)", // Blue
              "rgb(63,127,191)", // Blue
              "rgb(63,127,191)" // Blue
            ]
          },
          {
            // another line graph
            label: "Internasional",
            data: [12.7, 6.7, 139.8],
            backgroundColor: [
              "rgba(191,63,63,.4)", // red
              "rgba(191,63,63,.4)", // red
              "rgba(191,63,63,.4)" // red
            ],
            borderColor: [
              "rgb(191,63,63)", // red
              "rgb(191,63,63)", // red
              "rgb(191,63,63)" // red
            ]
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        responsive: true,
        title: {
          display: true,
          text: "Prestasi Per Tahun"
        },
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

    const chart10Data = {
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
        title: {
          display: true,
          text: "Status Alumni"
        },
        responsive: true
      }
    };

    const chart11Data = {
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
        title: {
          display: true,
          text: "Pengguna Lulusan"
        },
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

    const chart12Data = {
      type: "pie",
      data: {
        labels: ["Sesuai", "Tidak Sesuai"],
        datasets: [
          {
            data: [1000, 450],
            backgroundColor: ["rgb(22, 166, 0)", "#f39c12"]
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        title: {
          display: true,
          text: "Kesesuaian Bidang Kerja"
        },
        responsive: true
      }
    };

    this.createChart("chart1", chart1Data);
    this.createChart("chart2", chart2Data);
    this.createChart("chart3", chart3Data);
    this.createChart("chart4", chart4Data);
    this.createChart("chart5", chart5Data);
    this.createChart("chart6", chart6Data);
    this.createChart("chart7", chart7Data);
    this.createChart("chart8", chart8Data);
    this.createChart("chart9", chart9Data);
    this.createChart("chart10", chart10Data);
    this.createChart("chart11", chart11Data);
    this.createChart("chart12", chart12Data);
  },
  methods: {
    createChart(chartId, chartData) {
      const ctx = document.getElementById(chartId);
      const myChart = new Chart(ctx, {
        type: chartData.type,
        data: chartData.data,
        options: chartData.options
      });
    }
  }
};
</script>
