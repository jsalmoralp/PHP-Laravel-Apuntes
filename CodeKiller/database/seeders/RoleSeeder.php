<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Roles de Acceso
         */
        $roleAdmin = Role::create([
            'name'          => 'Admin',
            'description'   => 'Administrador del Sitio Web'
        ]);
        $roleBlogger = Role::create([
            'name'          => 'Blogger',
            'description'   => 'Blogger'
        ]);


        /**
         * Permisos de Acceso y asignamiento a un o varios Roles
         */
        Permission::create([
            'name'          => 'admin',
            'description'   => 'Acceso al Panel de Administración'
        ])->syncRoles([$roleAdmin]);

        // Acceso al apartado de Usuarios
        Permission::create([
            'name'          => 'admin.users',
            'description'   => 'Administración de Usuarios'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.users.index',
            'description'   => 'Administración de Usuarios - Listado'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.users.show',
            'description'   => 'Administración de Usuarios - Detalle'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.users.create',
            'description'   => 'Administración de Usuarios - Crear'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.users.edit',
            'description'   => 'Administración de Usuarios - Editar'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.users.destroy',
            'description'   => 'Administración de Usuarios - Eliminar'
        ])->syncRoles([$roleAdmin]);

        // Acceso al apartado de Roles
        Permission::create([
            'name'          => 'admin.roles',
            'description'   => 'Administración de Roles'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.roles.index',
            'description'   => 'Administración de Roles - Listado'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.roles.show',
            'description'   => 'Administración de Roles - Detalle'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.roles.create',
            'description'   => 'Administración de Roles - Crear'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.roles.edit',
            'description'   => 'Administración de Roles - Editar'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.roles.destroy',
            'description'   => 'Administración de Roles - Eliminar'
        ])->syncRoles([$roleAdmin]);

        // Acceso al apartado de Permisos
        Permission::create([
            'name'          => 'admin.permissions',
            'description'   => 'Administración de Permisos'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.permissions.index',
            'description'   => 'Administración de Permisos - Listado'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.permissions.show',
            'description'   => 'Administración de Permisos - Detalle'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.permissions.create',
            'description'   => 'Administración de Permisos - Crear'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.permissions.edit',
            'description'   => 'Administración de Permisos - Editar'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.permissions.destroy',
            'description'   => 'Administración de Permisos - Eliminar'
        ])->syncRoles([$roleAdmin]);

        // Acceso al apartado de Categorías
        Permission::create([
            'name'          => 'admin.categories',
            'description'   => 'Administración de Categorias'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.categories.index',
            'description'   => 'Administración de Categorias - Listado'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.categories.show',
            'description'   => 'Administración de Categorias - Detalle'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.categories.create',
            'description'   => 'Administración de Categorias - Crear'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.categories.edit',
            'description'   => 'Administración de Categorias - Editar'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.categories.destroy',
            'description'   => 'Administración de Categorias - Eliminar'
        ])->syncRoles([$roleAdmin]);

        // Acceso al apartado de Etiquetas
        Permission::create([
            'name'          => 'admin.tags',
            'description'   => 'Administración de Etiquetas'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.tags.index',
            'description'   => 'Administración de Etiquetas - Listado'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.tags.show',
            'description'   => 'Administración de Etiquetas - Detalle'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.tags.create',
            'description'   => 'Administración de Etiquetas - Crear'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.tags.edit',
            'description'   => 'Administración de Etiquetas - Editar'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.tags.destroy',
            'description'   => 'Administración de Etiquetas - Eliminar'
        ])->syncRoles([$roleAdmin]);

        // Acceso al apartado de Artículos
        Permission::create([
            'name'          => 'admin.posts',
            'description'   => 'Administración de Artículos'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.posts.index',
            'description'   => 'Administración de Artículos - Listado'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.posts.show',
            'description'   => 'Administración de Artículos - Detalle'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.posts.create',
            'description'   => 'Administración de Artículos - Crear'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.posts.edit',
            'description'   => 'Administración de Artículos - Editar'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.posts.destroy',
            'description'   => 'Administración de Artículos - Eliminar'
        ])->syncRoles([$roleAdmin]);






        // [END] Acceso como Administrador
    }
}
