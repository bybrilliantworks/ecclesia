<?php
/**
 * Created by PhpStorm.
 * User: jidesakin
 * Date: 6/10/16
 * Time: 12:44 PM
 */

namespace App\Scopes;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class ChurchScope implements Scope
{

    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $builder
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        // Adds the church condition to query
        return $builder->where('church_id', auth()->user()->church_id);
    }
}