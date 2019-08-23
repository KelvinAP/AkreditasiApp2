<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Standar 3.2</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Standar 3.2</li>
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
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Layanan Kepada Mahasiswa</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Jenis Pelayanan kepada Mahasiswa</th>
                                    <th colspan="2">Data Dukung</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2">1</td>
                                    <td rowspan="2">BImbingan Konseling</td>
                                    <td>Pendukung A</td>
                                    <td><i class="fas fa-eye table-icon indigo"></i></td>
                                </tr>
                                <tr>
                                    <td>Pendukung B</td>
                                    <td><i class="fas fa-eye table-icon indigo"></i></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">2</td>
                                    <td rowspan="2">Minat dan Bakat (ekstra kurikuler)</td>
                                    <td>Pendukung A</td>
                                    <td><i class="fas fa-eye table-icon indigo"></i></td>
                                </tr>
                                <tr>
                                    <td>Pendukung B</td>
                                    <td><i class="fas fa-eye table-icon indigo"></i></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">3</td>
                                    <td rowspan="2">Pembinaan soft skills</td>
                                    <td>Pendukung A</td>
                                    <td><i class="fas fa-eye table-icon indigo"></i></td>
                                </tr>
                                <tr>
                                    <td>Pendukung B</td>
                                    <td><i class="fas fa-eye table-icon indigo"></i></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">4</td>
                                    <td rowspan="2">Beasiswa</td>
                                    <td>Pendukung A</td>
                                    <td><i class="fas fa-eye table-icon indigo"></i></td>
                                </tr>
                                <tr>
                                    <td>Pendukung B</td>
                                    <td><i class="fas fa-eye table-icon indigo"></i></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">5</td>
                                    <td rowspan="2">Kesehatan
                                        <br>
                                    </td>
                                    <td>Pendukung A</td>
                                    <td><i class="fas fa-eye table-icon indigo"></i></td>
                                </tr>
                                <tr>
                                    <td>Pendukung B</td>
                                    <td><i class="fas fa-eye table-icon indigo"></i></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">6</td>
                                    <td rowspan="2">Lainnya</td>
                                    <td>Pendukung A</td>
                                    <td><i class="fas fa-eye table-icon indigo"></i></td>
                                </tr>
                                <tr>
                                    <td>Pendukung B</td>
                                    <td><i class="fas fa-eye table-icon indigo"></i></td>
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
            console.log('Component mounted.')
        }
    }
</script>