<?php

use Illuminate\Database\Seeder;
use App\Ruang;
use App\Kelas;
use App\Tingkat;

class RuangKelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ruangs = ['Ruang A','Ruang B','Ruang C'];

        $kelas = ['Kelas 9','Kelas 10','Kelas 11'];

        $tingkat = ['Tingkat 1','Tingkat 2','Tingkat 3'];

        for ($i=0; $i < 2; $i++) { 
            Ruang::create(['name' => $ruangs[$i]]);
            Kelas::create(['name' => $kelas[$i]]);
            Tingkat::create(['name' => $tingkat[$i]]);
        }

        $this->command->info('Create Ruang Kelas Tingkat!');
    }
}
