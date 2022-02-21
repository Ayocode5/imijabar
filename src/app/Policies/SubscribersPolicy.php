<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubscribersPolicy
{
    use HandlesAuthorization;

    public function sendEmail(User $user)
    {
        return in_array('send-email', $user->getPermissionsViaRoles()->pluck('name')->toArray());
    }

    public function delete(User $user)
    {
        return in_array('delete-subscriber', $user->getPermissionsViaRoles()->pluck('name')->toArray());
    }
}
