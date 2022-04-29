<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\{Role, Permission};

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SETUP ROLES
        $roles = array(
            ['name' => 'admin', 'guard_name' => 'web'],
            ['name' => 'editor', 'guard_name' => 'web'],
            // ['name' => 'seller', 'guard_name' => 'web'],
        );

        Role::insert($roles);

        // SETUP PERMISSIONS
        $permissions = [
            'view',
            'create',
            'update',
            'delete'
        ];

        $resources = [
            'news',
            'news-category',
            'event',
            'event-category',
            'event-sport',
            'event-sponsor',
            'gallery-category',
            'gallery-photo',
            'gallery-video',
            'committee',
            'info-agenda',
            'social-media',
            'registration',
            'advertisement'
        ];

        $permissionPayload = [
            ['name' => 'send-email', 'guard_name' => 'web'],
            ['name' => 'delete-subscriber', 'guard_name' => 'web'],
            ['name' => 'view-file-manager', 'guard_name' => 'web']
        ];

        foreach($resources as $resource) {
            foreach($permissions as $permission) {
                array_push($permissionPayload, [
                    'name' => $permission.'-'.$resource,
                    'guard_name' => 'web'
                ]);
            }
        }

        Permission::insert($permissionPayload);

        $admin = User::find(1);
        $admin->assignRole('admin');

    }
}
