<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

use App\Product;

class RedirectIfProductOwner
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
        $user = Auth::user();

        $shop = $user->shop()->first();

        $p = $shop->products()->where('id', $request->product->id)->first();



        if ($p){

            return $next($request);

        }else{

            return redirect()->route('fashion-home');
        }



    }
}
