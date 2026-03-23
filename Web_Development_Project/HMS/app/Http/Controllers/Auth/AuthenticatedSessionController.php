<?php

namespace App\Http\Controllers\Auth;

use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController as FortifyAuthenticatedSessionController;
use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\LogoutResponse;

class AuthenticatedSessionController extends FortifyAuthenticatedSessionController
{
    /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Laravel\Fortify\Contracts\LogoutResponse
     */
    public function destroy(Request $request): LogoutResponse
    {

        auth()->logout();


        $request->session()->invalidate();


        $request->session()->regenerateToken();

      
        return app(LogoutResponse::class);
    }
}
