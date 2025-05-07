@extends('layouts.app')

@section('content')

<div class="section margin-top_50">
        <div class="container">
            <div class="row">
                <div class="col-lg layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_right">
                            <h2><span>Data</span> Alumni</h2>
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
                            </p>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>


@endsection

