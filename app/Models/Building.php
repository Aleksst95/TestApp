<?php

namespace App\Models;

use App\Models\Building\BuildingBuilder;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    /**
     * @return BuildingBuilder
     */
    public static function query()
    {
        return parent::query();
    }

    public function newEloquentBuilder($query)
    {
        return new BuildingBuilder($query);
    }
}
