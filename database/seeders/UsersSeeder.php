<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;
use DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Dummy data for testing purposes
        DB::table('users')->truncate();
        
        $users =
        [
            [   
                'name' => "dummyname",                
                'email' => "dummmy@dummyname.com",
                'password' => "dummmy@dummyname.com"
                  
            ],
            [   
                'name' => "dummyname2",                
                'email' => "dummmy2@dummyname.com",
                'password' => "dummmy2@dummyname.com"
                  
            ],
            [   
                'name' => "dummyname3",                
                'email' => "dummmy3@dummyname.com",
                'password' => "dummmy2@dummyname.com"
                  
            ],
            [   
                'name' => "dummyname4",                
                'email' => "dummmy4@dummyname.com",
                'password' => "dummmy4@dummyname.com"
                  
            ] 
            ];

        foreach($users as $user) {
            $new_user = new User;

            $new_user->name = $user['name'];
            $new_user->email = $user['email'];
            $new_user->password = Hash::make('password');

            $new_user->save();

        }
    }
}
