@extends('layouts.master')
@section('title', 'Data Sepatu')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Data Sepatu</h3>
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
                    <h4 class="card-title">Data Sepatu</h4>
                    <a href="/sepatu/create" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="table-responsive">
                    <table class="table" id="dataTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Sepatu</th>
                                <th>Merk</th>
                                <th>Warna</th>
                                <th>Supplier</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sepatu as $u)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $u->nama_sepatu }}</td>
                                <td>{{ $u->merk }}</td>
                                <td>{{ $u->warna }}</td>
                                <td>{{ $u->Supplier->nama_supplier }}</td>
                                <td>{{ $u->stok }}</td>
                                <td>
                                    <a href="/sepatu/{{ $u->id }}/edit" class="btn btn-warning">Edit</a>
                                    <a href="/sepatu/{{ $u->id }}/destroy" class="btn btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</a>
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