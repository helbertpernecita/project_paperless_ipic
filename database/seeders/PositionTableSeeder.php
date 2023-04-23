<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = [
            [
                'name' => 'Operator',
                'remark' => 'operator sample remark',
            ],
            [
                'name' => 'Tpm Encoder',
                'remark' => 'tpm position sample remark',
            ],
            [
                'name' => 'Warehouseman',
                'remark' => 'warehouseman sample remark',
            ]
        ];

        foreach($positions as $key => $value){
            Position::create($value);
        }
    }
}
