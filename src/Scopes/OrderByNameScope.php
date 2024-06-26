<?php

namespace IntraCompany\Commons\Scopes;

use Illuminate\Database\Eloquent\{
    Builder,
    Model,
    Scope
};

class OrderByNameScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        $builder->orderBy('name');
    }
}
