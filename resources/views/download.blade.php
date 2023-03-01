@extends('layouts.app')

@section('content')
    <section id="download" class="download section-bg">
        <div class="container">
            <div class="row-download">
                <div class="col-10">
                    <div class="card">
                        <div class="card-body">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 3%">No</th>
                                        <th>Nama File</th>
                                        <th>Upload</th>
                                        <th>File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($download as $d)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $d->nama_file }} </td>
                                            <td>{{ $d->tanggalfile }} </td>
                                            <td class="text-center"><a href="" class="btn btn-primary btn-sm">
                                                    <i class="bi bi-cloud-arrow-down-fill"></i> Download</a>
                                            </td>
                                        </tr>
                                    @endforeach
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
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
