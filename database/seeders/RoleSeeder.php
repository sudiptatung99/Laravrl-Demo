<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissionAll = Permission::all();
        Role::updateOrCreate([
            'role' => 'Super Admin',
            'slug' => Str::slug('Super Admin')
        ])->permission()->sync($permissionAll->pluck('id'));

        Role::updateOrCreate([
            'role' => 'Order',
            'slug' => Str::slug('Order')
        ]);
    }
}
