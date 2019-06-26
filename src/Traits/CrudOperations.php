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
        RestoreAction;

    protected $model;
    protected $only;
    protected $except;

    public function __construct()
    {
        $middlewares = [];
        foreach ($this->middleware as $middleware => $options) {
            if (!is_string($middleware)) {
                $middleware = $options;
                $options = [];
            }
            $middlewares[] = compact('middleware', 'options');
        }
        $this->middleware = $middlewares;
    }
}
