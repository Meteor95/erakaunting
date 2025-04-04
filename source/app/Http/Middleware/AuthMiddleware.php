<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Access specific HttpOnly cookie
        $uuid = $request->cookie('uuid');
        $tokenValue = base64_decode($request->cookie('token_akses'));
        $apiUrl = env('APP_VERSI_API') . '/auth/rsadecrypt';  
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post($apiUrl, [
            'token_cookie' => $tokenValue,
            'uuid' => $uuid,
        ]);
        $responseData = $response->json();
        if ($responseData['success']) {
            return $next($request);
        }
        return redirect()->route('auth.login');
    }
}
