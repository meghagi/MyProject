<?php

namespace Database\Seeders;

<<<<<<< HEAD
=======
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> 63f35f401765865da358c29be9c30da814386e9a
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
<<<<<<< HEAD
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
=======
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
>>>>>>> 63f35f401765865da358c29be9c30da814386e9a
    }
}
