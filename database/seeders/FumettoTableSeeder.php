<?php

namespace Database\Seeders;

use App\Models\Fumetto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;

class FumettoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_fumetti = config('comics');

        foreach ($array_fumetti as $fumetti_detail) {
            $new_fumetto = new Fumetto();
            $new_fumetto->title = $fumetti_detail['title'];
            $new_fumetto->slug = Fumetto::generateSlug($new_fumetto->title);
            $new_fumetto->description = $fumetti_detail['description'];
            $new_fumetto->thumb = $fumetti_detail['thumb'];
            $new_fumetto->price = $fumetti_detail['price'];
            $new_fumetto->series = $fumetti_detail['series'];
            $new_fumetto->sale_date = $fumetti_detail['sale_date'];
            $new_fumetto->type = $fumetti_detail['type'];
            $new_fumetto->save();
        }
    }
}
