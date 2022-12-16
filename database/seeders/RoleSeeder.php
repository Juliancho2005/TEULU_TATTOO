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
        $rol3 = Role::create(['name' => 'Usuario']);
        
        $rol1 -> hasPermissionTo('gestionAdmin');
        $rol1 -> hasPermissionTo('CrearTatu');
        $rol1 -> hasPermissionTo('GestionUsers');
        $rol1 -> hasPermissionTo('GestionProducts');
        $rol1 -> hasPermissionTo('GestionAdmin');

        //permisos
        Permission::create(['name' => 'gestionAdmin']);
        Permission::create(['name' => 'CrearTatu']);
        Permission::create(['name' => 'GestionUsers']);
        Permission::create(['name' => 'GestionProducts']);



    }
}