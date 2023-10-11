@extends('layouts.master')
@section('title', 'Tambah Sepatu')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Tambah Data Sepatu</h4>
                <form action="/sepatu/store" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nama Sepatu</label>
                        <input type="text" class="form-control" name="nama_sepatu" placeholder="Nama Sepatu">
                    </div>
                    <div class="form-group">
                        <label for="">Merk</label>
                        <input type="text" class="form-control" name="merk" placeholder="Merk">
                    </div>
                    <div class="form-group">
                        <label for="">Warna</label>
                        <input type="text" class="form-control" name="warna" placeholder="Warna">
                    </div>
                    <div class="form-group">
                        <label for="">Stok</label>
                        <input type="text" class="form-control" name="stok" placeholder="Stok">
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
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection