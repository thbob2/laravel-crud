<?php

namespace App\Http\Middleware;
use App\Category;
use Closure;

class VerifyCategoriesCount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   // if no categories user must create ones before creating posts
        if(Category::all()->count()==0){
            // generating session message
            session()->flash('EmptyC','no Existing Categories please Create');
            // redirect  user to the categories create view
            return redirect(route('categories.create'));
        }

        return $next($request);
    }
}
