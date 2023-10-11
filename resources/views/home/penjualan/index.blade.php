@extends('layouts.master')
@section('title', 'Data Penjualan')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Data Penjualan</h3>
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
                    <h4 class="card-title">Data Penjualan</h4>
                    <a href="/penjualan/create" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="table-responsive">
                    <table class="table" id="dataTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kasir</th>
                                <th>Member</th>
                                <th>Sepatu</th>
                                <th>Tanggal Bayar</th>
                                <th>Bulan Bayar</th>
                                <th>Jumlah Bayar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($penjualan as $u)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $u->Kasir->name }}</td>
                                <td>{{ $u->Member->nama }}</td>
                                <td>{{ $u->Sepatu->nama_sepatu }}</td>
                                <td>{{ $u->tgl_bayar }}</td>
                                <td>{{ $u->bulan_bayar }}</td>
                                <td>{{ $u->jumlah_bayar }}</td>
                                <td>
                                    <a href="/penjualan/{{ $u->id }}/edit" class="btn btn-warning">Edit</a>
                                    <a href="/penjualan/{{ $u->id }}/destroy" class="btn btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</a>
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