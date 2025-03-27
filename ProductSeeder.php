<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ProSeed = [];
// tạo ra bản ghi
// tạo ra 1 bảng chưa tất cả id của bảng categoryies
$categoryID = DB::table('categories')->pluck('id')->toArray();
        for ($i = 0; $i < 10; $i++) {
            $ProSeed[] = [
                'name'        => fake()->name(),  // Tên sản phẩm (chuỗi)
                'price'       => fake()->randomFloat(2, 10, 1000), // Giá tiền (số thực, 2 chữ số thập phân)
                'quantity'    => fake()->randomNumber(), // Số lượng (số nguyên)
                'category_id' => fake()->randomElement($categoryID), // ID danh mục (số nguyên)
                'description' => fake()->sentence(), // Mô tả sản phẩm (chuỗi)
                'status'      => fake()->numberBetween(0,1), // Trạng thái 
            ];
        }

        // Chèn dữ liệu vào bảng 'products'
        DB::table('products')->insert($ProSeed);
    }
}


