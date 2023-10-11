@extends('layouts.master')
@section('title', 'Tambah Penjualan')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Tambah Data Penjualan</h4>
                <form action="/penjualan/store" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Member</label>
                        <select name="id_member" id="" class="form-control">
                            @foreach($member as $s)
                            <option value="{{$s->id}}">{{$s->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Sepatu</label>
                        <select name="id_sepatu" id="" class="form-control">
                            @foreach($sepatu as $s)
                            <option value="{{$s->id}}">{{$s->nama_sepatu}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Bayar</label>
                        <input type="date" class="form-control" name="tgl_bayar" placeholder="Tanggal Bayar">
                    </div>
                    <div class="form-group">
                        <label for="">Bulan Bayar</label>
                        <input type="text" class="form-control" name="bulan_bayar" placeholder="Bulan Bayar">
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Bayar</label>
                        <input type="number" class="form-control" name="jumlah_bayar" placeholder="Jumlah Bayar">
                    </div>
                    
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection