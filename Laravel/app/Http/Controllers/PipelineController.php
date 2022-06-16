<?php

namespace App\Http\Controllers;

use App\Models\Pipeline;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PipelineController extends Controller
{
    /**
     * Get pipelines
     * @return JsonResponse
     */
    public function getPipelines() {
        $pipelines = Pipeline::with(['cards'])->get();
        return response()->json([
            'status' => 'Success',
            'data' => $pipelines
        ], 200);
    }
}
