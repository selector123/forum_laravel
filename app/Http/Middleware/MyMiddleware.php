<?php

namespace App\Http\Middleware;

use Closure;

class MyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        if ($request->route('page')!='pages') {
            return redirect()->route('home');
        }
        return $next($request);
        /*$response = $next($request);
        echo 'middle';
        return $response;
        чтобы посредник отрабатывал перед отображением ответа
         return $next($request);
        */

    }
}