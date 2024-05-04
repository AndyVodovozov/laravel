<?php

use App\Http\Middleware\CheckRole;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware('web')
                ->prefix('admin')
                ->group(base_path('routes/admin.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {

        /*        $middleware->group('admin', [
                    \App\Http\Middleware\EnsureTokenIsValid::class,
                    \App\Http\Middleware\CheckRole::class,
                ]);*/
        $middleware->append(CheckRole::class);
        //$middleware->prependToGroup('web', 'role:admin,user');
        //$middleware->web(remove: \Illuminate\Session\Middleware\StartSession::class);
        /*        $middleware->alias([
                    'role' => \App\Http\Middleware\CheckRole::class,
                ]);*/
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
