@extends('layouts.master')
@section('title', 'Tambah Member')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Tambah Data Member</h4>
                <form action="/member/{{$member->id}}/update" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{ $member->nama }}" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" value="{{ $member->username }}" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ $member->alamat }}" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Telepon</label>
                        <input type="text" class="form-control" name="no_telp" value="{{ $member->no_telp }}" placeholder="Nomor Telepon">
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="/member" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection