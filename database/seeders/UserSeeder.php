<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents; 


class UserSeeder extends Seeder
{

 /** 
 * Run the database seeds. 
 * 
 * @return void 
 */
public function run() 
{ 
DB::table('users')->insert([ 
'name' => 'Rispansyah', 
'email' => 'c030321108@mahasiswa.poliban.ac.id', 
'password' => Hash::make('c030321108'), 
]);
}
}
