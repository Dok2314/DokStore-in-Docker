<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CorsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $enabledHost = env('ENABLED_HOST', 'http://web.dokstore.local:8888');

        // Если Origin не соответствует разрешенному домену, блокируем запрос
        if ($request->headers->get('Origin') !== $enabledHost) {
            return response('Access forbidden: CORS policy.', 403);
        }

        $response = $next($request);

        $response->headers->set('Access-Control-Allow-Origin', $enabledHost);
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        $response->headers->set('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-Token-Auth, Authorization');

        return $response;
    }
}
