@extends('layouts.app')
@section('content')

<div class="container">

<h3>Daftar Pelanggan</h3>

<a href="{{ url('pelanggan/create') }}" class="btn btn-primary mb-3 float-end">Add Pelanggan</a>

<table class="table table-bordered">
      <tr>
            <th>ID GOL</th>
            <th>NO PELANGGAN</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>HP</th>
            <th>KTP</th>
            <th>SERI</th>
            <th>METERAN</th>
            <th>AKTIF</th>
            <th>ID USER</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      @foreach ($rows as $row)
            <tr>
                  <td>{{ $row->gol_id }}</td>
                  <td>{{ $row->pel_no }}</td>
                  <td>{{ $row->pel_nama }}</td>
                  <td>{{ $row->pel_alamat }}</td>
                  <td>{{ $row->pel_hp }}</td>
                  <td>{{ $row->pel_ktp }}</td>
                  <td>{{ $row->pel_seri }}</td>
                  <td>{{ $row->pel_meteran }}</td>
                  <td>{{ $row->pel_aktif }}</td>
                  <td>{{ $row->user_id }}</td>
                  <td><a href="{{ url('pelanggan/edit/' . $row->pel_id) }}" class="btn btn-warning">Edit</a></td>
                  <td>
                        <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                  </td>
            </tr>
      @endforeach

</table>

@endsection