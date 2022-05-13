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
        Gate::define('enviarxml', function ($user) {
            if ($user->programador) {
                return true;
            }
            return $user->enviarxml;
        });
        Gate::define('enviarimagens', function ($user) {
            if ($user->programador) {
                return true;
            }
            return $user->enviarimagens;
        });
        Gate::define('popupprincipal', function ($user) {
            if ($user->programador) {
                return true;
            }
            return $user->popupprincipal;
        });
        Gate::define('promocoes', function ($user) {
            if ($user->programador) {
                return true;
            }
            return $user->promocoes;
        });
        Gate::define('sliderprincipal', function ($user) {
            if ($user->programador) {
                return true;
            }
            return $user->sliderprincipal;
        });
        Gate::define('userdashboard', function ($user) {
            if ($user->programador) {
                return true;
            }
            return $user->userdashboard;
        });
        Gate::define('administrador', function ($user) {
            if ($user->programador) {
                return true;
            }
            return $user->administrador;
        });
    }
}
