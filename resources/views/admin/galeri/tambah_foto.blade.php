@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $menu }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{ $menu }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">
                                <h5> Tambah Foto Galeri</h5>
                            </div>
                        </div>
                        <form>
                            <div class="card-body">
                                <p>Judul Album Galeri :<b> Bupati Zahir Kembali Tinjau Pembangunan Taman Sei Bejangkar
                                        Sekaligus Bergotong Royong</b></p>
                                <div class="form-group">
                                    <label for="">Cover Album :</label><br>
                                    <img src="{{ url('front/img/baner2.png') }}" style="width: 70%;">
                                </div>
                                <div class="form-group">
                                    <label>Tambah Foto :</label>
                                    <input type="file" class="form-control" type="text" name="" accept="">
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-danger btn-sm">Kembali</a>
                                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-left">
                                <h5> Daftar Foto</h5>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 2%">No</th>
                                        <th>Foto</th>
                                        <th class="text-center"style="width: 10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td><img src="" style="width:100px"></td>
                                        <td class="text-center">
                                            <a href="galeri/tambah_foto" class="btn btn-xs btn-success"><i
                                                    class="fas fa-image" title="Foto"></i></a>
                                            <button type="submit" class="btn btn-xs btn-danger"><i class="fas fa-trash"
                                                    title="Hapus"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
