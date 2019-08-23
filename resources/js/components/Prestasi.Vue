<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Prestasi & Reputasi</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Prestasi</li>
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
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Prestasi</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 350px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                        </div>

                                        <button class='btn btn-sm btn-primary' data-toggle="modal" data-target="#addPrestasiModal" style="margin-left:5px;"><i class="fas fa-plus"></i>Add Prestasi</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Event</th>
                                            <th>Penyelenggara</th>
                                            <th>Tanggal</th>
                                            <th>Tingkat</th>
                                            <th>Kategori</th>
                                            <th>Juara</th>
                                            <th>Keterangan</th>
                                            <th>Peserta</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Gemastik XVIII</td>
                                            <td>Telkom Indonesia</td>
                                            <td>11-7-2014</td>
                                            <td>Nasional</td>
                                            <td>Software Development</td>
                                            <td>Juara 1</td>
                                            <td>-</td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-info"> 2 <i class="fas fa-eye" style="margin-left:5px"></i></button>
                                            </td>
                                            <td class="text-center"><i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> | <i class="fas fa-trash " style="margin-left:5px ; cursor:pointer"></i></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>ELCOW (ELECTRIC CONDUCTIVE CARBON WEIGHER)</td>
                                            <td>Telkom Indonesia</td>
                                            <td>11-7-2014</td>
                                            <td>Nasional</td>
                                            <td>Software Development</td>
                                            <td>Juara 1</td>
                                            <td>-</td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-info"> 2 <i class="fas fa-eye" style="margin-left:5px"></i></button>
                                            </td>
                                            <td class="text-center"><i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> | <i class="fas fa-trash " style="margin-left:5px ; cursor:pointer"></i></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Gemastik XVIII</td>
                                            <td>Telkom Indonesia</td>
                                            <td>11-7-2014</td>
                                            <td>Nasional</td>
                                            <td>Software Development</td>
                                            <td>Juara 1</td>
                                            <td>-</td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-info"> 2 <i class="fas fa-eye" style="margin-left:5px"></i></button>
                                            </td>
                                            <td class="text-center"><i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> | <i class="fas fa-trash " style="margin-left:5px ; cursor:pointer"></i></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Gemastik XVIII</td>
                                            <td>Telkom Indonesia</td>
                                            <td>11-7-2014</td>
                                            <td>Nasional</td>
                                            <td>Software Development</td>
                                            <td>Juara 1</td>
                                            <td>-</td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-info"> 2 <i class="fas fa-eye" style="margin-left:5px"></i></button>
                                            </td>
                                            <td class="text-center"><i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> | <i class="fas fa-trash " style="margin-left:5px ; cursor:pointer"></i></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Gemastik XVIII</td>
                                            <td>Telkom Indonesia</td>
                                            <td>11-7-2014</td>
                                            <td>Nasional</td>
                                            <td>Software Development</td>
                                            <td>Juara 1</td>
                                            <td>-</td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-info"> 2 <i class="fas fa-eye" style="margin-left:5px"></i></button>
                                            </td>
                                            <td class="text-center"><i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> | <i class="fas fa-trash " style="margin-left:5px ; cursor:pointer"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <div class="mo-0 float-right">
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
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Statistik</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <canvas id="tingkatLombaChart" style="height:400px"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Peserta</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 385px;">
                                <table class="table table-head-fixed">
                                    <thead>
                                        <tr>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Program Studi</th>
                                            <th class="text-center">Sertifikat</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>155150207111000</td>
                                            <td>John Doe</td>
                                            <td>Teknik Informatika</td>
                                            <td class="text-center"><i class="fas fa-file-pdf table-icon red"></i></td>
                                            <td class="text-center"><i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> | <i class="fas fa-trash " style="margin-left:5px ; cursor:pointer"></i></td>
                                        </tr>
                                        <tr>
                                            <td>155150207111000</td>
                                            <td>Alexander Pierce</td>
                                            <td>Teknik Informatika</td>
                                            <td class="text-center"><i class="fas fa-file-pdf table-icon red"></i></td>
                                            <td class="text-center"><i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> | <i class="fas fa-trash " style="margin-left:5px ; cursor:pointer"></i></td>
                                        </tr>
                                        <tr>
                                            <td>155150207111000</td>
                                            <td>Bob Doe</td>
                                            <td>Teknik Informatika</td>
                                            <td class="text-center"><i class="fas fa-file-pdf table-icon red"></i></td>
                                            <td class="text-center"><i class="fas fa-edit orange" style="margin-left:5px; cursor:pointer"></i> | <i class="fas fa-trash " style="margin-left:5px ; cursor:pointer"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">
                                <div class="mo-0 float-right">
                                    <button class='btn btn-sm btn-primary' data-toggle="modal" data-target="#addPesertaModal"><i class="fas fa-plus"></i>Add Peserta</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->

        <!-- Modal -->
        <div class="modal fade" id="addPrestasiModal" tabindex="-1" role="dialog" aria-labelledby="addPrestasiModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="addPrestasiModalTitle">Tambah Prestasi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Event</label>
                                <input type="text" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Penyelenggara</label>
                                <input type="text" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal</label>
                                <input type="date" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tingkat</label>
                                <select class="form-control" name="" id="">
                                    <option value="">Lokal</option>
                                    <option value="">Regional</option>
                                    <option value="">Nasional</option>
                                    <option value="">Internasional</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kategori</label>
                                <input type="text" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Juara</label>
                                <input type="text" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Keterangan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" @click="showSuccessAlert" data-dismiss="modal">Submit</button>
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
                type: 'bar',
                data: {
                    labels: ['2013', '2014', '2015', '2016', '2017'],
                    datasets: [{ // one line graph
                        label: 'Lokal',
                        data: [50, 65, 40, 40, 65],
                        backgroundColor: [
                            'rgba(31,23,12,.4)', // Blue
                            'rgba(31,23,12,.4)', // Blue
                            'rgba(31,23,12,.4)', // Blue
                            'rgba(31,23,12,.4)', // Blue
                            'rgba(31,23,12,.4)', // Blue
                        ],
                    }, { // one line graph
                        label: 'Regional',
                        data: [100, 50, 100, 50, 100],
                        backgroundColor: [
                            'rgba(71, 183,132,.4)', // Green
                            'rgba(71, 183,132,.4)', // Green
                            'rgba(71, 183,132,.4)', // Green
                            'rgba(71, 183,132,.4)', // Green
                            'rgba(71, 183,132,.4)', // Green

                        ],
                    }, { // one line graph
                        label: 'Nasional',
                        data: [50, 100, 50, 100, 50],
                        backgroundColor: [
                            'rgba(63,127,191,.4)', // Blue
                            'rgba(63,127,191,.4)', // Blue
                            'rgba(63,127,191,.4)', // Blue
                            'rgba(63,127,191,.4)', // Blue
                            'rgba(63,127,191,.4)', // Blue
                        ],
                    }, { // another line graph
                        label: 'Internasional',
                        data: [4.8, 12.1, 12.7, 6.7, 139.8],
                        backgroundColor: [
                            'rgba(191,63,63,.4)', // red
                            'rgba(191,63,63,.4)', // red
                            'rgba(191,63,63,.4)', // red
                            'rgba(191,63,63,.4)', // red
                            'rgba(191,63,63,.4)', // red
                        ],
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    lineTension: 1,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                padding: 25,
                            }
                        }]
                    }
                }
            }
            this.createChart('tingkatLombaChart', lineData);
        }, methods: {
            createChart(chartId, chartData) {
                    const ctx = document.getElementById(chartId);
                    const myChart = new Chart(ctx, {
                        type: chartData.type,
                        data: chartData.data,
                        options: chartData.options,
                    });
                },
                showDeleteAlert() {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.value) {
                            Swal.fire({
                                title: 'Deleted!',
                                text: 'Your file has been deleted.',
                                type: 'success',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    })
                },
                showSuccessAlert() {
                    Swal.fire({
                        type: 'success',
                        title: 'Data Berhasil Disimpan',
                        showConfirmButton: false,
                        timer: 1500,
                    })
                }
        }
    }
</script>