<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request , Closure $next)
{
  if(isset(\Auth::user()->role)){
    if (\Auth::user()->role[0]->id == 1)
    {
        return $next($request);
        return redirect('/admin')>with("error!");  
    }
    else { 
      \Auth::logout();
      return redirect('login')->with('error','you are not authorized');
    }
  }else{
    \Auth::logout();
      return redirect('login')->with('error','you are not authorized');
      
  }
  
    
    
    }
}

