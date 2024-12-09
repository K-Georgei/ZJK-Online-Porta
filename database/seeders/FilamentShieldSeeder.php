<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class FilamentShieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        $permissions = Permission::query()
            ->where('name', 'not like', '%role')
            ->get();

        $adminRole->syncPermissions($permissions);


        $permissions = Permission::query()
            ->where('name', 'like', '%user')
            ->get();


        $userRole->syncPermissions($permissions);

        $this->command->info("Jogosultságok létrehozva");
    }
}
