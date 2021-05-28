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
        $roleBloggerAdmin = Role::create([
            'name'          => 'Blogger Admin',
            'description'   => 'Administrador del Blog'
        ]);
        $roleBlogger = Role::create([
            'name'          => 'Blogger',
            'description'   => 'Blogger'
        ]);


        /**
         * Permisos de Acceso y asignamiento a un o varios Roles
         */
        // Acceso al Panel de Administrador y a su Home
        Permission::create([
            'name'          => 'admin',
            'description'   => 'Acceso al PA "Permiso padre"'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin, $roleBlogger]);
        Permission::create([
            'name'          => 'admin.home',
            'description'   => 'Ver el "home" de PA'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin, $roleBlogger]);

        /**
         * Acceso como Administrador
         */
        Permission::create([
            'name'          => 'admin.admin',
            'description'   => 'Acceso al PA del Administrador del Sitio Web "Permiso padre"'
        ])->syncRoles([$roleAdmin]);
        // Acceso al apartado de Usuarios
        Permission::create([
            'name'          => 'admin.admin.users',
            'description'   => 'Acceso al PA del Administrador del Sitio Web - Apartado Usuarios "Permiso padre"'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.admin.users.index',
            'description'   => 'ASW - Apartado Usuarios - Ver listado de Usuarios'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.admin.users.show',
            'description'   => 'ASW - Apartado Usuarios - Ver detalle de un Usuario'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.admin.users.create',
            'description'   => 'ASW - Apartado Usuarios - Crear nuevo Usuario'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.admin.users.edit',
            'description'   => 'ASW - Apartado Usuarios - Editar un Usuario'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.admin.users.destroy',
            'description'   => 'ASW - Apartado Usuarios - Eliminar un Usuario'
        ])->syncRoles([$roleAdmin]);

        // Acceso al apartado de Roles
        Permission::create([
            'name'          => 'admin.admin.roles',
            'description'   => 'Acceso al PA del Administrador del Sitio Web - Apartado Roles "Permiso padre"'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.admin.roles.index',
            'description'   => 'ASW - Apartado Roles - Ver listado de Roles'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.admin.roles.show',
            'description'   => 'ASW - Apartado Roles - Ver detalle de un Rol'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.admin.roles.create',
            'description'   => 'ASW - Apartado Roles - Crear nuevo Rol'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.admin.roles.edit',
            'description'   => 'ASW - Apartado Roles - Editar un Rol'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.admin.roles.destroy',
            'description'   => 'ASW - Apartado Roles - Eliminar un Rol'
        ])->syncRoles([$roleAdmin]);

        // Acceso al apartado de Permisos
        Permission::create([
            'name'          => 'admin.admin.permissions',
            'description'   => 'Acceso al PA del Administrador del Sitio Web - Apartado Permisos "Permiso padre"'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.admin.permissions.index',
            'description'   => 'ASW - Apartado Permisos - Ver listado de Permisos'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.admin.permissions.show',
            'description'   => 'ASW - Apartado Permisos - Ver detalle de un Permiso'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.admin.permissions.create',
            'description'   => 'ASW - Apartado Permisos - Crear nuevo Permiso'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.admin.permissions.edit',
            'description'   => 'ASW - Apartado Permisos - Editar un Permiso'
        ])->syncRoles([$roleAdmin]);
        Permission::create([
            'name'          => 'admin.admin.permissions.destroy',
            'description'   => 'ASW - Apartado Permisos - Eliminar un Permiso'
        ])->syncRoles([$roleAdmin]);

        // [END] Acceso como Administrador

        /**
         * Acceso como Blogger
         */
        Permission::create([
            'name'          => 'admin.blog',
            'description'   => 'Acceso al PA del Administrador del Blog "Permiso padre"'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin, $roleBlogger]);
        // Acceso al apartado de Categorías
        Permission::create([
            'name'          => 'admin.blog.categories',
            'description'   => 'Acceso al PA del Administrador del Blog - Apartado Categorías "Permiso padre"'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin, $roleBlogger]);
        Permission::create([
            'name'          => 'admin.blog.categories.index',
            'description'   => 'AB - Apartado Categorías - Ver listado de Categorías'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin, $roleBlogger]);
        Permission::create([
            'name'          => 'admin.blog.categories.show',
            'description'   => 'AB - Apartado Categorías - Ver detalle de una Categoría'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin, $roleBlogger]);
        Permission::create([
            'name'          => 'admin.blog.categories.create',
            'description'   => 'AB - Apartado Categorías - Crear nueva Categoría'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin]);
        Permission::create([
            'name'          => 'admin.blog.categories.edit',
            'description'   => 'AB - Apartado Categorías - Editar una Categoría'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin]);
        Permission::create([
            'name'          => 'admin.blog.categories.destroy',
            'description'   => 'AB - Apartado Categorías - Eliminar una Categoría'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin]);

        // Acceso al apartado de Etiquetas
        Permission::create([
            'name'          => 'admin.blog.tags',
            'description'   => 'Acceso al PA del Administrador del Blog - Apartado Etiquetas "Permiso padre"'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin, $roleBlogger]);
        Permission::create([
            'name'          => 'admin.blog.tags.index',
            'description'   => 'AB - Apartado Etiquetas - Ver listado Etiquetas'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin, $roleBlogger]);
        Permission::create([
            'name'          => 'admin.blog.tags.show',
            'description'   => 'AB - Apartado Etiquetas - Ver detalle de una Etiqueta'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin, $roleBlogger]);
        Permission::create([
            'name'          => 'admin.blog.tags.create',
            'description'   => 'AB - Apartado Etiquetas - Crear nueva Etiqueta'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin]);
        Permission::create([
            'name'          => 'admin.blog.tags.edit',
            'description'   => 'AB - Apartado Etiquetas - Editar una Etiqueta'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin]);
        Permission::create([
            'name'          => 'admin.blog.tags.destroy',
            'description'   => 'AB - Apartado Etiquetas - Eliminar una Etiqueta'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin]);

        // Acceso al apartado de Artículos
        Permission::create([
            'name'          => 'admin.blog.posts',
            'description'   => 'Acceso al PA del Administrador del Blog - Apartado Artículos "Permiso padre"'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin, $roleBlogger]);
        Permission::create([
            'name'          => 'admin.blog.posts.index',
            'description'   => 'AB - Apartado Artículos - Ver listado de Artículos'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin, $roleBlogger]);
        Permission::create([
            'name'          => 'admin.blog.posts.show',
            'description'   => 'AB - Apartado Artículos - Ver detalle de un Artículo'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin, $roleBlogger]);
        Permission::create([
            'name'          => 'admin.blog.posts.create',
            'description'   => 'AB - Apartado Artículos - Crear nuevo Artículo'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin, $roleBlogger]);
        Permission::create([
            'name'          => 'admin.blog.posts.edit',
            'description'   => 'AB - Apartado Artículos - Editar un Artículo'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin, $roleBlogger]);
        Permission::create([
            'name'          => 'admin.blog.posts.destroy',
            'description'   => 'AB - Apartado Artículos - Eliminar una Artículo'
        ])->syncRoles([$roleAdmin, $roleBloggerAdmin, $roleBlogger]);

        // [END] Acceso como Blogger
    }
}
