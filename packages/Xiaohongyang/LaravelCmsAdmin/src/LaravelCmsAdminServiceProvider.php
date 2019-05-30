<?php

namespace Xiaohongyang\LaravelCmsAdmin;

use Illuminate\Support\ServiceProvider;

class LaravelCmsAdminServiceProvider extends ServiceProvider
{

    const C_ViewNamespace = 'cms_admin';

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/cms_admin.config.php', 'cms_admin');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', self::C_ViewNamespace);

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }
}
