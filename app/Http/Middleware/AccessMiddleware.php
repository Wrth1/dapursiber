<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Consultations;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class AccessMiddleware
{
    /*
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next, $user_id)
    // {
    //     // if (!Auth::check() || Auth::user()->id !== (int)$user_id) {
    //     //     return redirect()->back()
    //     //         ->withErrors(['error' => 'You are not Authorized']);
    //     // }
    //     if (!Consultations::is_owned_by_user($consultationId, $userId)) {
    //         return redirect('/dashboard')->withErrors('You do not have access to this consultation.');
    //     }
    //     else{
    //         return $next($request);
    //     }
    // }
    public function handle(Request $request, Closure $next)
    {
        $consultationId = $request->route('chat');
        $userId = auth()->user()->id;

        if (!Consultations::is_owned_by_user($consultationId, $userId)) {
            return redirect('/dashboard')->withErrors('You do not have access to this consultation.');
        }

        return $next($request);
    }
}
