<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [[
            'firstname'=>'Admin',
            'middlename'=>'abella',
            'lastname'=>'carian',
            'contact'=>'09123456789',
            'email'=>'admin@admin',
            'address'=>'Olongapocity',              
            'password'=> bcrypt('123'),
            'is_Admin'=>'1',
            
         ],
         [   
            'firstname'=>'algen',
            'middlename'=>'abella',
            'lastname'=>'carian',
            'contact'=>'09954582066',
            'email'=>'algen@algen',  
            'address'=>'Olongapocity',                   
            'password'=> bcrypt('123'),
            'is_Admin'=>'0',
           
         ],
        ];
    foreach ($user as $key => $value) {
        User::create($value);
    }
    }
}
