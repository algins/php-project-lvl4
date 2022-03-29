<?php

namespace App\Providers;

use App\Models\Label;
use App\Models\Task;
use App\Models\TaskStatus;
use App\Policies\LabelPolicy;
use App\Policies\TaskPolicy;
use App\Policies\TaskStatusPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /** @var array<class-string, class-string> */
    protected $policies = [
        Label::class => LabelPolicy::class,
        Task::class => TaskPolicy::class,
        TaskStatus::class => TaskStatusPolicy::class,
    ];

    public function boot(): void
    {
        $this->registerPolicies();
    }
}
