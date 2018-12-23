<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Guru;

class LaporanController extends Controller
{
    public function siswa()
    {
        $siswas = Siswa::all();;

        return view($this->viewLocation('administrator.siswa.index'), compact(['siswas']));
    }

    public function guru()
    {
        $gurus = Guru::all();

        return view($this->viewLocation('administrator.guru.index'), compact(['gurus']));
    }
}
