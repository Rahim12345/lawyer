<?php

namespace Database\Seeders;

use App\Models\Attorney;
use Illuminate\Database\Seeder;

class AttorneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<9;$i++)
        {
            Attorney::create([
                'photo'=>'team-1-1.jpg',
                'name_lastname'=>'Paz Conyers',
                'job'=>'Senior Attorney',
                'tel'=>'222 333 8800',
                'email'=>'Paz.Conyers@example.com',
                'twitter'=>config('app.url').'twitter',
                'facebook'=>config('app.url').'facebook',
                'instagram'=>config('app.url').'instagram',
                'youtube'=>config('app.url').'youtube',
            ]);
        }
    }
}
