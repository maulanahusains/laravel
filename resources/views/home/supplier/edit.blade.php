@extends('layouts.master')
@section('title', 'Tambah Supplier')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Tambah Data Supplier</h4>
                <form action="/supplier/{{ $supplier->id }}/update" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nama Supplier</label>
                        <input type="text" class="form-control" name="nama_supplier" value="{{ $supplier->nama_supplier }}" placeholder="Nama Supplier">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Perusahaan</label>
                        <input type="text" class="form-control" name="nama_perusahaan" value="{{ $supplier->nama_perusahaan }}" placeholder="Nama Perusahaan">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ $supplier->alamat }}" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Telepon</label>
                        <input type="text" class="form-control" name="no_telp" value="{{ $supplier->no_telp }}" placeholder="Nomor Telepon">
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="/supplier" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection