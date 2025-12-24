<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::firstOrCreate(['name' => 'create student']);
        Permission::firstOrCreate(['name' => 'edit student']);
        Permission::firstOrCreate(['name' => 'delete student']);
        Permission::firstOrCreate(['name' => 'view student']);
        Permission::firstOrCreate(['name' => 'approve students']);
        Permission::firstOrCreate(['name' => 'view staff']);
    }
}
