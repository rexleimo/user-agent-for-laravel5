<?php

namespace Lsxiao\UserAgent;

use Illuminate\Support\ServiceProvider;

class UserAgentServiceProvider extends ServiceProvider
{

    /**
     * 注册服务
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('useragent', function ($app) {
            return new UserAgent();
        });
    }

    /**
     * 提供的服务
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['useragent'];
    }
}
