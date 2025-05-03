<!--sebelum-->
<!-- resources/views/profil/visi-misi.blade.php -->
<!-- @extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Siswa</h2>

        </p>
    </div>
@endsection -->

<!-- sesudah -->
<!-- resources/views/profil/visi-misi.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-5">

    @for ($i = 1; $i <= 6; $i++)
        @php
            $kelas = 'kelas' . $i;
        @endphp

        <h2 class="mt-4">Siswa Kelas {{ $i }}</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($$kelas as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nisn }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->tanggal_lahir }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada data siswa kelas {{ $i }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    @endfor

</div>
@endsection




