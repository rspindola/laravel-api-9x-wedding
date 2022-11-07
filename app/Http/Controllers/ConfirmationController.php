<?php

namespace App\Http\Controllers;

use App\Contracts\ConfirmationRepositoryInterface;
use App\Http\Requests\StoreConfirmationRequest;
use App\Http\Resources\ConfirmationResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ConfirmationController extends Controller
{
    private ConfirmationRepositoryInterface $confirmationRepository;

    public function __construct(ConfirmationRepositoryInterface $confirmationRepository)
    {
        $this->confirmationRepository = $confirmationRepository;
    }

    public function index(): JsonResource
    {
        return ConfirmationResource::collection($this->confirmationRepository->getAll());
    }

    public function store(StoreConfirmationRequest $request): JsonResource
    {
        $data = $request->all();

        return new ConfirmationResource($this->confirmationRepository->store($data));
    }

    public function show(Request $request): JsonResource
    {
        $orderId = $request->route('id');
        return new ConfirmationResource($this->confirmationRepository->getById($orderId));
    }

    public function destroy(Request $request): JsonResponse
    {
        $orderId = $request->route('id');
        $this->confirmationRepository->delete($orderId);
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
