<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< Updated upstream
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
=======
>>>>>>> Stashed changes

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
        $rol3 = Role::create(['name' => 'Ususario']);

        //permisos
        Permission::create(['name' => 'crear publicaciones']);
<<<<<<< Updated upstream
        Permission::create(['name' => 'EliminarUsuarios']);
=======
        
>>>>>>> Stashed changes
    }
}