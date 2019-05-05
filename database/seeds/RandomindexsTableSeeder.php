<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RandomindexsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('randomindexs')->insert([
            [
                'amount'=>1,
                'value'=> 0
            ],
            [
                'amount'=>2,
                'value'=> 0
            ],
            [
                'amount'=>3,
                'value'=> 0.58
            ],
            [
                'amount'=>4,
                'value'=> 0.9
            ],
            [
                'amount'=>5,
                'value'=> 1.12
            ],
            [
                'amount'=>6,
                'value'=> 1.24
            ],
            [
                'amount'=>7,
                'value'=> 1.32
            ],
            [
                'amount'=>8,
                'value'=> 1.41
            ],
            [
                'amount'=>9,
                'value'=> 1.45
            ],
            [
                'amount'=>10,
                'value'=> 1.49
            ],
            [
                'amount'=>11,
                'value'=> 1.51
            ],
            [
                'amount'=>12,
                'value'=> 1.148
            ],
            [
                'amount'=>13,
                'value'=> 1.56
            ],
            [
                'amount'=>14,
                'value'=> 1.57
            ],
            [
                'amount'=>15,
                'value'=> 1.59
            ],
        ]);
    }
}
