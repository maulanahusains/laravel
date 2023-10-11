@extends('layouts.master')
@section('title', 'Tambah Penjualan')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Tambah Data Penjualan</h4>
                <form action="/penjualan/{{$penjualan->id}}/update" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Member</label>
                        <select name="id_member" id="" class="form-control">
                            @foreach($member as $s)
                            <option value="{{$s->id}}">{{$s->name}}</option>
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
                        <input type="date" class="form-control" name="tgl_bayar" value="{{$penjualan->tgl_bayar}}" placeholder="Tanggal Bayar">
                    </div>
                    <div class="form-group">
                        <label for="">Bulan Bayar</label>
                        <input type="text" class="form-control" name="bulan_bayar" value="{{$penjualan->bulan_bayar}}" placeholder="Bulan Bayar">
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Bayar</label>
                        <input type="number" class="form-control" name="jumlah_bayar" value="{{$penjualan->jumlah_bayar}}" placeholder="Jumlah Bayar">
                    </div>
                    
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="/penjualan" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection