<?php

declare(strict_types=1);

namespace App\Http\Requests\API\Buildings;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'            => [
                'string',
                'min:3',
                'max:1000'
            ],
            'price_from'      => [
                'numeric',
                'min:0'
            ],
            'price_to'        => [
                'numeric',
                'min:0'
            ],
            'count_bedrooms'  => [
                'numeric',
                'min:0'
            ],
            'count_bathrooms' => [
                'numeric',
                'min:0'
            ],
            'count_storeys'   => [
                'numeric',
                'min:0'
            ],
            'count_garages'   => [
                'numeric',
                'min:0'
            ],
        ];
    }

    public function data(): IndexDTO
    {
        return new IndexDTO(
            $this->has('name') ? trim($this->get('name')) : null,
            $this->has('price_from') ? (float)$this->get('price_from') : null,
            $this->has('price_to') ? (float)$this->get('price_to') : null,
            $this->has('count_bedrooms') ? (int)$this->get('count_bedrooms') : null,
            $this->has('count_bathrooms') ? (int)$this->get('count_bathrooms') : null,
            $this->has('count_storeys') ? (int)$this->get('count_storeys') : null,
            $this->has('count_garages') ? (int)$this->get('count_garages') : null,
        );
    }
}
