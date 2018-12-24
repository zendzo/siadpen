<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SearchSiswaController extends Controller
{
    public function create()
    {
        return view($this->viewLocation('search_form'));
    }

    public function search(Request $request)
    {
        $siswas = Siswa::where('nis','like','%'.$request->name.'%')->paginate(25);
        
        return view($this->viewLocation('search_result'), compact(['siswas']));
    }

    public function show($nis)
    {
        $siswa = Siswa::whereNis($nis)->first();

        return view($this->viewLocation('siswa_profile'), compact(['siswa']));
    }
}
