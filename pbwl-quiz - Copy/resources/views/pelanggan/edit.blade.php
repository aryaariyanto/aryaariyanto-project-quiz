@extends('layouts.app')

@section('content')
    <h2>Edit Pelanggan</h2>
    <div class="container">

    <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="post">
        @method('PATCH')
        @csrf
        <div>
        <div class="mb-3">
            <label for="">ID GOL</label>
            <input type="text" name="gol_id" id="" class="form-control" value="{{ $row->gol_id }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">NO PELANGGAN</label>
            <input type="text" name="pel_no" id="" class="form-control" value="{{ $row->pel_no }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="pel_nama" id="" class="form-control" value="{{ $row->pel_nama }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <input type="text" name="pel_alamat" id="" class="form-control" value="{{ $row->pel_alamat }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">HP</label>
            <input type="text" name="pel_hp" id="" class="form-control" value="{{ $row->pel_hp }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">KTP</label>
            <input type="text" name="pel_ktp" id="" class="form-control" value="{{ $row->pel_ktp }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">SERI</label>
            <input type="text" name="pel_seri" id="" class="form-control" value="{{ $row->pel_seri }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">METERAN</label>
            <input type="text" name="pel_meteran" id="" class="form-control" value="{{ $row->pel_meteran }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">AKTIF</label>
            <input type="text" name="pel_aktif" id="" class="form-control" value="{{ $row->pel_aktif }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">ID USER</label>
            <input type="text" name="user_id" id="" class="form-control" value="{{ $row->user_id }}"></>
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
