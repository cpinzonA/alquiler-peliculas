<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use function App\Models\User;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
    
     * @return void
     */
    public function run()
    {
        user::create([
            'name'=>'christ joo',
            'lastname'=>'pin pin',
            'phone_number'=>'3440203',
            'address'=>'calle 9 # 64-44',
            'email' => 'cp2333@gmail.com',  
            'password'=>Hash::make('12345'),
        ]);
        user::create([
            'name'=>'papap',
            'lastname'=>'giggihi',
            'phone_number'=>'3059203',
            'address'=>'calle 13 # 22-55',
            'email' => 'gionu@gmail.com', 
            'password'=>Hash::make('12345'),
        ]);
        user::create([
            'name'=>'mario a',
            'lastname'=>'mota',
            'phone_number'=>'3440993',
            'address'=>'calle 70 # 94-44',
            'email' => 'mota@gmail.com',
            'password'=>Hash::make('12345'),
        ]);
        user::create([
            'name'=>'drew',
            'lastname'=>'soler',
            'phone_number'=>'6244203',
            'address'=>'carrera 22 # 99-10',
            'email' => 'drewsol@gmail.com',
            'password'=>Hash::make('12345'),
        ]);
        user::factory(10)->create();
        //construyo los generados
    }
}
