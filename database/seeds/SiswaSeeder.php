<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\User;
use App\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $today = Carbon::today();

        for ($i=0; $i < 10; $i++) { 
            $siswa = User::create([
                'username' => $faker->userName,
                'email' => $faker->safeEmail,
                'password' => bcrypt('adminadmin'),
                'role_id' => 3
            ]);

            $profile = $siswa->profile()->create([
                'nis' => 'NIP 00'.$i.str_random(3),
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'birth_date' => $today->subYears(rand(10,15))->format('d-m-Y'),
                'gender_id' => rand(1,2),
                'phone' => '00000000000',
                'address' => $faker->address,
                'tingkat_id' => rand(1,2),
                'kelas_id' => rand(1,2),
                'ruang_id' => rand(1,2),
                'registered_at' => $today->format('d-m-Y'),
                'biaya' => 250000
            ]);
        }
    }
}
