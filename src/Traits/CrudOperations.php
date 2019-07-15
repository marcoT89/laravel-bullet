<?php

namespace MarcoT89\Bullet\Traits;

trait CrudOperations
{
    use IndexAction,
        StoreAction,
        UpdateAction,
        DestroyAction,
        ShowAction,
        EditAction,
        ForceDeleteAction,
        RestoreAction,
        BulletMiddleware,
        BulletPolicies;

    protected $model;
    protected $only;
    protected $except;
}
