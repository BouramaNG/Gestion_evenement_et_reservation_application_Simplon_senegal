<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsertableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

        [
            //je cree ladmin
            'name'=>'boura',
            'username'=>'boura',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('1111'),
            'role'=>'admin',
            'status'=>'active',
        ],

          [
            //je cree lassociation
            'name'=>'colobane',
            'username'=>'colobane',
            'email'=>'colobane@gmail.com',
            'password'=>Hash::make('1111'),
            'role'=>'association',
            'status'=>'active',
        ],
         [
            //je cree user
            'name'=>'bourama',
            'username'=>'boura',
            'email'=>'bourama@gmail.com',
            'password'=>Hash::make('1111'),
            'role'=>'user',
            'status'=>'active',
        ],

        ]);
    }
}
