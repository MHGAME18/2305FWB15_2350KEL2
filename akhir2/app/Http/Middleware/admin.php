<?php
namespace App\Http\Middleware;

use Closure;

class autentikasi
{
	public function handle($request, Closure $next)
	{
		if(auth()->check() && $request->pengguna()->level == 1){
		return $next($request);	
		}
		return redirect('login');
	}
}
