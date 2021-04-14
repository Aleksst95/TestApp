<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Building
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property int $count_bedrooms
 * @property int $count_bathrooms
 * @property int $count_storeys
 * @property int $count_garages
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \App\Models\Building\BuildingBuilder|Building bathroomsEqual(?int $count)
 * @method static \App\Models\Building\BuildingBuilder|Building bedroomsEqual(?int $count)
 * @method static \App\Models\Building\BuildingBuilder|Building garagesEqual(?int $count)
 * @method static \App\Models\Building\BuildingBuilder|Building nameLike(?string $name)
 * @method static \App\Models\Building\BuildingBuilder|Building newModelQuery()
 * @method static \App\Models\Building\BuildingBuilder|Building newQuery()
 * @method static \App\Models\Building\BuildingBuilder|Building priceBetween(?float $from, ?float $to)
 * @method static \App\Models\Building\BuildingBuilder|Building query()
 * @method static \App\Models\Building\BuildingBuilder|Building storeysEqual(?int $count)
 * @method static \App\Models\Building\BuildingBuilder|Building whereCountBathrooms($value)
 * @method static \App\Models\Building\BuildingBuilder|Building whereCountBedrooms($value)
 * @method static \App\Models\Building\BuildingBuilder|Building whereCountGarages($value)
 * @method static \App\Models\Building\BuildingBuilder|Building whereCountStoreys($value)
 * @method static \App\Models\Building\BuildingBuilder|Building whereCreatedAt($value)
 * @method static \App\Models\Building\BuildingBuilder|Building whereDeletedAt($value)
 * @method static \App\Models\Building\BuildingBuilder|Building whereId($value)
 * @method static \App\Models\Building\BuildingBuilder|Building whereName($value)
 * @method static \App\Models\Building\BuildingBuilder|Building wherePrice($value)
 * @method static \App\Models\Building\BuildingBuilder|Building whereUpdatedAt($value)
 */
	class Building extends \Eloquent {}
}

