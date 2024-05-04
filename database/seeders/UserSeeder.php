<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // User::factory()->count(4)->create();

        $admin_accounts = [
            [
                'nom' => 'ZABRE',
                'prenom' => 'Boureima',
                'telephone' => '0000000',
                'statut' => 1,
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'role' => 'admin',
                'email_verified_at' => now(),
            ],
        ];

        foreach ($admin_accounts as $admin_account) {
            User::create($admin_account);
        }
    }
}
