<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Tingkat;
use App\Kelas;
use App\Ruang;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswa::all();

        $tingkat = Tingkat::all();
        $ruang = Ruang::all();
        $kelas = Kelas::all();

        return view($this->viewLocation('administrator.siswa.index'), compact(['siswas','tingkat','ruang','kelas']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'username' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:6|confirmed',
        // ]);

        // if ($validator->fails()){
        //     return redirect()->back()->with('message', $validator->errors()->__toString())
        //             ->with('status','Failed to Save Entry Data !')
        //             ->with('type','error');
        // }
        
        try {
            $create =  Siswa::create([
                'nis' => $request->get('nis'),
                'name' => $request->get('name'),
                'tingkat_id' => $request->get('tingkat_id'),
                'kelas_id' => $request->get('kelas_id'),
                'ruang_id' => $request->get('ruang_id'),
                'registered_at' => $request->get('registered_at'),
                'biaya' => $request->get('biaya'),
            ]);
            
            if ($create) {
                return redirect()->back()->with('message', 'New Siswa Created!')
                    ->with('status','Successfully Save Entry Data !')
                    ->with('type','success');
            }
        }catch (\Exception $e){
            return redirect()->back()->with('message', $e->getMessage())
                    ->with('status','Failed to Save Entry Data !')
                    ->with('type','error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
