<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Services\Book\Actions as Actions;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $response = app(Actions\GetAllAction::class)->execute();

        return response()->json($response);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function insert(Request $request): Response
    {
        app(Actions\InsertAction::class)->execute(
            $request->toArray()
        );

        return response()->noContent();
    }
}
