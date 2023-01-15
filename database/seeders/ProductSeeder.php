<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [[
            'name' => 'Samsung Galaxy A52s',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies volutpat velit in mattis. Sed iaculis, metus vitae tristique mattis, lacus tortor tincidunt magna, vitae volutpat nisl mauris non risus. Maecenas auctor tristique sapien, sit amet suscipit neque iaculis pulvinar. Fusce scelerisque massa quam, ac semper augue varius molestie. Pellentesque.',
            'price' => '5990000',
            'year' => '2021',
            'image' => 'dummy1.jpg'
        ],[
                'name' => 'Samsung Galaxy S22 Ultra',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies volutpat velit in mattis. Sed iaculis, metus vitae tristique mattis, lacus tortor tincidunt magna, vitae volutpat nisl mauris non risus. Maecenas auctor tristique sapien, sit amet suscipit neque iaculis pulvinar. Fusce scelerisque massa quam, ac semper augue varius molestie. Pellentesque.',
                'price' => '17990000',
                'year' => '2022',
                'image' => 'dummy2.jpg'
        ],[
                'name' => 'iPhone 14',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies volutpat velit in mattis. Sed iaculis, metus vitae tristique mattis, lacus tortor tincidunt magna, vitae volutpat nisl mauris non risus. Maecenas auctor tristique sapien, sit amet suscipit neque iaculis pulvinar. Fusce scelerisque massa quam, ac semper augue varius molestie. Pellentesque.',
                'price' => '11990000',
                'year' => '2022',
                'image' => 'dummy3.jpg'
        ],[
                'name' => 'iPhone 14 Pro',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies volutpat velit in mattis. Sed iaculis, metus vitae tristique mattis, lacus tortor tincidunt magna, vitae volutpat nisl mauris non risus. Maecenas auctor tristique sapien, sit amet suscipit neque iaculis pulvinar. Fusce scelerisque massa quam, ac semper augue varius molestie. Pellentesque.',
                'price' => '17990000',
                'year' => '2022',
                'image' => 'dummy4.jpg'
        ],[
                'name' => 'iPhone 14 Pro Max',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies volutpat velit in mattis. Sed iaculis, metus vitae tristique mattis, lacus tortor tincidunt magna, vitae volutpat nisl mauris non risus. Maecenas auctor tristique sapien, sit amet suscipit neque iaculis pulvinar. Fusce scelerisque massa quam, ac semper augue varius molestie. Pellentesque.',
                'price' => '21990000',
                'year' => '2022',
                'image' => 'dummy5.jpg'
        ],[
                'name' => 'Xiaomi Redmi Note 12',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies volutpat velit in mattis. Sed iaculis, metus vitae tristique mattis, lacus tortor tincidunt magna, vitae volutpat nisl mauris non risus. Maecenas auctor tristique sapien, sit amet suscipit neque iaculis pulvinar. Fusce scelerisque massa quam, ac semper augue varius molestie. Pellentesque.',
                'price' => '3990000',
                'year' => '2022',
                'image' => 'dummy6.jpg'
        ],[
                'name' => 'Xiaomi Redmi Note 12 Pro',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies volutpat velit in mattis. Sed iaculis, metus vitae tristique mattis, lacus tortor tincidunt magna, vitae volutpat nisl mauris non risus. Maecenas auctor tristique sapien, sit amet suscipit neque iaculis pulvinar. Fusce scelerisque massa quam, ac semper augue varius molestie. Pellentesque.',
                'price' => '4990000',
                'year' => '2022',
                'image' => 'dummy7.jpg'
        ],[
                'name' => 'Xiaomi Mi 12',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies volutpat velit in mattis. Sed iaculis, metus vitae tristique mattis, lacus tortor tincidunt magna, vitae volutpat nisl mauris non risus. Maecenas auctor tristique sapien, sit amet suscipit neque iaculis pulvinar. Fusce scelerisque massa quam, ac semper augue varius molestie. Pellentesque.',
                'price' => '9990000',
                'year' => '2022',
                'image' => 'dummy8.jpg'
        ],[
                'name' => 'Xiaomi Mi 12 Ultra',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies volutpat velit in mattis. Sed iaculis, metus vitae tristique mattis, lacus tortor tincidunt magna, vitae volutpat nisl mauris non risus. Maecenas auctor tristique sapien, sit amet suscipit neque iaculis pulvinar. Fusce scelerisque massa quam, ac semper augue varius molestie. Pellentesque.',
                'price' => '10990000',
                'year' => '2022',
                'image' => 'dummy9.jpg'
        ],[
                'name' => 'OnePlus 5',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultricies volutpat velit in mattis. Sed iaculis, metus vitae tristique mattis, lacus tortor tincidunt magna, vitae volutpat nisl mauris non risus. Maecenas auctor tristique sapien, sit amet suscipit neque iaculis pulvinar. Fusce scelerisque massa quam, ac semper augue varius molestie. Pellentesque.',
                'price' => '8990000',
                'year' => '2020',
                'image' => 'dummy10.jpg'
        ]];

        Product::insert($products);
    }
}
