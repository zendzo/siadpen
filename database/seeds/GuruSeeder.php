<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\User;
use App\Guru;

class GuruSeeder extends Seeder
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

        for ($i=0; $i < 5; $i++) { 
            $user = User::create([
                'username' => $faker->userName,
                'email' => $faker->safeEmail,
                'password' => bcrypt('adminadmin'),
                'role_id' => 2
            ]);

            $profile = $user->profile()->create([
                'code' => '000'.$i,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastNAme,
                'birth_date' => $today->subYears(rand(10,15))->format('d-m-Y'),
                'registered_at' => $today->format('d-m-Y'),
                'gender_id' => rand(1,2),
                'phone' => '00000000000',
                'address' =>$faker->address
            ]);

            $profile->ruang()->attach([1,2]);
            $profile->kelas()->attach([1,2]);
        }
        $this->command->info('Create Fake Data Guru');
    }
}
