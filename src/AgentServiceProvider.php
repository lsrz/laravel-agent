<?php


namespace Lsrz\Agent;

use Illuminate\Support\ServiceProvider;

class AgentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // 发布配置文件
        $this->publishes([
            __DIR__ . '/../resources/views' => base_path('resources/views/vendor/agent'),
            __DIR__ . '/../config/agent.php' => config_path('agent.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('agent', function ($app) {
            return new Agent($app['config']);
        });
    }
}
