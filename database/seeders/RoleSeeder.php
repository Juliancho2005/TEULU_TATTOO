<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol1 = Role::create(['name' => 'Admin']);
        $rol2 = Role::create(['name' => 'Tatuador']);
        $rol3 = Role::create(['name' => 'Usuario']);
        
        $rol1 -> hasPermissionTo('gestionAdmin'); 

        $rol1 -> hasPermissionTo('GestionTatu');

        //permisos
        Permission::create(['name' => 'crear publicaciones']);
        Permission::create(['name' => 'EliminarUsuarios']);
<<<<<<< HEAD
        Permission::create(['name' => 'GestionTatu']);
=======
        Permission::create(['name' => 'gestionAdmin']);
>>>>>>> 49c7ad06d0cbdbef04efc12679acbcf5827984a2

    }
}