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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('programador', function ($user) {
            if ($user->programador) {
                return true;
            }
            return $user->programador;
        });
        Gate::define('telabackend', function ($user) {
            if ($user->programador) {
                return true;
            }
            return $user->telabackend;
        });
        Gate::define('sliderprincipal', function ($user) {
            if ($user->programador) {
                return true;
            }
            return $user->sliderprincipal;
        });
        Gate::define('administrador', function ($user) {
            if ($user->programador) {
                return true;
            }
            return $user->administrador;
        });
    }
}
