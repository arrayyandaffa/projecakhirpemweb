@extends('layouts.app')

@section('content')
<div class="container mt-5">
<br><br>
    <h2 class="mb-4">Data Alumni</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NISN</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Tahun Lulus</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nisn }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->tanggal_lahir }}</td>
                    <td>{{ $item->tahun_lulus }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<br>
@endsection

