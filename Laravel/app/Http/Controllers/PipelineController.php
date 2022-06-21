<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Pipeline;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PipelineController extends Controller
{
    /**
     * Get pipelines
     * @return JsonResponse
     */
    public function getPipelines(): JsonResponse
    {
        $pipelines = Pipeline::with(['cards'])->get();
        return response()->json([
            'status' => 'Success',
            'data' => $pipelines
        ], 200);
    }

    /**
     * Update pipeline cards
     * 
     * @param Request $request
     * @return JsonResponse
     */
    public function storeCard(Request $request): JsonResponse
    {
        $request->validate([
            'pipeline_id' => 'required|exists:pipelines,id',
            'card_id' => 'required|exists:cards,id',
        ]);

        Card::find($request->input('card_id'))->update([
            'pipeline_id' => $request->input('pipeline_id'),
        ]);

        return response()->json([
            'message' => 'Success',
        ]);
    }
}
