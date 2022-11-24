<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        /*
        VerifyEmail::toMailUsing(function($notifiable, $url){
            return (new MailMessage)
            ->subject(Lang::get('Notificação de reset de senha'))
            ->line(Lang::get('Você esta recebendo este email porque nós recebemos uma solicitação de reset de senha para sua conta.'))
            ->action(Lang::get('Reset de senha'), $url)
            ->line(Lang::get('Este link de reset de senha irá expirar em :count minutos.', ['count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]))
            ->line(Lang::get('Se você não solicitou reset de senha, nenhuma ação é necessaria.'));
        });
        */

        ResetPassword::toMailUsing(function($notifiable, $url){
            return (new MailMessage)
            ->subject(Lang::get('Notificação de reset de senha'))
            ->line(Lang::get('Você esta recebendo este email porque nós recebemos uma solicitação de reset de senha para sua conta.'))
            //->action(Lang::get('Reset de senha'), 'http://futureschool.local/'.$url)
            ->action(Lang::get('Reset de senha'), url(config('app.url').route('password.reset', $url, false)))
            
            ->line(Lang::get('Este link de reset de senha irá expirar em :count minutos.', ['count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]))
            ->line(Lang::get('Se você não solicitou reset de senha, nenhuma ação é necessaria.'));
        });
    }
}
