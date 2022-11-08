<?php

namespace App\Repositories;

use App\Models\Message;
use App\Contracts\MessageRepositoryInterface;

class MessageRepository implements MessageRepositoryInterface
{
    public function getAll()
    {
        return Message::all();
    }

    public function getById($messageId)
    {
        return Message::findOrFail($messageId);
    }

    public function store(array $messageDetails)
    {
        return Message::create($messageDetails);
    }

    public function delete($messageId)
    {
        Message::destroy($messageId);
    }
}
