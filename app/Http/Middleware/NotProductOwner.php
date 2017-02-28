<?php

namespace App\Http\Middleware;

use Closure;

use App\Shop;

class NotProductOwner
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

        if ($request->_product){

            $prod = $shop->products()->where('id', $request->_product)->first();

            if($prod){
                return $next($request);
            }else{
                return response('Security Issue - Due to our high security, something must have gone wrong! Please re-login if problem persists', 422);
            }
        }

        return response('Security Issue - Due to our high security, something must have gone wrong! Please re-login if problem persists', 422);


    }
}
