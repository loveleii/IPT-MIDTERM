<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname'=>'Macabugto',
                'fname'=>'Acejoyin',
                'address'=>'Cabulijan, Tubigon, Bohol.',
                'phone'=>'09485845459',
                'email'=>'acejoy_diCapri@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'LamangLupa, Jr',
                'fname'=>'Acejoy',
                'address'=>'Cawayanan, Tubigon, Bohol.',
                'phone'=>'09364344459',
                'email'=>'ace.j@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Hilario',
                'fname'=>'Acejhong',
                'address'=>'Ilijan, Tubigon, Bohol.',
                'phone'=>'0935648394',
                'email'=>'acejoy_hil@gmail.com',
                'password'=>bcrypt('password123')
            ],
        ];

        foreach($data as $user) {
            \App\User::create($user);
        }
    }
}
