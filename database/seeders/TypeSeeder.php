<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typesData = config('store.types');

        for ($i = 0; $i < count($typesData); $i++) {

            $newType = new Type();
            $newType->name = $typesData[$i];
            $newType->save();
        }
    }
}
