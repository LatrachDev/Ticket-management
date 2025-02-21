<?php

namespace App\Policies;

use App\Models\Ticket;
use App\Models\User;

class TicketPolicy
{
    public function view(User $user, Ticket $ticket)
    {
        return $user->is_admin || $ticket->user_id === $user->id;
    }

    public function update(User $user, Ticket $ticket)
    {
        return $user->is_admin || $ticket->user_id === $user->id;
    }

    public function delete(User $user, Ticket $ticket)
    {
        return $user->is_admin || $ticket->user_id === $user->id;
    }
} 