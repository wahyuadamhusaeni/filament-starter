<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'Spatie\Permission\Models\Role' => 'App\Policies\RolePolicy',
        'Spatie\Permission\Models\Permission' => 'App\Policies\PermissionPolicy',
        'Spatie\Activitylog\Models\Activity' => 'App\Policies\ActivityPolicy',
        'BezhanSalleh\FilamentExceptions\Models\Exception' => 'App\Policies\ExceptionPolicy',
        'Croustibat\FilamentJobsMonitor\Models\QueueMonitor' => 'App\Policies\QueueMonitorPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {

    }
}
