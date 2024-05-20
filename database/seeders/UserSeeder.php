<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            [
                'email' => 'admin@gmail.com'
            ],
            [
                'name' => 'Admin',
                'password' => bcrypt('admin'),
                'email_verified_at' => now()
            ]
        );
        $roleAdmin = Role::updateOrCreate(
            [
                'name' => 'Admin'
            ],
            [
                'name' => 'Admin'
            ]
        );
        $roleuser = Role::updateOrCreate(
            [
                'name' => 'Karyawan'
            ],
            [
                'name' => 'Karyawan'
            ]
        );
        $permission = Permission::updateOrCreate(
            [
                'name' => 'viewAdmin'
            ],
            [
                'name' => 'viewAdmin'
            ]
        );
        $roleAdmin->givePermissionTo($permission);
        $admin = User::find(1);
        $admin->assignRole('Admin');
    }
}
