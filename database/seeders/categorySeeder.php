<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['az'=>'Daşınmaz Əmlak','en'=>'Real Estate Laws'],
            ['az'=>'Cinayət Hüququ','en'=>'All Criminal Laws'],
            ['az'=>'Sağlamlıqla əlaqəli qanunlar','en'=>'Health Related Laws']
        ];

        foreach ($categories as $category)
        {
            Category::create([
                'category_az'=>$category['az'],
                'category_en'=>$category['en'],
                'slug_az'=>str_slug($category['az']),
                'slug_en'=>str_slug($category['en'])
            ]);
        }
    }
}
