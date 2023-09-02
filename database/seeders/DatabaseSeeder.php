<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
       /*  \App\Models\Category::factory()
            ->count(10)
            ->state(new Sequence(
                ['parent_id' => '1'],
                ['parent_id' => '2'],
            ))
            ->create() */;
        DB::table('ropapather_category')->insert([
            [
                'name' => 'Ropa de Hombre',
            ],
            [
                'name' => 'Ropa de Mujer',
            ]]);
        // Crear un nuevo producto


        DB::table('categories')->insert([
            [
                'name' => 'Camisas',
                'parent_id' => '1'
            ],
            [
                'name' => 'Calzado',
                'parent_id' => '1'
            ],
            [
                'name' => 'Camisas|tops',
                'parent_id' => '2'
            ],
            [
                'name' => 'Calzado',
                'parent_id' => '2'
            ],
            [
                'name' => 'Carteras',
                'parent_id' => '2'
            ]]);

        DB::table('products')->insert([

            [
                'name'=>'camizeta manga sisa',
                'price'=>fake()->randomFloat(2),
                'waist'=>'L,S',
                'color'=>fake()->colorName(),
                'category_id'=>Category::where('name','Camisas|tops')->where('parent_id',2)->value('id')
            ],
            [
                'name'=>'sandalia verano',
                'price'=>fake()->randomFloat(2),
                'waist'=>'36,37',
                'color'=>fake()->colorName(),
                'category_id'=>Category::where('name','Calzado')->where('parent_id',2)->value('id')
            ],
            [
                'name'=>'cartera baigh',
                'price'=>fake()->randomFloat(2),
                'waist'=>'L',
                'color'=>fake()->colorName(),
                'category_id'=>Category::where('name','Carteras')->where('parent_id',2)->value('id')
            ],
            [
                'name'=>'cartera flores',
                'price'=>fake()->randomFloat(2),
                'waist'=>'L',
                'color'=>fake()->colorName(),
                'category_id'=>Category::where('name','Carteras')->where('parent_id',2)->value('id')
            ],
            [
                'name'=>'camiza hombre',
                'price'=>fake()->randomFloat(2),
                'waist'=>'L',
                'color'=>fake()->colorName(),
                'category_id'=>Category::where('name','Camisas')->where('parent_id',1)->value('id')
            ],
            [
                'name'=>'zapatillas hombre',
                'price'=>fake()->randomFloat(2),
                'waist'=>'L',
                'color'=>fake()->colorName(),
                'category_id'=>Category::where('name','Calzado')->where('parent_id',1)->value('id')
            ],
        ]);
        DB::table('product_images')->insert([
            [
                'product_id' => '1',
                'url_1'=>asset('assets/imgs/shop/product-1-1.jpg'),
            ]
        ]);
        DB::table('product_images')->insert([
            [
                'product_id' => '2',
                'url_1'=>asset('assets/imgs/shop/product-7-1.jpg'),
                'url_2'=>asset('assets/imgs/shop/product-7-2.jpg')
            ]
        ]);
        DB::table('product_images')->insert([
            [
                'product_id' => '3',
                'url_1'=>asset('assets/imgs/shop/product-14-1.jpg'),
            ]
        ]);
        DB::table('product_images')->insert([
            [
                'product_id' => '4',
                'url_1'=>asset('assets/imgs/shop/product-14-2.jpg'),
            ]
        ]);
        DB::table('product_images')->insert([
            [
                'product_id' => '5',
                'url_1'=>asset('assets/imgs/shop/product-2-1.jpg'),
                'url_2'=>asset('assets/imgs/shop/product-2-2.jpg'),
            ]
        ]);
        DB::table('product_images')->insert([
            [
                'product_id' => '6',
                'url_1'=>asset('assets/imgs/shop/product-9-2.jpg'),
            ]
        ]);


    //    \App\Models\Product::factory(20)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Cart::factory(10)->create();
        \App\Models\CartItems::factory(10)->create();
    }
}
