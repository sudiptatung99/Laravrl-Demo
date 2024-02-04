<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'module_name' => 'Role',
                'permissions' => [
                    'Create Role',
                    'Update Role',
                    'Delete Role',
                    'Role List',
                    'Create User Role',
                    'Update User Role',
                    'Delete User Role',
                    'User Role List',
                ],
            ],
            [
                'module_name' => 'Dashboard',
                'permissions' => [
                    'Dashboard Control',
                ],
            ],

        ];
        for ($i = 0; $i < count($permissions); $i++) {
            $permission_module = $permissions[$i]['module_name'];
            $module = Module::updateOrCreate(['name' => $permission_module]);
            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                $permission_name = $permissions[$i]['permissions'][$j];
                $permission = Permission::updateOrCreate([
                    'name' => $permission_name,
                    'slug' => Str::slug($permission_name),
                    'module_id' => $module->id,
                ]);

            }
        }
    }
}
