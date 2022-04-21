<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use mysql_xdevapi\CrudOperationLimitable;
use mysql_xdevapi\Table;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

       DB::table('users')->insert([
           //Admin
           [
               'full_name'=>'Admin',
               'username'=>'Admin',
               'email'=>'admin@gmail.com',
               'password'=>Hash::make('1111'),
               'role'=>'admin',
               'status'=>'active',




           ],
           //Vendor(Satıcı)
           [
               'full_name'=>'Vendor',
               'username'=>'Vendor',
               'email'=>'vendor@gmail.com',
               'password'=>Hash::make('1111'),
               'role'=>'vendor',
               'status'=>'active',



           ],
           //Customer(Musteri)
           [
               'full_name'=>'Customer',
               'username'=>'Customer',
               'email'=>'customer@gmail.com',
               'password'=>Hash::make('111'),
               'role'=>'customer',
               'status'=>'active',



           ]
    ]);


    }
}
