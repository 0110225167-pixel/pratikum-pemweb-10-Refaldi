@extends('layouts.index')
@section('content')
<div class="table-responsive">
<table class="table table-bordered table-striped">
  <thead class="table-primary text-center">
    <tr>
      <th>NO</th>
      <th>NIP</th>
      <th>NAMA</th>
      <th>GENDER</th>
      <th>EMAIL</th>
      <th>FOTO</th>
      <th>ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($ar_staff as $index => $row)
    <tr>
      <td>{{ $index + 1 }}</td>
      <td>{{ $row->nip }}</td>
      <td>{{ $row->nama }}</td>
      <td>{{ $row->gender }}</td>
      <td>{{ $row->email }}</td>
      <td>
        @if($row->foto)
          <img src="{{ asset('storage/'.$row->foto) }}" width="50" height="50" style="object-fit:cover; border-radius:50%">
        @else
          <img src="{{ asset('images/a.webp') }}" width="50" height="50" style="object-fit:cover; border-radius:50%">
        @endif
      </td>
      <td>
        <a href="#" class="btn btn-info btn-sm">Detail</a>
        <a href="#" class="btn btn-warning btn-sm">Edit</a>
        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection