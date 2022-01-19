<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        \DB::table('model_has_permissions')->delete();
        \DB::table('model_has_roles')->delete();
        \DB::table('role_has_permissions')->delete();
        \DB::table('roles')->delete();
        \DB::table('permissions')->delete();

        $models = ['user', 'course'];

        foreach ($models as $model) {
            Permission::create(['name' => $model . '-view-all']);
            Permission::create(['name' => $model . '-view']);
            Permission::create(['name' => $model . '-create']);
            Permission::create(['name' => $model . '-update']);
            Permission::create(['name' => $model . '-delete']);
            Permission::create(['name' => $model . '-restore']);
        }


        $administrator = Role::create(['name' => 'Administrator']);

        foreach ($models as $model) {
            $administrator->givePermissionTo($model . '-view-all');
            $administrator->givePermissionTo($model . '-view');
            $administrator->givePermissionTo($model . '-create');
            $administrator->givePermissionTo($model . '-update');
            $administrator->givePermissionTo($model . '-delete');
            $administrator->givePermissionTo($model . '-restore');
        }



        $user = User::find(1);
        $user->assignRole($administrator);

        $user_two = User::find(2);
        $user_two->assignRole($administrator);


        //
    }
}
