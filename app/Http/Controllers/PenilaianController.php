<?php

namespace App\Http\Controllers;

use App\Penilaian;
use Illuminate\Http\Request;
use App\Siswa;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penilaians = Penilaian::all();

        return view($this->viewLocation('administrator.penilaian.index'), compact(['penilaians']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();

        return view($this->viewLocation('administrator.penilaian.create'), compact(['siswa']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = Siswa::findOrfail($request->siswa_id);
        try {

            $data = $siswa->penilaian()->create([
                'siswa_id' => $request->siswa_id,
                'absensi' => $request->absensi,
                'quiz' => $request->quiz,
                'uts' => $request->uts,
                'uas' => $request->uas,
                'penilaian_date' => $request->penilaian_date
            ]);

            if ($request->hasFile('file')) {
                $data->addMediaFromRequest('file')->toMediaCollection('penilaian');
            }
            
            if ($data) {
                return redirect()->back()->with('message', 'Penilaian Terimpan!')
                    ->with('status','Successfully Save Entry Data !')
                    ->with('type','success');
            }
        }catch (\Exception $e){
            return redirect()->back()->withInput()->with('message', $e->getMessage())
                    ->with('status','Failed to Save Entry Data !')
                    ->with('type','error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function show(Penilaian $penilaian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function edit(Penilaian $penilaian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penilaian $penilaian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penilaian $penilaian)
    {
        //
    }
}
