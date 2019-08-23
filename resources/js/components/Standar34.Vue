<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Standar 3.4</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Standar 3.4</li>
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
                                <h3 class="card-title">Data Kegiatan Alumni</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                            <td>Penggunan Hasil Pelacakan</td>
                                            <td>11-7-2014</td>
                                            <td><i class="fas fa-file-pdf table-icon red"></i></td>
                                            <td>
                                                <button class="btn btn-sm btn-danger">x</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Proses Pembelajaran</td>
                                            <td>11-7-2014</td>
                                            <td><i class="fas fa-file-pdf table-icon red"></i></td>
                                            <td>
                                                <button class="btn btn-sm btn-danger">x</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Penggalangan dana</td>
                                            <td>11-7-2014</td>
                                            <td><i class="fas fa-file-pdf table-icon red"></i></td>
                                            <td>
                                                <button class="btn btn-sm btn-danger">x</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Bangun Jejaring</td>
                                            <td>11-7-2014</td>
                                            <td><i class="fas fa-file-pdf table-icon red"></i></td>
                                            <td>
                                                <button class="btn btn-sm btn-danger">x</button>
                                            </td>
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

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div></div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>