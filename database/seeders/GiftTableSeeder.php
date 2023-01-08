<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gift;

class GiftTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gifts = config('gifts_seeder.gifts');

        foreach($gifts as $gift){
            $newgift = new Gift();
            $newgift->title = $gift['title'];
            $newgift->description = $gift['description'];
            $newgift->image = $gift['image'];
            $newgift->type = $gift['type'];
            $newgift->name = $gift['name'];
            $newgift->surname = $gift['surname'];
            $newgift->save();
        }
    }
}
