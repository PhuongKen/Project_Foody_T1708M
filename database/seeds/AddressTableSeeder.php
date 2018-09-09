<?php

use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('addresses')->truncate();
        \Illuminate\Support\Facades\DB::table('addresses')->insert([
            [
                'provindID' => 1,
                'districtID' => 1,
                'wardID' => 19
            ],
            [
                'provindID' => 1,
                'districtID' => 1,
                'wardID' => 7
            ],
            [
                'provindID' => 1,
                'districtID' => 2,
                'wardID' => 58
            ],
            [
                'provindID' => 1,
                'districtID' => 4,
                'wardID' => 136
            ],
            [
                'provindID' => 1,
                'districtID' => 1,
                'wardID' => 7
            ],
            [
                'provindID' => 1,
                'districtID' => 3,
                'wardID' => 100
            ],
            [
                'provindID' => 1,
                'districtID' => 3,
                'wardID' => 100
            ],
            [
                'provindID' => 1,
                'districtID' => 2,
                'wardID' => 79
            ],
            [
                'provindID' => 1,
                'districtID' => 2,
                'wardID' => 82
            ],
            [
                'provindID' => 1,
                'districtID' => 3,
                'wardID' => 100
            ],
            [
                'provindID' => 1,
                'districtID' => 3,
                'wardID' => 100
            ],
            [
                'provindID' => 1,
                'districtID' => 2,
                'wardID' => 88
            ],
            [
                'provindID' => 1,
                'districtID' => 7,
                'wardID' => 247
            ],
            [
                'provindID' => 1,
                'districtID' => 2,
                'wardID' => 73
            ],
            [
                'provindID' => 1,
                'districtID' => 2,
                'wardID' => 88
            ],


            [
                'provindID' => 1,
                'districtID' => 5,
                'wardID' => 160
            ],
            [
                'provindID' => 1,
                'districtID' => 2,
                'wardID' => 79
            ],
            [
                'provindID' => 1,
                'districtID' => 6,
                'wardID' => 199
            ],
            [
                'provindID' => 1,
                'districtID' => 1,
                'wardID' => 25
            ],
            [
                'provindID' => 1,
                'districtID' => 6,
                'wardID' => 199
            ],
            [
                'provindID' => 1,
                'districtID' => 2,
                'wardID' => 82
            ],
            [
                'provindID' => 1,
                'districtID' => 5,
                'wardID' => 175
            ],
            [
                'provindID' => 1,
                'districtID' => 19,
                'wardID' => 631
            ],
            [
                'provindID' => 1,
                'districtID' => 2,
                'wardID' => 85
            ],
            [
                'provindID' => 1,
                'districtID' => 6,
                'wardID' => 226
            ],
            [
                'provindID' => 1,
                'districtID' => 2,
                'wardID' => 82
            ],
            [
                'provindID' => 1,
                'districtID' => 5,
                'wardID' => 175
            ],
            [
                'provindID' => 1,
                'districtID' => 7,
                'wardID' => 256
            ],
            [
                'provindID' => 1,
                'districtID' => 7,
                'wardID' => 295
            ],
            [
                'provindID' => 1,
                'districtID' => 7,
                'wardID' => 295
            ],


            [
                'provindID' => 1,
                'districtID' => 5,
                'wardID' => 166
            ],
            [
                'provindID' => 1,
                'districtID' => 4,
                'wardID' => 145
            ],
            [
                'provindID' => 1,
                'districtID' => 2,
                'wardID' => 70
            ],
            [
                'provindID' => 1,
                'districtID' => 7,
                'wardID' => 262
            ],
            [
                'provindID' => 1,
                'districtID' => 6,
                'wardID' => 190
            ],
            [
                'provindID' => 1,
                'districtID' => 6,
                'wardID' => 229
            ],
            [
                'provindID' => 1,
                'districtID' => 2,
                'wardID' => 73
            ],
            [
                'provindID' => 1,
                'districtID' => 5,
                'wardID' => 160
            ],
            [
                'provindID' => 1,
                'districtID' => 1,
                'wardID' => 19
            ],
            [
                'provindID' => 1,
                'districtID' => 1,
                'wardID' => 31
            ],
            [
                'provindID' => 1,
                'districtID' => 3,
                'wardID' => 109
            ],
            [
                'provindID' => 1,
                'districtID' => 6,
                'wardID' => 190
            ],
            [
                'provindID' => 1,
                'districtID' => 6,
                'wardID' => 235
            ],
            [
                'provindID' => 1,
                'districtID' => 9,
                'wardID' => 364
            ],
            [
                'provindID' => 1,
                'districtID' => 6,
                'wardID' => 217
            ],



            [
                'provindID' => 1,
                'districtID' => 2,
                'wardID' => 88
            ],
            [
                'provindID' => 1,
                'districtID' => 6,
                'wardID' => 199
            ],
            [
                'provindID' => 1,
                'districtID' => 2,
                'wardID' => 82
            ],
            [
                'provindID' => 1,
                'districtID' => 6,
                'wardID' => 208
            ],
            [
                'provindID' => 1,
                'districtID' => 6,
                'wardID' => 208
            ],
            [
                'provindID' => 1,
                'districtID' => 1,
                'wardID' => 4
            ],
            [
                'provindID' => 1,
                'districtID' => 1,
                'wardID' => 28
            ],
            [
                'provindID' => 1,
                'districtID' => 1,
                'wardID' => 13
            ],
            [
                'provindID' => 1,
                'districtID' => 2,
                'wardID' => 82
            ],
            [
                'provindID' => 1,
                'districtID' => 6,
                'wardID' => 205
            ],
            [
                'provindID' => 1,
                'districtID' => 7,
                'wardID' => 241
            ],
            [
                'provindID' => 1,
                'districtID' => 6,
                'wardID' => 202
            ],
            [
                'provindID' => 1,
                'districtID' => 2,
                'wardID' => 82
            ],
            [
                'provindID' => 1,
                'districtID' => 6,
                'wardID' => 226
            ],
            [
                'provindID' => 1,
                'districtID' => 2,
                'wardID' => 70
            ],


            [
                'provindID' => 1,
                'districtID' => 3,
                'wardID' => 103
            ],
            [
                'provindID' => 1,
                'districtID' => 1,
                'wardID' => 4
            ],
            [
                'provindID' => 1,
                'districtID' => 9,
                'wardID' => 379
            ],
            [
                'provindID' => 1,
                'districtID' => 6,
                'wardID' => 211
            ],
            [
                'provindID' => 1,
                'districtID' => 9,
                'wardID' => 358
            ],
            [
                'provindID' => 1,
                'districtID' => 18,
                'wardID' => 565
            ],
            [
                'provindID' => 1,
                'districtID' => 6,
                'wardID' => 220
            ],
            [
                'provindID' => 1,
                'districtID' => 5,
                'wardID' => 175
            ],
            [
                'provindID' => 1,
                'districtID' => 6,
                'wardID' => 199
            ],
            [
                'provindID' => 1,
                'districtID' => 2,
                'wardID' => 82
            ],
            [
                'provindID' => 1,
                'districtID' => 6,
                'wardID' => 208
            ],
            [
                'provindID' => 1,
                'districtID' => 6,
                'wardID' => 208
            ],
            [
                'provindID' => 1,
                'districtID' => 1,
                'wardID' => 4
            ],
            [
                'provindID' => 1,
                'districtID' => 1,
                'wardID' => 28
            ],
            [
                'provindID' => 1,
                'districtID' => 1,
                'wardID' => 13
            ]

        ]);
    }
}
