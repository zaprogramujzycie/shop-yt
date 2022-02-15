<?php

namespace App\Providers;

use App\Enums\UserRole;
use App\Models\User;
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

        $this->defineUserRoleGate('isAdmin',UserRole::ADMIN);
        $this->defineUserRoleGate('isUser',UserRole::USER);
        $this->defineUserRoleGate('isGrupa1',UserRole::GRUPA1);
        $this->defineUserRoleGate('isGrupa2',UserRole::GRUPA2);
        $this->defineUserRoleGate('isGrupa3',UserRole::GRUPA3);
        $this->defineUserRoleGate('isGrupa4',UserRole::GRUPA4);
        $this->defineUserRoleGate('isGrupa5',UserRole::GRUPA5);
        $this->defineUserRoleGate('isGrupa6',UserRole::GRUPA6);
        $this->defineUserRoleGate('isGrupa7',UserRole::GRUPA7);
        $this->defineUserRoleGate('isGrupa8',UserRole::GRUPA8);
        $this->defineUserRoleGate('isGrupa9',UserRole::GRUPA9);
        $this->defineUserRoleGate('isGrupa10',UserRole::GRUPA10);
        $this->defineUserRoleGate('isGrupa11',UserRole::GRUPA11);
        $this->defineUserRoleGate('isGrupa12',UserRole::GRUPA12);
        $this->defineUserRoleGate('isVip',UserRole::VIP);
    }

    private function defineUserRoleGate(string $name, string $role): void
    {
        Gate::define($name, function (User $user) use ($role) {
            return $user->role == $role;
        });
    }
}
