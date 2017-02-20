<?php

namespace App\Http\Middleware;

use Closure;

use App\Shop;

class RedirectAwayIfOwnsShop
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

        $shop = Shop::where('user_id', $request->user()->id)->first();

        if ($shop)
        {
            return redirect()->route('shop-dashboard');
        }

        return $next($request);
    }
}
