<?php namespace cd;

use Illuminate\Support\ServiceProvider;

class RbacServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('joseph/rbac');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerRbac();

        $this->registerCommands();
    }

    /**
     * Register the application bindings.
     *
     * @return void
     */
    private function registerRbac()
    {
        $this->app->bind('rbac', function($app)
        {
            return new Rbac($app);
        });
    }

    /**
     * Register the artisan commands.
     *
     * @return void
     */
    private function registerCommands()
    {
        $this->app['command.rbac.migration'] = $this->app->share(function($app)
        {
            return new MigrationCommand($app);
        });

        $this->commands(
            'command.rbac.migration'
        );
    }

}
