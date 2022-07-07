<?php

namespace Softwarescares\Intelisafaricomdaraja\app\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

use Softwarescares\Intelisafaricomdaraja\app\Events\BusinessToCustomerTransactionEvent;
use Softwarescares\Intelisafaricomdaraja\app\Events\CustomerToBusinessTransactionEvent;
use Softwarescares\Intelisafaricomdaraja\app\Events\TransactionNotificationEvent;
use Softwarescares\Intelisafaricomdaraja\app\Events\MPesaExpressTransactionEvent;
use Softwarescares\Intelisafaricomdaraja\app\Events\StoreCurrentTransactionUserEvent;
use Softwarescares\Intelisafaricomdaraja\app\Events\TransactionReversalEvent;
use Softwarescares\Intelisafaricomdaraja\app\Events\TransactionStatusNotificationEvent;
use Softwarescares\Intelisafaricomdaraja\app\Events\TransactionUpdateReversalEvent;
use Softwarescares\Intelisafaricomdaraja\app\Listeners\BusinessToCustomerTransactionEventListener;
use Softwarescares\Intelisafaricomdaraja\app\Listeners\CustomerToBusinessTransactionEventListener;
use Softwarescares\Intelisafaricomdaraja\app\Listeners\TransactionNotificationEventListener;
use Softwarescares\Intelisafaricomdaraja\app\Listeners\MPesaExpressTransactionEventListener;
use Softwarescares\Intelisafaricomdaraja\app\Listeners\StoreCurrentTransactionUserEventListener;
use Softwarescares\Intelisafaricomdaraja\app\Listeners\TransactionReversalEventListener;
use Softwarescares\Intelisafaricomdaraja\app\Listeners\TransactionStatusNotificationEventlistener;
use Softwarescares\Intelisafaricomdaraja\app\Listeners\TransactionUpdateReversalEventListener;

class DarajaEventServiceProvider extends ServiceProvider
{
    /**
    * The event listener mappings for the application.
    *
    * @var array
    */
    protected $listen = [
        InteliPaymentSuccessEvent::class => [
            InteliPaymentSuccessEventListener::class,
        ],
        MPesaExpressTransactionResultEvent::class => [
            MPesaExpressTransactionResultEventListener::class,
            ]
        ];
    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        # dd("Fired !!!!!!!!!!!!!!!");
    }
}
