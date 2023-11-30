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
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Blogger']);

        /* ACA LA PARTE DE DESCRIPTION LO CREAMOS EN LA MIGRACION DE PERMISSION, LO QUE HACE ES AGREGARLE UN NOMBRE A DICHOS PERMISOS */

        Permission::create(['name' => 'admin.home', 'description' => 'Ver el dashboard'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.users.index', 'description' => 'Ver listado de usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit', 'description' => 'Asignar un rol'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.roles.index', 'description' => 'Ver listado de Roles'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.roles.create', 'description' => 'Crear Rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.edit', 'description' => 'Editar Rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.destroy', 'description' => 'Eliminar Rol'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.categories.index', 'description' => 'Ver listado de categorias'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categories.create', 'description' => 'Crear categorias'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.edit', 'description' => 'Editar categorias'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.destroy', 'description' => 'Eliminar categorias'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.tags.index', 'description' => 'Ver listado de etiquetas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tags.create', 'description' => 'Crear etiquetas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.edit', 'description' => 'Editar etiquetas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.destroy', 'description' => 'Eliminar etiquetas'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.posts.index', 'description' => 'Ver listado de Posts'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.create', 'description' => 'Crear Posts'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.edit', 'description' => 'Editar Posts'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.destroy', 'description' => 'Eliminar Posts'])->syncRoles([$role1, $role2]);

        /*  VAMOS A UTILIZAR UN METODO PARA INGRESAR DATOS EN LA TABLA INTERMEDIA'' */
    }
}
