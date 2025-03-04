<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class HealthController extends Controller
{
    public function checkServiceStatus(): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Server is up and running'
        ], 200);
    }
}
