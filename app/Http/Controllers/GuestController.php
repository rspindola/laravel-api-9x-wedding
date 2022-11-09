<?php

namespace App\Http\Controllers;

use App\Contracts\GuestRepositoryInterface;
use App\Http\Requests\StoreGuestRequest;
use App\Http\Resources\GuestResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GuestController extends Controller
{
    private GuestRepositoryInterface $guestRepository;

    public function __construct(GuestRepositoryInterface $guestRepository)
    {
        $this->guestRepository = $guestRepository;
    }

    public function index(): JsonResource
    {
        return GuestResource::collection($this->guestRepository->getAll());
    }

    public function store(StoreGuestRequest $request): JsonResource
    {
        $data = $request->all();

        return new GuestResource($this->guestRepository->store($data));
    }

    public function show(Request $request): JsonResource
    {
        $orderId = $request->route('id');
        return new GuestResource($this->guestRepository->getById($orderId));
    }

    public function update(Request $request): JsonResource
    {
        $orderId = $request->route('id');
        $data = $request->all();
        return new GuestResource($this->guestRepository->update($orderId, $data));
    }

    public function destroy(Request $request): JsonResponse
    {
        $orderId = $request->route('id');
        $this->guestRepository->delete($orderId);
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
