<?php

namespace App\Http\Middleware;

use Closure;

use App\Shop;

use Alert;

class NotShopOwner
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

        if($request->_shop){

            if($shop->id == $request->_shop){
                return $next($request);
            }

            return response('Security Issue - Due to our high security, something must have gone wrong! Please re-login if problem persists', 422);

        }


        return response('Security Issue - Due to our high security, something must have gone wrong! Please re-login if problem persists', 422);

    }
}
