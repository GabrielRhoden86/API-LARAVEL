<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Student::factory(10)->create();

        // \App\Models\Student::factory()->create([
        //     'name' => 'Gabriel',
        //     'course' => 'TI',
        // ]);

        User::factory()->create([
            'name' => 'Gabriel 01',
            'email' => 'gabrielrhodden@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Ga230803!'), // Senha definida aqui
            // 'remember_token' => Str::random(10),
        ]);
    }              // execute php artisan db:seed
}
