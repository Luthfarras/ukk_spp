<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class cek_login
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
      if(Session::get('login_status')!=true){
        return redirect('login');
      }
        return $next($request);
    }
}
