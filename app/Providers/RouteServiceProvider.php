<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
Use Illuminate\Support\Arr;
class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';


    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::domain($this->baseDomain('surveys'))
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/surveys.php'));

            Route::domain($this->baseDomain('crm'))
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/crm.php'));

            Route::domain($this->baseDomain('admin'))
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/admin.php'));

            Route::domain($this->baseDomain('app'))
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/app.php'));

            // Add more subdomains here if needed

            // Ensure this goes last
            Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));

        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }

     /**
     * Determine the current environment's domain (e.g. oblonghq.test) and prepend a subdomain if passed
     *
     * @return string
     */
    private function baseDomain(string $subdomain = ''): string
    {
        if (strlen($subdomain) > 0) {
            $subdomain = "{$subdomain}.";
        }
        return $subdomain . config('app.base_domain');
    }

}
