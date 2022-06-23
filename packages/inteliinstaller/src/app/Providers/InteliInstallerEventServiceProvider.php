<?php

namespace Softwarescares\Inteliinstaller\app\Providers;

use Illuminate\Support\ServiceProvider;

use Softwarescares\Inteliinstaller\app\Events\SchoolAdminRegisteredEvent;
use Softwarescares\Inteliinstaller\app\Listeners\SchoolAdminRegisteredEventListener;
use Softwarescares\Inteliinstaller\app\Events\InteliSystemIntsallAttemptEvent;
use Softwarescares\Inteliinstaller\app\Listeners\InteliSystemIntsallAttemptEventListener;
use Softwarescares\Inteliinstaller\app\Events\SchoolAcountCreatedEventEvent;
use Softwarescares\Inteliinstaller\app\Listeners\ISchoolAcountCreatedEventventListener;

class InteliInstallerEventServiceProvider extends ServiceProvider
{

    /**
    * The event listener mappings for the inteli Installer package.
    *
    * @var array
    */
    protected $listen = [
        SchoolAdminRegisteredEvent::class => [
            SchoolAdminRegisteredEventListener::class,
        ],
        Event::class => [
            EventListener::class,
        ],
        InteliSystemIntsallAttemptEvent::class => [
            InteliSystemIntsallAttemptEventListener::class,
        ],
        SchoolAcountCreatedEvent::class => [
            SchoolAcountCreatedEventListener::class,
            ]
        ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
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
