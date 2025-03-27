<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // cách 1 : tạo lần lượt các bản ghi đưa vào 
        // DB::table('categories')->insert([
        //     'name'=>fake()->name(),// dungf fake để tạo dữ liệu ngẫu nhiên 
        //     //'name=>'bacvd,//  chỉ định dữ liệu theo mong muốnmuốn
        //     'status'=>fake()->numberBetween(0,1)
        // ]);

        // cách 2 : tạo nhiều bản ghi dùng lúc
        // tạo mảng rỗng để chứa các bản ghi fake
        $cateSeed=[];
        for($i=0;$i<10;$i++){
            $cateSeed[]=[
                'name'=>fake()->name(),
                'status'=>fake()->numberBetween(0,1),
            ];
        }
        DB::table('categories')->insert($cateSeed);
    }
}
