<?php namespace App\Http\Middleware;

use Closure;

class AdminAuthenticate {

	
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if(!$request->user())
			return redirect()->guest('auth/login');
		// if($request->user()->level != 0)
		// 	return redirect('clients');
		else
			return $next($request);
	}

}
