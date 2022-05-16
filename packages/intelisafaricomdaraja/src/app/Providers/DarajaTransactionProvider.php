<?php

namespace Softwarescares\Intelisafaricomdaraja\app\Providers;

use Softwarescares\Intelisafaricomdaraja\app\Http\Controllers\DarajaProvider\AccountBalanceController;
use Softwarescares\Intelisafaricomdaraja\app\Http\Controllers\DarajaProvider\BusinessToCustomerController;
use Softwarescares\Intelisafaricomdaraja\app\Http\Controllers\DarajaProvider\CustomerToBusinessController;
use Softwarescares\Intelisafaricomdaraja\app\Http\Controllers\DarajaProvider\MpesaExpressController;
use Softwarescares\Intelisafaricomdaraja\app\Http\Controllers\DarajaProvider\TransactionReversalController;
use Illuminate\Support\ServiceProvider;
use Softwarescares\Intelisafaricomdaraja\app\Contracts\TransactionInterface;
use Softwarescares\Intelisafaricomdaraja\app\Events\MPesaExpressTransactionEvent;
use Softwarescares\Intelisafaricomdaraja\app\Listeners\MPesaExpressTransactionEventListener;
use Softwarescares\Intelisafaricomdaraja\app\Events\CustomerToBusinessTransactionEvent;
use Softwarescares\Intelisafaricomdaraja\app\Listeners\CustomerToBusinessTransactionEventListener;
use Softwarescares\Intelisafaricomdaraja\app\Events\BusinessToCustomeTransactionEvent;
use Softwarescares\Intelisafaricomdaraja\app\Events\TransactionStatusNotificationEvent;
use Softwarescares\Intelisafaricomdaraja\app\Http\Controllers\DarajaProvider\TransactionStatusController;
use Softwarescares\Intelisafaricomdaraja\app\Listeners\BusinessToCustomeTransactionEventListener;
use Softwarescares\Intelisafaricomdaraja\app\Listeners\TransactionStatusNotificationEventlistener;
use Softwarescares\Intelisafaricomdaraja\app\Services\AccountBalanceService;
use Softwarescares\Intelisafaricomdaraja\app\Services\BusinessToCustomerservice;
use Softwarescares\Intelisafaricomdaraja\app\Services\CustomerToBusinessService;
use Softwarescares\Intelisafaricomdaraja\app\Services\MPesaExpressService;
use Softwarescares\Intelisafaricomdaraja\app\Services\TransactionReversalService;
use Softwarescares\Intelisafaricomdaraja\app\Services\TransactionStatusService;

class DarajaTransactionProvider extends ServiceProvider
{



    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(AccountBalanceController::class)
             ->needs(TransactionInterface::class)
             ->give(AccountBalanceService::class);

        $this->app->when(BusinessToCustomerController::class)
             ->needs(TransactionInterface::class)
             ->give(BusinessToCustomerservice::class);

        $this->app->when(CustomerToBusinessController::class)
             ->needs(TransactionInterface::class)
             ->give(CustomerToBusinessService::class);

        $this->app->when(MpesaExpressController::class)
             ->needs(TransactionInterface::class)
             ->give(MPesaExpressService::class);

        $this->app->when(TransactionReversalController::class)
             ->needs(TransactionInterface::class)
             ->give(TransactionReversalService::class);

        $this->app->when(TransactionStatusController::class)
             ->needs(TransactionInterface::class)
             ->give(TransactionStatusService::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
