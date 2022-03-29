<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class TaskStatusPolicy
{
    use HandlesAuthorization;

    public function viewAny(): bool
    {
        return true;
    }

    public function view(): bool
    {
        return true;
    }

    public function create(): bool
    {
        return auth()->check();
    }

    public function update(): bool
    {
        return auth()->check();
    }

    public function delete(): bool
    {
        return auth()->check();
    }

    public function restore(): bool
    {
        return false;
    }

    public function forceDelete(): bool
    {
        return false;
    }
}
