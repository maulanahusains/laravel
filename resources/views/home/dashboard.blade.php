@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
<!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
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
                                <h4 class="card-title">Histori Penjualan</h4>
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($penjualan as $p)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $p->Kasir->name }}</td>
                                                <td>{{ $p->Member->nama }}</td>
                                                <td>{{ $p->Sepatu->nama_sepatu }}</td>
                                                <td>{{ $p->tgl_bayar }}</td>
                                                <td>{{ $p->bulan_bayar }}</td>
                                                <td>{{ $p->jumlah_bayar }}</td>
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