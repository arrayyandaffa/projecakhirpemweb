<?php

namespace App\Http\Controllers;

use App\Models\Tendik;
use App\Models\Alumni;
use App\Models\SiswaKelas1;
use App\Models\SiswaKelas2;
use App\Models\SiswaKelas3;
use App\Models\SiswaKelas4;
use App\Models\SiswaKelas5;
use App\Models\SiswaKelas6;

class DirektoriController extends Controller
{
    public function tenagapendidik()
    {
        $data = Tendik::all();
        return view('direktori.tenagapendidik', compact('data'));
    }

    public function siswa()
    {
        $kelas1 = SiswaKelas1::all();
        $kelas2 = SiswaKelas2::all();
        $kelas3 = SiswaKelas3::all();
        $kelas4 = SiswaKelas4::all();
        $kelas5 = SiswaKelas5::all();
        $kelas6 = SiswaKelas6::all();

        return view('direktori.siswa', compact('kelas1', 'kelas2', 'kelas3', 'kelas4', 'kelas5', 'kelas6'));
    }

    public function alumni()
    {
        $data = Alumni::all();
        return view('direktori.alumni', compact('data'));
    }
}
