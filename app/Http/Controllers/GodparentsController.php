<?php

namespace App\Http\Controllers;

use App\Contracts\GodparentsRepositoryInterface;
use App\Http\Requests\StoreGodparentsRequest;
use App\Http\Resources\GodparentsResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

class GodparentsController extends Controller
{
    private GodparentsRepositoryInterface $godparentsRepository;

    public function __construct(GodparentsRepositoryInterface $godparentsRepository)
    {
        $this->godparentsRepository = $godparentsRepository;
    }

    public function index(): JsonResource
    {
        return GodparentsResource::collection($this->godparentsRepository->getAll());
    }

    public function store(StoreGodparentsRequest $request): JsonResource
    {
        $data = $request->all();

        return new GodparentsResource($this->godparentsRepository->store($data));
    }

    public function show(Request $request): JsonResource
    {
        $orderId = $request->route('id');
        return new GodparentsResource($this->godparentsRepository->getById($orderId));
    }

    public function destroy(Request $request): JsonResponse
    {
        $orderId = $request->route('id');
        $this->godparentsRepository->delete($orderId);
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
