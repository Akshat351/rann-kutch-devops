<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'source_create',
            ],
            [
                'id'    => 20,
                'title' => 'source_edit',
            ],
            [
                'id'    => 21,
                'title' => 'source_show',
            ],
            [
                'id'    => 22,
                'title' => 'source_delete',
            ],
            [
                'id'    => 23,
                'title' => 'source_access',
            ],
            [
                'id'    => 24,
                'title' => 'destination_create',
            ],
            [
                'id'    => 25,
                'title' => 'destination_edit',
            ],
            [
                'id'    => 26,
                'title' => 'destination_show',
            ],
            [
                'id'    => 27,
                'title' => 'destination_delete',
            ],
            [
                'id'    => 28,
                'title' => 'destination_access',
            ],
            [
                'id'    => 29,
                'title' => 'trip_create',
            ],
            [
                'id'    => 30,
                'title' => 'trip_edit',
            ],
            [
                'id'    => 31,
                'title' => 'trip_show',
            ],
            [
                'id'    => 32,
                'title' => 'trip_delete',
            ],
            [
                'id'    => 33,
                'title' => 'trip_access',
            ],
            [
                'id'    => 34,
                'title' => 'airport_create',
            ],
            [
                'id'    => 35,
                'title' => 'airport_edit',
            ],
            [
                'id'    => 36,
                'title' => 'airport_show',
            ],
            [
                'id'    => 37,
                'title' => 'airport_delete',
            ],
            [
                'id'    => 38,
                'title' => 'airport_access',
            ],
            [
                'id'    => 39,
                'title' => 'local_cab_create',
            ],
            [
                'id'    => 40,
                'title' => 'local_cab_edit',
            ],
            [
                'id'    => 41,
                'title' => 'local_cab_show',
            ],
            [
                'id'    => 42,
                'title' => 'local_cab_delete',
            ],
            [
                'id'    => 43,
                'title' => 'local_cab_access',
            ],
            [
                'id'    => 44,
                'title' => 'car_rental_create',
            ],
            [
                'id'    => 45,
                'title' => 'car_rental_edit',
            ],
            [
                'id'    => 46,
                'title' => 'car_rental_show',
            ],
            [
                'id'    => 47,
                'title' => 'car_rental_delete',
            ],
            [
                'id'    => 48,
                'title' => 'car_rental_access',
            ],
            [
                'id'    => 49,
                'title' => 'tempo_traveller_create',
            ],
            [
                'id'    => 50,
                'title' => 'tempo_traveller_edit',
            ],
            [
                'id'    => 51,
                'title' => 'tempo_traveller_show',
            ],
            [
                'id'    => 52,
                'title' => 'tempo_traveller_delete',
            ],
            [
                'id'    => 53,
                'title' => 'tempo_traveller_access',
            ],
            [
                'id'    => 54,
                'title' => 'tour_category_create',
            ],
            [
                'id'    => 55,
                'title' => 'tour_category_edit',
            ],
            [
                'id'    => 56,
                'title' => 'tour_category_show',
            ],
            [
                'id'    => 57,
                'title' => 'tour_category_delete',
            ],
            [
                'id'    => 58,
                'title' => 'tour_category_access',
            ],
            [
                'id'    => 59,
                'title' => 'tour_package_create',
            ],
            [
                'id'    => 60,
                'title' => 'tour_package_edit',
            ],
            [
                'id'    => 61,
                'title' => 'tour_package_show',
            ],
            [
                'id'    => 62,
                'title' => 'tour_package_delete',
            ],
            [
                'id'    => 63,
                'title' => 'tour_package_access',
            ],
            [
                'id'    => 64,
                'title' => 'inquiry_create',
            ],
            [
                'id'    => 65,
                'title' => 'inquiry_edit',
            ],
            [
                'id'    => 66,
                'title' => 'inquiry_show',
            ],
            [
                'id'    => 67,
                'title' => 'inquiry_delete',
            ],
            [
                'id'    => 68,
                'title' => 'inquiry_access',
            ],
            [
                'id'    => 69,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
