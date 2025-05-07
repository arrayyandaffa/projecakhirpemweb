<!-- resources/views/profil/visi-misi.blade.php -->
@extends('layouts.app')

@section('content')


<div class="section margin-top_50">

    @for ($i = 1; $i <= 6; $i++)
        @php
            $kelas = 'kelas' . $i;
        @endphp
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_right">
                            <h2><span>Data</span> Siswa Kelas {{ $i }}</h2>
                        </div>

                        <div class="full">
                            <p>
                            <table class="table table-bordered table-striped">
                                <thead class="table-dark">
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
                            </p>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>


<!-- resources/views/profil/visi-misi.blade.php 
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

</div>-->


@endsection



