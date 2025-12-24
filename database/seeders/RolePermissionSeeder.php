<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Get existing roles - (we can simply say ceate variables to listing all existing roles)
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $teacher = Role::firstOrCreate(['name' => 'teacher']);
        $student = Role::firstOrCreate(['name' => 'student']);
        $staff = Role::firstOrcreate(['name' => 'staff']);

        // Get existing permissions - (simply say create variables to listing all existing permisions)
        $createStudent = Permission::firstOrCreate(['name' => 'create student']);
        $editStudent   = Permission::firstOrCreate(['name' => 'edit student']);
        $viewStudent   = Permission::firstOrCreate(['name' => 'view student']);
        $viewStaff   = Permission::firstOrCreate(['name' => 'view staff']);


        // Attach permissions to roles
        $admin->givePermissionTo([$createStudent, $editStudent, $viewStudent]);
        $teacher->givePermissionTo([$viewStudent]);
        $student->givePermissionTo([$viewStudent]);
        $staff->givePermissionTo([$viewStaff]);
    }
}
