<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RegistrationPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    // public function __construct()
    // {

    // }
    public function viewAny()
    {
        return in_array('view-registration', $user->getPermissionsViaRoles()->pluck('name')->toArray());
    }
}
