<?php

namespace Database\Seeders;
use App\Models\Department;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'name' => 'Engineering',
                'remark' => 'enginering sample remark',
            ],
            [
                'name' => 'Logistics',
                'remark' => 'logistics sample remark',
            ],
            [
                'name' => 'Planning',
                'remark' => 'planning sample remark',
            ]
        ];

        foreach($departments as $key => $value){
            Department::create($value);
        }
    }
}
