<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
                'user_id' => 1,
                'acct_name' => 'Lovely Jane P. Regular Account',
                'init_invest' => 80500,
                'start_date' => '2017-08-10',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'Acejoy Isdaan Trust Fund',
                'init_invest' => 350000,
                'start_date' => '2010-11-22',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Acejoy Ackerman Dump Account',
                'init_invest' => 150000,
                'start_date' => '2019-06-07',
                'remarks' => 'Done with normal transaction'
            ],
        ];

        foreach($data as $acc) {
            \App\Account::create($acc);
        }
    }
}
