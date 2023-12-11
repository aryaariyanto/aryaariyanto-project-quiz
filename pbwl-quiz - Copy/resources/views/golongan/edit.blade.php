@extends('layouts.app')

@section('content')
    <div class="container">
    <h2>Edit Golongan</h2>

    <form action="{{ url('golongan/' . $row->gol_id) }}" method="POST">
        @method('PATCH')
        @csrf
        <div>
        <div class="mb-3">
            <label for="">KODE</label>
            <input type="text" name="gol_kode" id="" class="form-control" value="{{ $row->gol_kode }}"></>
        </div>
        <div>
        <div class="mb-3">
            <label for="">NAMA GOLONGAN</label>
            <input type="text" name="gol_nama" id="" class="form-control" value="{{ $row->gol_nama }}"></>
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
