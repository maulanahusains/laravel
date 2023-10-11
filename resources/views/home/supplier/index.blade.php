@extends('layouts.master')
@section('title', 'Data Supplier')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Data Supplier</h3>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row">
    <!-- Column -->
<div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Data Supplier</h4>
                    <a href="/supplier/create" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="table-responsive">
                    <table class="table" id="dataTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Supplier</th>
                                <th>Nama Perusahaan</th>
                                <th>Alamat</th>
                                <th>Nomor Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($supplier as $u)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $u->nama_supplier }}</td>
                                <td>{{ $u->nama_perusahaan }}</td>
                                <td>{{ $u->alamat }}</td>
                                <td>{{ $u->no_telp }}</td>
                                <td>
                                    <a href="/supplier/{{ $u->id }}/edit" class="btn btn-warning">Edit</a>
                                    <a href="/supplier/{{ $u->id }}/destroy" class="btn btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
@endsection