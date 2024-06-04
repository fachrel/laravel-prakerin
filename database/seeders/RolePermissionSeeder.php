<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'view-admin']);
        Permission::create(['name' => 'add-admin']);
        Permission::create(['name' => 'edit-admin']);
        Permission::create(['name' => 'delete-admin']);

        Permission::create(['name' => 'view-student']);
        Permission::create(['name' => 'add-student']);
        Permission::create(['name' => 'edit-student']);
        Permission::create(['name' => 'delete-student']);

        Permission::create(['name' => 'view-teacher']);
        Permission::create(['name' => 'add-teacher']);
        Permission::create(['name' => 'edit-teacher']);
        Permission::create(['name' => 'delete-teacher']);

        // Permission::create(['name' => 'tambah-transaksi']);
        // Permission::create(['name' => 'hapus-transaksi']);

        Role::create(['name' => 'superadmin']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'student']);
        Role::create(['name' => 'teacher']);

        $roleSuperAdmin = Role::findByName('superadmin');
        $roleSuperAdmin->givePermissionTo('view-admin');
        $roleSuperAdmin->givePermissionTo('add-admin');
        $roleSuperAdmin->givePermissionTo('edit-admin');
        $roleSuperAdmin->givePermissionTo('delete-admin');

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('view-student');
        $roleAdmin->givePermissionTo('add-student');
        $roleAdmin->givePermissionTo('edit-student');
        $roleAdmin->givePermissionTo('delete-student');

        $roleAdmin->givePermissionTo('view-teacher');
        $roleAdmin->givePermissionTo('add-teacher');
        $roleAdmin->givePermissionTo('edit-teacher');
        $roleAdmin->givePermissionTo('delete-teacher');
    }
}
