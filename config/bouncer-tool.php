<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Actions
    |--------------------------------------------------------------------------
    |
    | The actions that are displayed in the Name field in the Ability
    | resource.
    |
    */

    'actions' => [
        '*' => 'Manage',
        'viewAny' => 'View Any',
        'view' => 'View',
        'create' => 'Create',
        'update' => 'Update',
        'replicate' => 'Replicate',
        'delete' => 'Delete',
        'restore' => 'Restore',
        'forceDelete' => 'Force Delete',
        'runAction' => 'Run Action',
        'runDestructiveAction' => 'Run Destructive Action',
    ],

    /*
    |--------------------------------------------------------------------------
    | Entities
    |--------------------------------------------------------------------------
    |
    | The entities that are displayed in the Entity Type field in the Ability
    | resource.
    |
    */

    'entities' => [
        'User' => App\Models\User::class,
        'Cliente' => App\Models\Cliente::class,
        'Proyecto' => App\Models\Proyecto::class,
        'ArchivoTicket' => App\Models\ArchivoTicket::class,
        'EstadoTicket' => App\Models\EstadoTicket::class,
        'SeveridadTicket' => App\Models\SeveridadTicket::class,
        'Ticket' => App\Models\Ticket::class,
        'Role' => Silber\Bouncer\Database\Role::class,
        'Ability' => Silber\Bouncer\Database\Ability::class,
    ],

];
