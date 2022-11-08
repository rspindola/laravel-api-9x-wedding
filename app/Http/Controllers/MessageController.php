<?php

namespace App\Http\Controllers;

use App\Contracts\MessageRepositoryInterface;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Resources\MessageResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MessageController extends Controller
{
    private MessageRepositoryInterface $messageRepository;

    public function __construct(MessageRepositoryInterface $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }

    public function index(): JsonResource
    {
        return MessageResource::collection($this->messageRepository->getAll());
    }

    public function store(StoreMessageRequest $request): JsonResource
    {
        $data = $request->all();

        return new MessageResource($this->messageRepository->store($data));
    }

    public function show(Request $request): JsonResource
    {
        $orderId = $request->route('id');
        return new MessageResource($this->messageRepository->getById($orderId));
    }

    public function destroy(Request $request): JsonResponse
    {
        $orderId = $request->route('id');
        $this->messageRepository->delete($orderId);
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
