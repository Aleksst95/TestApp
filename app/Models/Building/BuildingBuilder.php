<?php

declare(strict_types=1);

namespace App\Models\Building;

use Illuminate\Database\Eloquent\Builder;

class BuildingBuilder extends Builder
{
    public function nameLike(?string $name): self
    {
        return $this->when(
            $name,
            function (Builder $query) use ($name) {
                return $query->where('name', 'like', '%' . $name . '%');
            }
        );
    }

    public function priceBetween(?float $from, ?float $to): self
    {
        if ($from !== null) {
            $this->where('price', '>=', $from);
        }

        if ($to !== null) {
            $this->where('price', '<=', $to);
        }

        return $this;
    }

    public function bedroomsEqual(?int $count): self
    {
        if ($count !== null) {
            $this->where('count_bedrooms', $count);
        }

        return $this;
    }

    public function bathroomsEqual(?int $count): self
    {
        if ($count !== null) {
            $this->where('count_bathrooms', $count);
        }

        return $this;
    }

    public function storeysEqual(?int $count): self
    {
        if ($count !== null) {
            $this->where('count_storeys', $count);
        }

        return $this;
    }

    public function garagesEqual(?int $count): self
    {
        if ($count !== null) {
            $this->where('count_garages', $count);
        }

        return $this;
    }
}
