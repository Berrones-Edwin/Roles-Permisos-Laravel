<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //USUARIOS
        Permission::create([
            'name'        => 'Navegar Usuarios',
            'slug'        => 'users.index',
            'description' => 'Lista y Navega todos los usuarios del sistema'
        ]);
        Permission::create([
            'name'        => 'Ver Detalle De Usuario',
            'slug'        => 'users.show',
            'description' => 'Ver en detalle cada usuario del sistema'
        ]);
        Permission::create([
            'name'        => 'Edicion Usuarios',
            'slug'        => 'users.edit',
            'description' => 'Editar cualquier dato de un usuario  del sistema'
        ]);
        Permission::create([
            'name'        => 'Eliminar Usuario',
            'slug'        => 'users.destroy',
            'description' => 'Eliminar cualquier usuario  del sistema'
        ]);

        //ROLES
        Permission::create([
            'name'        => 'Navegar Roles',
            'slug'        => 'roles.index',
            'description' => 'Lista y Navega todos los roles del sistema'
        ]);
        Permission::create([
            'name'        => 'Ver Detalle de Rol',
            'slug'        => 'roles.show',
            'description' => 'Ver en detalle cada rol del sistema'
        ]);
        Permission::create([
            'name'        => 'Edicion Roles',
            'slug'        => 'roles.create',
            'description' => 'Editar cualquier dato de un rol  del sistema'
        ]);
        Permission::create([
            'name'        => 'Edicion Roles',
            'slug'        => 'roles.edit',
            'description' => 'Editar cualquier dato de un rol  del sistema'
        ]);
        Permission::create([
            'name'        => 'Eliminar Rol',
            'slug'        => 'roles.destroy',
            'description' => 'Eliminar cualquier rol  del sistema'
        ]);

        //PRODUCTOS
        Permission::create([
            'name'        => 'Navegar Productos',
            'slug'        => 'products.index',
            'description' => 'Lista y Navega todos los productos del sistema'
        ]);
        Permission::create([
            'name'        => 'Ver Detalle de Producto',
            'slug'        => 'products.show',
            'description' => 'Ver en detalle cada producto del sistema'
        ]);
        Permission::create([
            'name'        => 'Edicion Productos',
            'slug'        => 'products.create',
            'description' => 'Editar cualquier dato de un producto del sistema'
        ]);
        Permission::create([
            'name'        => 'Edicion Productos',
            'slug'        => 'products.edit',
            'description' => 'Editar cualquier dato de un producto del sistema'
        ]);
        Permission::create([
            'name'        => 'Eliminar Producto',
            'slug'        => 'products.destroy',
            'description' => 'Eliminar cualquier producto del sistema'
        ]);
    }
}
