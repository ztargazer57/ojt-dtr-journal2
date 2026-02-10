<?php

namespace Database\Seeders;

use App\Models\Shift;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $dayShiftId = Shift::where('name', 'Day Shift')->value('id');
        $nightShiftId = Shift::where('name', 'Night Shift')->value('id');
        $midShiftId = Shift::where('name', 'Mid Shift')->value('id');

        $users = [
            [
                'name' => 'Jerwin Noval',
                'email' => 'jerwin@example.com',
                'password' => Hash::make('password'),
                'shift_id' => $nightShiftId,
            ],
            [
                'name' => 'Christy Asis',
                'email' => 'christy@example.com',
                'password' => Hash::make('password'),
                'shift_id' => $dayShiftId,
            ],
            [
                'name' => 'Mary Grace Rosell',
                'email' => 'mary@example.com',
                'password' => Hash::make('password'),
                'shift_id' => $midShiftId,
            ],
            [
                'name' => 'John Mhell',
                'email' => 'john@example.com',
                'password' => Hash::make('password'),
                'shift_id' => $nightShiftId,
            ],
            [
                'name' => 'Melvin Aike',
                'email' => 'melvin@example.com',
                'password' => Hash::make('password'),
                'shift_id' => $nightShiftId,
            ],
            [
                'name' => 'Ron Michael',
                'email' => 'ron@example.com',
                'password' => Hash::make('password'),
                'shift_id' => $nightShiftId,
            ],
            [
                'name' => 'Nin Kyle',
                'email' => 'nin@example.com',
                'password' => Hash::make('password'),
                'shift_id' => $nightShiftId,
            ],
            [
                'name' => 'Roselyn Arenas',
                'email' => 'roselyn@example.com',
                'password' => Hash::make('password'),
                'shift_id' => $dayShiftId,
            ],
            [
                'name' => 'Mid Shift Intern',
                'email' => 'mid@example.com',
                'password' => Hash::make('password'),
                'shift_id' => $midShiftId,
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }
    }
}
