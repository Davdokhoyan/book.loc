<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Sequence;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::factory()
            ->count(8)
            ->state(new Sequence(
                ['name' => 'Action and Adventure'],
                ['name' => 'Classics'],
                ['name' => 'Comic Book or Graphic Novel'],
                ['name' => 'Detective and Mystery'],
                ['name' => 'Fantasy'],
                ['name' => 'Historical Fiction'],
                ['name' => 'Horror'],
                ['name' => 'Literary Fiction']
            ))
            ->create();
    }
}
