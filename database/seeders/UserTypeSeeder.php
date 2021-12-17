<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserType::factory()
            ->count(2)
            ->state(new Sequence(
                ['name' => 'admin'],
                ['name' => 'user'],
            ))
            ->create();
    }
}
