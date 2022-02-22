<?php

namespace App\Policies;

use App\Models\Admin\GalleryCategory;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GalleryCategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return in_array('view-gallery-category', $user->getPermissionsViaRoles()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\GalleryCategory  $galleryCategory
     * @return mixed
     */
    public function view(User $user)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return in_array('create-gallery-category', $user->getPermissionsViaRoles()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\GalleryCategory  $galleryCategory
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array('update-gallery-category', $user->getPermissionsViaRoles()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\GalleryCategory  $galleryCategory
     * @return mixed
     */
    public function delete(User $user)
    {
        return in_array('delete-gallery-category', $user->getPermissionsViaRoles()->pluck('name')->toArray());
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\GalleryCategory  $galleryCategory
     * @return mixed
     */
    public function restore(User $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\GalleryCategory  $galleryCategory
     * @return mixed
     */
    public function forceDelete(User $user)
    {
        //
    }
}
