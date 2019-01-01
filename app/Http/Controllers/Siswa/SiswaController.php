<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\User;
use App\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        if (!auth()->user()->profile) {
            return redirect()->route('siswa.profile');
        }
        return view($this->viewLocation('siswa.index'));
    }

    public function profile()
    {
        return view($this->viewLocation('siswa.profile'));
    }

    public function profileStore(Request $request)
    {
        try {
            $user = User::findOrFail(auth()->id());

            $create = $user->profile()->create([
                'nis' => $request->get('nis'),
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'birth_date' => $request->get('birth_date'),
                'gender_id' => $request->get('gender_id'),
                'phone' => $request->get('phone'),
                'address' => $request->get('address'),
                'tingkat_id' => $request->get('tingkat_id'),
                'kelas_id' => $request->get('kelas_id'),
                'ruang_id' => $request->get('ruang_id'),
                'registered_at' => Carbon::today()->format('m-d-Y'),
                'biaya' => $request->get('biaya')
            ]);
            
            if ($create) {
                return redirect()->route('siswa.profile.edit', $request->nis)->with('message', 'Berhasil')
                    ->with('status','Data Profile Telah Tersimpan')
                    ->with('type','success');
            }
        }catch (\Exception $e){
            return redirect()->back()->withInput()->with('message', $e->getMessage())
                    ->with('status','Failed to Save Entry Data !')
                    ->with('type','error');
        }
    }

    public function profileEdit($nis)
    {
        $siswa = Siswa::whereNis($nis)->first();

        try {
            $siswa = Siswa::whereNis($nis)->first();
            if (auth()->user()->profile->nis !== $siswa->nis) {
                return redirect()->back()->with('message', 'Aksi Tidak Memiliki Izin')
                ->with('status','Failed!')
                ->with('type','error');
            }
        } catch (\Exception $e) {
            return redirect()->route('siswa.dashboard')->with('message', $e->getMessage())
                    ->with('status','Nis Tidak Ditemukan !')
                    ->with('type','error');
        }

        return view($this->viewLocation('siswa.edit_profile'), compact(['siswa']));
    }

    public function profileUpdate(Request $request,Siswa $siswa)
    {
        try {;
            $siswa->first_name = $request->first_name;
            $siswa->last_name = $request->last_name;
            $siswa->gender_id = $request->gender_id;
            $siswa->address = $request->address;
            $siswa->phone = $request->phone;
            $siswa->tingkat_id = $request->tingkat_id;
            $siswa->ruang_id = $request->ruang_id;
            $siswa->kelas_id = $request->kelas_id;
            $siswa->save();
            
            if ($siswa) {
                return redirect()->route('siswa.profile.edit', auth()->user()->profile->nis)->with('message', 'Berhasil')
                    ->with('status','Data Profile Telah Tersimpan')
                    ->with('type','success');
            }
        }catch (\Exception $e){
            return redirect()->back()->withInput()->with('message', $e->getMessage())
                    ->with('status','Failed to Save Entry Data !')
                    ->with('type','error');
        }
    }
}
