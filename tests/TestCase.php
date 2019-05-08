<?php

namespace hosseinkhodadadeh\laravelusers\Test;

use hosseinkhodadadeh\laravelusers\LaravelUsersFacade;
use hosseinkhodadadeh\laravelusers\LaravelUsersServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return hosseinkhodadadeh\laravelusers\LaravelUsersServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [LaravelUsersServiceProvider::class];
    }

    /**
     * Load package alias.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'UsersManagementController' => LaravelUsersFacade::class,
        ];
    }
}
