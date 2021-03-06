<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::firstORCreate(['name' => 'admin']);
        $user =Role::firstOrCreate(['name' => 'user']);

        $permissions = [
            ['name' => 'role:create', 'guard_name'=> 'web'], 
            ['name' => 'role:view', 'guard_name' => 'web'], 
            ['name' => 'role:update', 'guard_name' => 'web'], 
            ['name' => 'role:delete', 'guard_name' => 'web'],
            ['name' => 'posts:create', 'guard_name' => 'web'], 
            ['name' => 'posts:view', 'guard_name' => 'web'], 
            ['name' => 'posts:update', 'guard_name' => 'web'], 
            ['name' => 'posts:delete', 'guard_name' => 'web'],
            ['name' => 'tags:create', 'guard_name' => 'web'], 
            ['name' => 'tags:view', 'guard_name' => 'web'], 
            ['name' => 'tags:update', 'guard_name' => 'web'],
            ['name' => 'tags:delete', 'guard_name' => 'web'],
            ['name' => 'categories:create', 'guard_name' => 'web'], 
            ['name' => 'categories:view', 'guard_name' => 'web'], 
            ['name' => 'categories:update', 'guard_name' => 'web'], 
            ['name' => 'categories:delete', 'guard_name' => 'web'],
        ];

        Permission::insert($permissions);

        $permissions = [
            'categories:view', 
            'categories:update', 
            'categories:delete',
            'categories:create',
            'tags:view', 
            'tags:update', 
            'tags:delete',
            'tags:create', 
            'role:create', 
            'role:view', 
            'role:update', 
            'role:delete',       
            'posts:create', 
            'posts:view', 
            'posts:update', 
            'posts:delete'
        ];

        $admin->syncPermissions($permissions);
        
    }
}
