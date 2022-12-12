<?php

use Illuminate\Database\Seeder;
use DLG\User;
use DLG\Activity;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{

    public function run()
    {

        $users = [

            // SysAdmin
            [
                "fname" => "Juan",
                "lname" => "Delacruz",
                "email" => "admin@admin.com",
                "password" => bcrypt("iloveyou"),
                "mobile" => "09123456789",
                "address" => "Brgy.Enclaro, Binalbagan,Negros Occidental",
                "access" => "SysAdmin",
                "token" => str_random(10),
                "remember_token" => str_random(10),
                "last_login" => New Datetime()
            ],

            [
                "fname" => "Jude",
                "lname" => "Suares",
                "email" => "jude@gmail.com",
                "password" => bcrypt("iloveyoujude"), 
                "mobile" => "09171120667",  
                "address" => "Brgy. Suay, Himamaylan City", 
                "access" => "SysAdmin", 
                "token" => str_random(10), 
                "remember_token" => str_random(10),
                "last_login" => New Datetime()
            ],

            // Manager
            [
                "fname" => "Glenn",
                "lname" => "Azuelo",
                "email" => "glenn@gmail.com",
                "password" => bcrypt("iloveyouglenn"),
                "mobile" => "09267572433",
                "address" => "Brgy.1, Cauayan, Negros Occidental",
                "access" => "Manager",
                "token" => str_random(10),
                "remember_token" => str_random(10),
                "last_login" => New Datetime()
            ],

            // Farm Hand
            [
                "fname" => "Princely",
                "lname" => "Cezar",
                "email" => "princely@gmail.com",
                "password" => bcrypt("johndoe"),
                "mobile" => "09123456789",
                "address" => "Brgy. Sto Rosario, Binalbagan",
                "access" => "Farm Hand",
                "token" => str_random(10),
                "remember_token" => str_random(10),
                "last_login" => New Datetime()
            ],

            // Veterinarian
            [
                "fname" => "Grace",
                "lname" => "Patulada",
                "email" => "grace@veterinarian.com",
                "password" => bcrypt("jane"),
                "mobile" => "09123456789",
                "address" => "Brgy. Nabalian, Himamaylan City",
                "access" => "Veterinarian",
                "token" => str_random(10),
                "remember_token" => str_random(10),
                "last_login" => New Datetime()
            ]
        ];

        foreach ($users as $user)
        {
            User::create($user);
        }

    }
}
