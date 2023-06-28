<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Task;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('create-task', function (User $user) {
            return $user->role === 'gebruiker';
        });

        Gate::define('edit-task', function (User $user, Task $task) {
            return $user->role === 'gebruiker' && $user->id === $task->user_id;
        });

        Gate::define('delete-task', function (User $user) {
            return $user->role === 'beheerder';
        });
    }
}
