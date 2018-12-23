<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\User;
use App\Guru;
use App\Ruang;
use App\Kelas;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurus = Guru::all();

        return view($this->viewLocation('administrator.guru.index'), compact(['gurus','ruang','kelas']));
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
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()){
            return redirect()->back()->with('message', $validator->errors()->__toString())
                    ->with('status','Failed to Save Entry Data !')
                    ->with('type','error');
        }
        try {
            $user = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'role_id' => 2
            ]);

            $create = $user->profile()->create([
                'code' => $request->get('code'),
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'birth_date' => $request->get('birth_date'),
                'gender_id' => $request->get('gender_id'),
                'phone' => $request->get('phone'),
                'address' => $request->get('address'),
                'registered_at' => Carbon::today()->format('d-m-Y'),
            ]);

            $create->ruang()->attach($request->get('kelas_id'));
            $create->kelas()->attach($request->get('ruang_id'));
            
            if ($create) {
                return redirect()->back()->with('message', 'New Guru Created!')
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
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        //
    }
}
