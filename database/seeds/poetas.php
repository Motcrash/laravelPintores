<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class insertar_poetas extends Seeder
{
   
    public function run()
    {
        DB::table('poet')->insert([
            'firs_name' => 'Paula',
            'surname' => 'Ponce',
            'address' => 'marmolII',
            'post_code' => '31063',
            'telephone_number' => '6142536710'
        ]);
        DB::table('poet')->insert([
            'firs_name' => 'Mayela',
            'surname' => 'Ponce',
            'address' => 'marmolII',
            'post_code' => '31063',
            'telephone_number' => '6142814170'
        ]);
        DB::table('poet')->insert([
            'firs_name' => 'Antonio',
            'surname' => 'Ponce',
            'address' => 'marmolII',
            'post_code' => '31063',
            'telephone_number' => '6145108241'
        ]);
        DB::table('poet')->insert([
            'firs_name' => 'Diego',
            'surname' => 'Ponce',
            'address' => 'marmolII',
            'post_code' => '31063',
            'telephone_number' => '6143456728'
        ]);
        
    }
}