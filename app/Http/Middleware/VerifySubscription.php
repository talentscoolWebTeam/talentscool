<?php namespace App\Http\Middleware;

use Closure;

class VerifySubscription {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if ($request->user() && ! $request->user()->subscribed()) {
			// This user is not a paying customer...
			return "You need to pay for this";
		}
		return $next($request);
	}

}
