<?php

declare(strict_types=1);

namespace App\Http\Controllers\API;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * @OA\Info(
 *     title="Test app API documentation",
 *     version="1.0.0",
 *     @OA\Contact(
 *         email="admin@example.com"
 *     ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 * @OA\Server(
 *     description="Test app API server",
 *     url="http://alex-test.local/api"
 * )
 */
class BaseController extends Controller
{
    /**
     * Returns a successful response.
     *
     * @param mixed $data
     * @param int $status
     *
     * @return JsonResponse
     */
    public function sendResponse($data = null, int $status = 200): JsonResponse
    {
        $response = null;

        if ($data !== null) {
            $response = $data;
        }

        return response()->json($response, $status);
    }

    /**
     * Returns a response with status code "created" (201).
     *
     * @param mixed $data
     *
     * @return JsonResponse
     */
    public function sendCreatedResponse($data = null): JsonResponse
    {
        $response = null;

        if ($data !== null) {
            $response = $data;
        }

        return response()->json($response, 201);
    }

    /**
     * Returns a successful response without body.
     *
     * @return JsonResponse
     */
    public function sendResponseWithoutBody(): JsonResponse
    {
        return response()->json(null, 204);
    }

    /**
     * Returns an error response.
     *
     * @param string|null $message
     * @param array|null $errorMessages
     * @param int $code
     *
     * @return JsonResponse
     */
    public function sendErrorResponse(
        ?string $message = null,
        ?array $errorMessages = [],
        int $code = 500
    ): JsonResponse {
        $response = [];

        if ($message !== null) {
            $response['message'] = $message;
        }

        if (!empty($errorMessages)) {
            $response['errors'] = $errorMessages;
        }

        return response()->json($response, $code);
    }

    /**
     * Returns a not found response.
     *
     * @param mixed $data
     *
     * @return JsonResponse
     */
    public function sendNotFoundResponse($data = null): JsonResponse
    {
        $response = null;

        if ($data !== null) {
            $response = $data;
        }

        return response()->json($response, 404);
    }
}
