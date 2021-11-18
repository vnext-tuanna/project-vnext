<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param int $status
     * @param string $message
     * @param array $data
     * @return JsonResponse
     */
    protected function failed(int $status = 400, string $message = '', array $data = []): JsonResponse
    {
        return response()->json([
            'is_success' => false,
            'data' => [],
            'message' => $message,
        ], $status);
    }

    /**
     * @param $data
     * @param string $message
     * @param int $status
     * @return JsonResponse
     */
    protected function success($data, string $message = '', int $status = 200): JsonResponse
    {
        return response()->json([
            'is_success' => true,
            'data' => $data,
            'message' => $message,
        ], $status);
    }
}
