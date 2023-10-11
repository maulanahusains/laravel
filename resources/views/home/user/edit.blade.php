@extends('layouts.master')
@section('title', 'Tambah User')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Tambah Data User</h4>
                <form action="/user/{{ $user->id }}/update" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" value="{{ $user->username }}" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="password" value="{{ $user->password }}" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="">Level</label>
                        <select name="level" id="" class="form-control">
                            <option value="Admin">Admin</option>
                            <option value="Kasir">Kasir</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="/user" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection