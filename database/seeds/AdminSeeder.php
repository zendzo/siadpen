<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;

        $administrator = User::create([
        	'username' => 'Administrator',
            'email' => 'admin@admin.com',
	        'password' => '$2y$10$u0S9BfFehQva6/5SvoeJcuZMhPXI30LAJmzF/YuxCbPc6dL1N715O', //adminadmin
	        'role_id' => 1,
        ]);

        $administrator->profile()->create([
            'first_name' => 'Administrator',
	        'last_name' => 'System',
            'gender_id' => 1,
            'birth_date' => '12/09/1992',
	        'phone' => env('CUSTOMER_TEST_PHONENUMBER'),
        ]);

        $this->command->info('Administrator User Created !');
    }
}
