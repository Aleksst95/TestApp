<?php

declare(strict_types=1);

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Buildings\IndexRequest;
use App\Models\Building;
use Illuminate\Http\JsonResponse;

class BuildingsController extends BaseController
{
    /**
     * @OA\Get(
     *     path="/buildings",
     *     operationId="buildingsAll",
     *     tags={"Buildings"},
     *     summary="Get all buildings",
     *     @OA\Parameter(
     *         name="name",
     *         in="query",
     *         description="Building name or part of the name",
     *         required=false,
     *         @OA\Schema(
     *             type="string",
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="price_from",
     *         in="query",
     *         description="Minimum price value",
     *         required=false,
     *         @OA\Schema(
     *             type="number",
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="price_to",
     *         in="query",
     *         description="Maximum price value",
     *         required=false,
     *         @OA\Schema(
     *             type="number",
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="count_bedrooms",
     *         in="query",
     *         description="Count of bedrooms",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="count_bathrooms",
     *         in="query",
     *         description="Count of bathrooms",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="count_storeys",
     *         in="query",
     *         description="Count of storeys",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="count_garages",
     *         in="query",
     *         description="Count of garages",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Everything is fine",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 type="array",
     *                 @OA\Items(
     *                     type="object",
     *                     @OA\Property(
     *                         property="name",
     *                         type="string"
     *                     ),
     *                     @OA\Property(
     *                         property="price_from",
     *                         type="number"
     *                     ),
     *                     @OA\Property(
     *                         property="price_to",
     *                         type="number"
     *                     ),
     *                     @OA\Property(
     *                         property="count_bedrooms",
     *                         type="integer"
     *                     ),
     *                     @OA\Property(
     *                         property="count_bathrooms",
     *                         type="integer"
     *                     ),
     *                     @OA\Property(
     *                         property="count_storeys",
     *                         type="integer"
     *                     ),
     *                     @OA\Property(
     *                         property="count_garages",
     *                         type="integer"
     *                     ),
     *                 ),
     *             )
     *         ),
     *     )
     * )
     */
    public function index(IndexRequest $request): JsonResponse
    {
        // For the test application I didn't create an additional layer to work with the DB data.
        // For this task it will be over engineering.
        $items = Building::query()
            ->nameLike($request->data()->name())
            ->priceBetween($request->data()->priceFrom(), $request->data()->priceTo())
            ->bedroomsEqual($request->data()->countBedrooms())
            ->bathroomsEqual($request->data()->countBathrooms())
            ->storeysEqual($request->data()->countStoreys())
            ->garagesEqual($request->data()->countGarages())
            ->orderBy('name')
            ->get(['name', 'price', 'count_bedrooms', 'count_bathrooms', 'count_storeys', 'count_garages']);

        return $this->sendResponse($items);
    }
}
