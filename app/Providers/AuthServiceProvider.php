<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
//         'App\Models\User' => 'App\Policies\userPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define("cancel-subscribtion" , function ($user){
            return !empty($user->pck_start);
        });
        Gate::define("pay-subscribtion" , function ($user){
            return empty($user->pck_start);
        });


    }
}
