<?php


namespace Coyote6\LaravelTenants\Providers;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;


require_once __DIR__ . '/../Helpers/Helpers.php';
	
		
class TenantsServiceProvider extends ServiceProvider {
	

	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register() {
	}


	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot() {
	}
  

}
