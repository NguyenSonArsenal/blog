<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespaceBackend = 'App\Http\Controllers\Backend';
    protected $namespaceFrontend = 'App\Http\Controllers\Frontend';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapBackendRoutes();
        $this->mapFrontendRoutes();
    }

    protected function mapBackendRoutes()
    {
        Route::prefix(getConstant('BACKEND_ALIAS_URL'))
            ->middleware('web') // @todo
            ->name(getConstant('BACKEND_ROUTE_NAME_PREFIX') . '.')
            ->namespace($this->namespaceBackend)
            ->group(base_path('routes/backend.php'));
    }

    protected function mapFrontendRoutes()
    {
        Route::prefix(getConstant('FRONTEND_ALIAS_URL', '/'))
            ->middleware('web')
            ->name(getConstant('FRONTEND_ROUTE_NAME_PREFIX') . '.')
            ->namespace($this->namespaceFrontend)
            ->group(base_path('routes/frontend.php'));
    }
}
