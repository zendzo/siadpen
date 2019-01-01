<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PembayaranController extends Controller
{
    public function store(Request $request)
    {
        try {

            $data = auth()->user()->profile->payments()->create([
                'pay_date' => $request->pay_date,
                'total' => $request->total,
            ]);

            if ($request->hasFile('file')) {
                $data->addMediaFromRequest('file')->toMediaCollection('payment');
            }
            
            if ($data) {
                return redirect()->route('siswa.show', auth()->user()->profile->nis)->with('message', 'Pembayaran Terimpan!')
                    ->with('status','Successfully Save Entry Data !')
                    ->with('type','success');
            }
        }catch (\Exception $e){
            return redirect()->back()->withInput()->with('message', $e->getMessage())
                    ->with('status','Failed to Save Entry Data !')
                    ->with('type','error');
        }
    }
}
