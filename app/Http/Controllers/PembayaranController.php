<?php

namespace App\Http\Controllers;

use App\Pembayaran;
use Illuminate\Http\Request;
use App\Siswa;
use App\Notifications\SendPeymentConfirmation;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Pembayaran::orderBy('id', 'pay_date')->get();

        return view($this->viewLocation('administrator.pembayaran.index'), compact(['payments']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();

        return view($this->viewLocation('administrator.pembayaran.create'),compact(['siswa']));
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

            $data = $siswa->payments()->create([
                'pay_date' => $request->pay_date,
                'total' => $request->total,
            ]);

            if ($request->hasFile('file')) {
                $data->addMediaFromRequest('file')->toMediaCollection('payment');
            }
            
            if ($data) {
                return redirect()->back()->with('message', 'Pembayaran Terimpan!')
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
     * @param  \App\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        $object = $pembayaran;
        try{
            $pembayaran->confirmed = true;
            $pembayaran->save();
            
            $object->siswa->user->notify(new SendPeymentConfirmation($object));

            return redirect()->back()
                    ->with('message', 'Data Telah Tersimpan!')
                    ->with('status','Pembayaran Telah Dikonfirmasi')
                    ->with('type','success');
        }catch(\Exception $e){
            return redirect()->back()
                    ->with('message', $e->getMessage())
                    ->with('status','error')
                    ->with('type','error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembayaran $pembayaran)
    {
        //
    }
}
