<?php

namespace Database\Seeders;

use App\Models\Stack;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stacksData = config('store.stacks');


        foreach ($stacksData as $stack) {
            $newStack = new Stack();
            $newStack->name = $stack;
            $newStack->save();
        }
    }
}
