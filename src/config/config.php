<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Rbac Role Model
    |--------------------------------------------------------------------------
    |
    | This is the Role model used by Rbac to create correct relations.  Update
    | the role if it is in a different namespace.
    |
    */
    'role' => '\Role',

    /*
    |--------------------------------------------------------------------------
    | Rbac Roles Table
    |--------------------------------------------------------------------------
    |
    | This is the Roles table used by Rbac to save roles to the database.
    |
    */
    'roles_table' => 'roles',

    /*
    |--------------------------------------------------------------------------
    | Rbac Permission Model
    |--------------------------------------------------------------------------
    |
    | This is the Permission model used by Rbac to create correct relations.  Update
    | the permission if it is in a different namespace.
    |
    */
    'permission' => '\Permission',

    /*
    |--------------------------------------------------------------------------
    | Rbac Permissions Table
    |--------------------------------------------------------------------------
    |
    | This is the Permissions table used by Rbac to save permissions to the database.
    |
    */
    'permissions_table' => 'permissions',

    /*
    |--------------------------------------------------------------------------
    | Rbac permission_role Table
    |--------------------------------------------------------------------------
    |
    | This is the permission_role table used by Rbac to save relationship between permissions and roles to the database.
    |
    */
    'permission_role_table' => 'permission_role',

    /*
    |--------------------------------------------------------------------------
    | Rbac assigned_roles Table
    |--------------------------------------------------------------------------
    |
    | This is the assigned_roles table used by Rbac to save assigned roles to the database.
    |
    */
    'assigned_roles_table' => 'assigned_roles',
);
