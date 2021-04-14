<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buildings')->insert(
            $this->data()
        );
    }

    private function data(): array
    {
        return [
            [
                'name'            => 'The Victoria',
                'price'           => '374662',
                'count_bedrooms'  => '4',
                'count_bathrooms' => '2',
                'count_storeys'   => '2',
                'count_garages'   => '2',
            ],
            [
                'name'            => 'The Xavier',
                'price'           => '513268',
                'count_bedrooms'  => '4',
                'count_bathrooms' => '2',
                'count_storeys'   => '1',
                'count_garages'   => '2',
            ],
            [
                'name'            => 'The Como',
                'price'           => '454990',
                'count_bedrooms'  => '4',
                'count_bathrooms' => '3',
                'count_storeys'   => '2',
                'count_garages'   => '3',
            ],
            [
                'name'            => 'The Aspen',
                'price'           => '384356',
                'count_bedrooms'  => '4',
                'count_bathrooms' => '2',
                'count_storeys'   => '2',
                'count_garages'   => '2',
            ],
            [
                'name'            => 'The Lucretia',
                'price'           => '572002',
                'count_bedrooms'  => '4',
                'count_bathrooms' => '3',
                'count_storeys'   => '2',
                'count_garages'   => '2',
            ],
            [
                'name'            => 'The Toorak',
                'price'           => '521951',
                'count_bedrooms'  => '5',
                'count_bathrooms' => '2',
                'count_storeys'   => '1',
                'count_garages'   => '2',
            ],
            [
                'name'            => 'The Skyscape',
                'price'           => '263604',
                'count_bedrooms'  => '3',
                'count_bathrooms' => '2',
                'count_storeys'   => '2',
                'count_garages'   => '2',
            ],
            [
                'name'            => 'The Clifton',
                'price'           => '386103',
                'count_bedrooms'  => '3',
                'count_bathrooms' => '2',
                'count_storeys'   => '1',
                'count_garages'   => '1',
            ],
            [
                'name'            => 'The Geneva',
                'price'           => '390600',
                'count_bedrooms'  => '4',
                'count_bathrooms' => '3',
                'count_storeys'   => '2',
                'count_garages'   => '2',
            ],
        ];
    }
}
