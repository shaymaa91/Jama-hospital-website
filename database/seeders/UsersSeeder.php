<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=>'admin'

        ]);
        Role::create([
            'name'=>'doctor'

        ]);
        Role::create([
            'name'=>'patient'

        ]);
      /* $user=User::create([
        'email'=>'lama@gmail.com',
           'name'=>'lama Jaber',
           'password'=>bcrypt('123456789')
           
       ]); 
       $user->assignRole('admin');*/
    }
}
