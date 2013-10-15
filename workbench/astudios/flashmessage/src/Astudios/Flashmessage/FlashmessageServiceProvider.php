<?php namespace Astudios\Flashmessage;

use Illuminate\Support\ServiceProvider;

class FlashmessageServiceProvider extends ServiceProvider {

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
		$this->package('astudios/flashmessage');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['flashmessage'] = $this->app->share(function($app)
        {
            return new Flashmessage;
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('flashmessage');
	}

}