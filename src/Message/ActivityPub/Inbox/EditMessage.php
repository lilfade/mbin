<?php declare(strict_types=1);

namespace App\Message\ActivityPub\Inbox;

use App\Message\Contracts\AsyncMessageInterface;

class EditMessage implements AsyncMessageInterface
{
    public function __construct(public array $payload)
    {
    }
}
