@extends('layouts.master')
@section('title', 'Tambah Sepatu')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Tambah Data Sepatu</h4>
                <form action="/sepatu/{{ $sepatu->id }}/update" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nama Sepatu</label>
                        <input type="text" class="form-control" name="nama_sepatu" value="{{ $sepatu->nama_sepatu }} placeholder="Nama Sepatu">
                    </div>
                    <div class="form-group">
                        <label for="">Merk</label>
                        <input type="text" class="form-control" name="merk" value="{{ $sepatu->merk }} placeholder="Merk">
                    </div>
                    <div class="form-group">
                        <label for="">Warna</label>
                        <input type="text" class="form-control" name="warna" value="{{ $sepatu->warna }} placeholder="Warna">
                    </div>
                    <div class="form-group">
                        <label for="">Stok</label>
                        <input type="text" class="form-control" name="stok" value="{{ $sepatu->stok }} placeholder="Stok">
                    </div>
                    <div class="form-group">
                        <label for="">Supplier</label>
                        <select name="id_supplier" id="" class="form-control">
                            @foreach($supplier as $s)
                            <option value="{{$s->id}}">{{$s->nama_supplier}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="/sepatu" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection