<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class tagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
          ['az'=>'Daşınmaz Əmlak','en'=>'Real Estate Laws'],
          ['az'=>'Cinayət Hüququ','en'=>'All Criminal Laws'],
          ['az'=>'Sağlamlıqla əlaqəli qanunlar','en'=>'Health Related Laws']
        ];

        foreach ($tags as $tag)
        {
            Tag::create([
                'tag_az'=>$tag['az'],
                'tag_en'=>$tag['en'],
                'slug_az'=>str_slug($tag['az']),
                'slug_en'=>str_slug($tag['en'])
            ]);
        }
    }
}
