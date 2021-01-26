<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\App;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
	/* public function __construct(Application $app, Request $request) { */
        /* $this->app = $app; */
        /* $this->request = $request; */
    /* } */

    public function handle($request, Closure $next)
    {
		 App::setLocale(session()->get('my_locale') ?? 'en');
		/* $this->app->setLocale(session('my_locale', config('app.locale'))); */

        return $next($request);
    }
}
