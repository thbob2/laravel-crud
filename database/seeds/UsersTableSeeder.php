<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','bob@exmple.com')->first();

        if(!$user){
            User::Create([
                'name'=> 'bob Doe',
                'email'=> 'bob@exmple.com',
                'password'=> Hash::make('password'),
            ]);
        }
    }
}
