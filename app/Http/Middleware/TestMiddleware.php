<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      
        $users = User::findOrFail(2);
        if($users->email == 'admin@gmail.com'){
            return $next($request);
        }else{
            return redirect()->to('/');
        }
        
    }
}
